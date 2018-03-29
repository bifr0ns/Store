<?php
include "db_conn.php";

switch ($_POST['funcion']){
    case 'addtoCart':
        addtoCart();
        break;
    case 'removetoCart':
        removetoCart();
        break;
    case 'getCart':
        cart(1,$_POST['user']);
        break;
    case 'loginOut':
        loginOut();
        break;
    case 'setBitacora':
        setBitacora();
        break;
    case 'setTime':
        setTime();
        break;
}

function addtoCart(){
    $id = $_POST['id'];
    $user = $_POST['user'];
    if( comprobe_byID($id) ) {
        $sql = "INSERT INTO  cart(id_product,user,quantity) VALUES($id,'$user',1)";
        $result = dbo_conn::getConn()->query($sql);
    } else {
        $sql = "UPDATE cart SET quantity = quantity + 1 WHERE id_product = $id";
        $result = dbo_conn::getConn()->query($sql);
    }

    $sql = "SELECT * FROM products WHERE id = $id";
    $result = dbo_conn::getConn()->query($sql);
    $row = $result->fetch_assoc();
    $idsc = $row['id_subcategory'];
    $sql = "INSERT INTO binnacle(user, priority, time, subcategory, trademark) VALUES('$user',1,'',$idsc,'')";
    $result = dbo_conn::getConn()->query($sql);

    echo json_encode(cart(0));
}
function removetoCart(){
    $id = $_POST['id'];
    $sql = "SELECT * FROM cart WHERE id_product = $id";
    $result = dbo_conn::getConn()->query($sql);
    $row = $result->fetch_assoc();
    $cant = $row['quantity'];
    if($cant > 1){
        $sql = "UPDATE cart SET quantity = quantity - 1 WHERE id_product = $id";
        $result = dbo_conn::getConn()->query($sql);
    } else {
        $sql = "DELETE FROM cart WHERE id_product = $id";
        $result = dbo_conn::getConn()->query($sql);
    }

    echo json_encode(cart(0));
}


function comprobe_byID($id){
    $sql = "SELECT * FROM cart WHERE id_product = $id";
    $result = dbo_conn::getConn()->query($sql);
    if( $result->fetch_assoc() == NULL)return true;
    else return false;
}

function cart($c,$user = ''){
    $data = array();
    $cont = 1;

    $sql = "SELECT c.*,p.name FROM cart c LEFT JOIN products AS p ON c.id_product = p.id WHERE c.user = '$user'";

    $result = dbo_conn::getConn()->query($sql);
    while($row = $result->fetch_assoc()) {
        $data[] = array(
            'cont' => $cont,
            'id_cart' => $row['id_cart'],
            'id_product' => $row['id_product'],
            'name' => $row['name'],
            'quantity' => $row['quantity'],
        );
        $cont++;
    }
    if($c == 0)
       return $data;

    if($c == 1)
    echo json_encode($data);
}

function loginOut(){
    $sql = "INSERT INTO login(id_user,status,date_in,date_out) 
              SELECT id_user, 0 AS status, date_in, NOW() AS date_out FROM login ORDER BY id_login DESC LIMIT 1";
    $result = dbo_conn::getConn()->query($sql);
    echo json_encode($result);
}

function setTime(){

    $user = $_POST['user'];
    $time = $_POST['time'];
    $idsc = $_POST['idsc'];
    $sql = "INSERT INTO binnacle(user, priority, time, subcategory, trademark) VALUES('$user',2,'$time',$idsc,'')";
    $result = dbo_conn::getConn()->query($sql);
    echo json_encode($result);
}
?>