<?php
include "db_conn.php";

switch ($_POST['funcion']){

    case 'getLogin':
        getlogin();
        break;
    case 'getDetails':
        getDetails();
        break;
    case 'getCollections':
        getCollections();
        break;
    case 'list_prod':
        list_prod();
        break;
    case 'search_prod':
        search_prod();
        break;
    case 'search_cat':
        search_cat();
        break;
    case 'login':
        login();
        break;

}


function getDetails(){
    $id = $_POST['id'];
    $data = array();
    $sql = "SELECT p.*,c.name AS category, sc.name AS subcategory FROM products p 
              LEFT JOIN category AS c ON c.id_category = p.id_category
                LEFT JOIN subcategory AS sc ON sc.id_subcategory = p.id_subcategory
                  WHERE id = $id";
    $result = dbo_conn::getConn()->query($sql);
    $row = $result->fetch_assoc();

    $data = array(
        'id' => $row['id'],
        'name' => utf8_encode($row['name']),
        'description' => utf8_encode($row['description']),
        'price' => '$'.$row['price'],
        'category' => utf8_encode($row['category']),
        'id_subcategory' => utf8_encode($row['id_subcategory']),
        'subcategory' => utf8_encode($row['subcategory']),
        'src' => $row['src'],
        'subcats' => interes($row['id_subcategory'])
    );

    echo json_encode($data);
}

function interes($id){
    $data = array();
    $sql = "SELECT p.*,c.name AS category,s.name AS subcategory FROM products p 
              LEFT JOIN category AS c ON c.id_category = p.id_category 
                  LEFT JOIN subcategory AS s ON s.id_subcategory = p.id_subcategory 
                    WHERE p.id_category = (SELECT id_category FROM subcategory WHERE id_subcategory = $id)
                      ORDER BY RAND() 
                        LIMIT 6";
    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] = array(
            'id' => $row['id'],
            'name' => utf8_encode($row['name']),
            'description' => utf8_encode($row['description']),
            'price' => '$'.$row['price'],
            'category' => utf8_encode($row['category']),
            'id_subcategory' => utf8_encode($row['id_subcategory']),
            'subcategory' => utf8_encode($row['subcategory']),
            'src' => $row['src']
        );
    }

    return $data;
}
function getCollections(){
    $id = $_POST['id_category'];
    $data = array();

    $sql = "SELECT * FROM subcategories WHERE id_category=$id";
    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] =array(
            'id_subcategory' => $row['id_subcategory'],
            'name' => utf8_encode($row['name']),
            'category' => $row['id_category']
        );
    }

    echo json_encode($data);
}

function getSubcat($id_cat){
    $data = array();
    $sql = "SELECT * FROM subcategory where id_category = $id_cat";
    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] =array(
            'id_subcategory' => $row['id_subcategory'],
            'name' => utf8_encode($row['name'])
        );
    }
    return $data;
}

function list_prod(){
    $data = array();

    $sql = "SELECT p.*,c.name AS category, sc.name AS subcategory, t.name AS trademark FROM products p 
              LEFT JOIN category AS c ON c.id_category = p.id_category
                LEFT JOIN subcategory AS sc ON sc.id_subcategory = p.id_subcategory
                  LEFT JOIN trademark AS t ON t.id_trademark = p.trademark
                    ORDER BY RAND()
                      LIMIT 30";
    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] =array(
            'id' => $row['id'],
            'name' => utf8_encode($row['name']),
            'description' => utf8_encode($row['description']),
            'price' => '$'.$row['price'],
            'category' => utf8_encode($row['category']),
            'subcategory' => utf8_encode($row['subcategory']),
            'src' => $row['src'],
            'trademark' => utf8_encode($row['trademark'])
        );
    }

    echo json_encode($data);
}

function search_prod(){
    $data = array();
    $word = $_POST['word'];
    $sql = "SELECT p.*,c.name AS category, sc.name AS subcategory, t.name AS trademark FROM products p 
              LEFT JOIN category AS c ON c.id_category = p.id_category
                LEFT JOIN subcategory AS sc ON sc.id_subcategory = p.id_subcategory
                  LEFT JOIN trademark AS t ON t.id_trademark = p.trademark
                    WHERE sc.name LIKE '%$word%'";

    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] =array(
            'id' => $row['id'],
            'name' => utf8_encode($row['name']),
            'description' => utf8_encode($row['description']),
            'price' => '$'.$row['price'],
            'category' => utf8_encode($row['category']),
            'subcategory' => utf8_encode($row['subcategory']),
            'src' => $row['src'],
            'trademark' => utf8_encode($row['trademark'])
        );
    }

    echo json_encode($data);
}

function search_cat(){

    $data = array();
    $cat = $_POST['subcat'];
    $sql = "SELECT p.*,c.name AS category, sc.name AS subcategory, t.name AS trademark FROM products p 
              LEFT JOIN category AS c ON c.id_category = p.id_category
                LEFT JOIN subcategory AS sc ON sc.id_subcategory = p.id_subcategory
                  LEFT JOIN trademark AS t ON t.id_trademark = p.trademark
                    WHERE sc.id_subcategory = $cat";

    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){

        $data[] =array(
            'id' => $row['id'],
            'name' => utf8_encode($row['name']),
            'description' => utf8_encode($row['description']),
            'price' => '$'.$row['price'],
            'category' => utf8_encode($row['category']),
            'subcategory' => utf8_encode($row['subcategory']),
            'src' => $row['src'],
            'trademark' => utf8_encode($row['trademark'])

        );
    }

    $user = $_POST['user'];

    $sql = "INSERT INTO binnacle(user, priority, time, subcategory, trademark) VALUES('$user',3,'',$cat,'')";
    $result = dbo_conn::getConn()->query($sql);

    echo json_encode($data);
}
function getlogin(){
    $data = array();

    $sql = "SELECT * FROM login ORDER BY id_login DESC LIMIT 1";

    $result = dbo_conn::getConn()->query($sql);
    $row = $result->fetch_assoc();

    if($row != NULL) {
        if ($row['status'] == 0) {
            $data = false;
        } else if ($row['status'] == 1) {
            $id_user = $row['id_user'];
            $sql = "SELECT * FROM users WHERE id_user = $id_user";
            $result = dbo_conn::getConn()->query($sql);
            $row = $result->fetch_assoc();
            $data = $row;
        }
    } else {
        $data = false;
    }
    echo json_encode($data);
}

function login(){
    $data = array();
    $name = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE name = '$name'";

    $result = dbo_conn::getConn()->query($sql);
    $row = $result->fetch_assoc();

    if($row != NULL){
        $data = $row;
        $id_user = $data['id_user'];
        $passw = $data['password'];
        $des = password_verify($pass, $passw);
        if($des) {
            $sql = "INSERT INTO  login(id_user,status,date_in) VALUES($id_user,1,NOW())";
            $result = dbo_conn::getConn()->query($sql);
        }
    } else {
        $data = false;
    }

    echo json_encode($data);
}

function getRecomendaciones(){
    $data = array();
    $user = $_POST['user'];

    $sql = "SELECT p.* FROM binnacle b 
              LEFT JOIN products AS p ON b.subcategory = p.id_subcategory
                  LEFT JOIN cart AS c ON c.id_product = p.id
                      WHERE c.user = '$user' AND b.priority = 1
                          LIMIT 6 ";
    echo $sql;
    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    var_dump($result);
    echo json_encode($data);

}

?>