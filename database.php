<?php 
include "classes.php";

$servername = "localhost";
$username = "root";
$password = "";
$database = "coffeeshop";

$conn = new mysqli($servername, $username, $password, $database);


$sql = "SELECT * FROM drinksTable";
$result = $conn->query($sql);
$drinksArray = array(); 
while($row = $result->fetch_assoc()) {
    $c = new coffee();
    $c->name = $row["drinkName"];
    $c->description = $row["drinkDesc"];
    array_push($c->prices, $row["smallPrice"], $row["mediumPrice"], $row["largePrice"]);
    array_push($drinksArray, $c);
}


$sql = "SELECT * FROM condimenttable";
$result = $conn->query($sql);
$condArray = array(); 
while($row = $result->fetch_assoc()) {
    $c = new condement();
    $c->name = $row["condimentName"];
    $c->price = $row["condimentPrice"];
    array_push($condArray, $c);
}


$sql = "SELECT * FROM beveragestable";
$result = $conn->query($sql);
$bevArray = array(); 
while($row = $result->fetch_assoc()) {
    $c = new condement();
    $c->name = $row["beverageName"];
    $c->price = $row["beveragePrice"];
    array_push($bevArray, $c);
}

function pushOrder($name, $email, $address, $phone, $price, $dr) {
    global $conn;
    $sql = "INSERT INTO orderhistory (customerName, email, phone, address, drinkOrdered, price, date) VALUES ('$name', '$email', '$phone', '$address', '$dr', '$price', now())";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
          
}

?>