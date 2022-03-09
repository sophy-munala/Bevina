<?php 

$conn = new PDO ('mysql:host=localhost;dbname=bevina','root','');
foreach($_POST['product_name'] as $key => $value){
    $sql = 'INSERT INTO items(id, name, description, quantity, price) VALUES (:id, :name, :des, :qty, :price)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'id'=> $_POST['product_id'][$key],
        'name'=>$_POST['product_name'][$key],
        'price'=> $_POST['product_des'][$key],
        'qty'=>$_POST['product_qty'][$key],
        'des'=>$_POST['product_price'][$key]

    ]);
}
echo 'Items Inserted Successfully!!';
 ?>