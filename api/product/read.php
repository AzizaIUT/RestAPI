<?php

    //required headers
    header("Assess-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    //database connection

    include_once '../config/database.php';
    include_once '../objects/product.php';

    $datebase = new Database();
    $db = $datebase->getConnection();

    $product = new Product($db);

    //read products 
    //query products

    $stmt = $product->read();
    $num = $stmt->rowCount();

    //check if more than 0 record found
    if ($num>0){
        //products array 
         $products_arr = array();
         $products_arr ["records"]=array();
         //retrieve our table contents
         //fetch() is faster than fetchAll()
         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //extract row
            //this willl make $row['naem'] to just $name only
            extract($row);
            $product_item = array(
                "id" => $id,
                "name" => $name,
                "description" =>html_entity_decode($description),
                "price" => $price,
                "category_id" => $category_id,
                "category_name" => $category_name
            );
            array_push($products_arr["records"], $product_item);
         }
         //set response code 200 OK
         http_response_code(200);

         //show products data in json format
         echo json_encode($products_arr);
    }else{
        //set response code - 404 not found
        http_response_code(404);

        echo json_encode(
            array("message"=>"Not products found.")
        );
    }

    //no products found will be here



