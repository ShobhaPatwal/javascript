<?php

$products = array(
    array(
        'sku' => 1,
        'name' => "Bat",
        'price' => 50
    ),
    array(
        'sku' => 2,
        'name' => "Ball",
        'price' => 10
    ),
    array(
        'sku' => 3,
        'name' => "Helmet",
        'price' => 60
    ) 
);
/* $html = '';
foreach($products as $key=>$product) {
    $html .= '<tr><td>'.$product['sku'].'</td><td>'.$product['name'].'</td><td>'.$product['price'].'</td></tr>';
}
echo $html; */

$productArray = json_encode($products);
echo $productArray;

?>