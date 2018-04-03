<?php
include "db_conn.php";

switch ($_POST['funcion']){

    case 'getCollections':
        getCollections();
        break;
    case 'getProducts':
        getProducts();
        break;

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

function getProducts(){
    $data = array();
    $subcat = $_POST['id_subcategory'];

    if($subcat == 0) {
        $sql = "SELECT p.id_product, p.art, p.name AS product_name, p.price, p.description, p.composition, p.id_category, p.id_subcategory, p.id_color, c.* 
                FROM product p 
                    LEFT JOIN colors AS c ON p.id_color = c.id_color
                      WHERE p.id_color = c.id_color ORDER BY RAND()";
    } else {
        $sql = "SELECT p.id_product, p.art, p.name AS product_name, p.price, p.description, p.composition, p.id_category, p.id_subcategory, p.id_color, c.* 
                FROM product p 
                    LEFT JOIN colors AS c ON p.id_color = c.id_color
                      WHERE p.id_color = c.id_color =$subcat ORDER BY RAND()";
    }

    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){

        $data[] =array(
            'id_product' => $row['id_product'],
            'article' => $row['art'],
            'product_name' => utf8_encode($row['product_name']),
            'price' => '$'.$row['price'],
            'description' => utf8_encode($row['description']),
            'composition' => utf8_encode($row['composition']),
            'id_category' => $row['id_category'],
            'id_subcategory' => $row['id_subcategory'],
            'colorData' => getColorData($row['id_color']),
            'colors' => getColors($row['art']),
            'galery' => get_galery_by_color($row['id_product'],$row['id_color'])

        );
    }

    echo json_encode($data);
}

function getColorData($id){
    $data = array();
    $sql = "SELECT * FROM colors where id_color = $id";
    $result = dbo_conn::getConn()->query($sql);
    $row = $result->fetch_assoc();

    $data =array(
        'id_color' => $row['id_color'],
        'color_art' => $row['color_art'],
        'color_name' => utf8_encode($row['color_name']),
        'color_hex_code' => utf8_encode($row['color_hex_code'])
    );

    return $data;
}

function getColors($art){
    $data = array();
    $sql = "SELECT DISTINCT c.id_color, c.color_art, c.color_name, c.color_hex_code FROM galery_product_colors g 
              LEFT JOIN colors AS c ON g.id_color = c.id_color
                WHERE g.art = '$art'";
    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] =array(
            'id_color' => $row['id_color'],
            'color_art' => $row['color_art'],
            'color_name' => utf8_encode($row['color_name']),
            'color_hex_code' => utf8_encode($row['color_hex_code']),
        );
    }
    return $data;
}

function get_galery_by_color($product,$color){
    $data = array();
    $sql = "SELECT src FROM galery_product_colors WHERE id_product = $product AND id_color = $color";
    $result = dbo_conn::getConn()->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] =array(
            'src' => $row['src']
        );
    }
    return $data;
}

?>