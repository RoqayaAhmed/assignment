<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="order.css">
    <title>ORDER DETAILS</title>
</head>
<body>
    <div class="navbar" >
        <img class="logo" src="mama2.jfif">
        <form >   
            <input class="search" type="submit" value="search">
            <input class="t1" type="text" name="search" placeholder="  search">
        </form>
        <ul >
            <li><a href="homepage.html" >HOME</a></li>
            <li><a href="">BREAD</a></li>
            <li><a href="desserts.html">DESSERTS</a></li>
            <li><a href="">OFFERS</a></li>
            <li><a href="signup.html">SIGN UP</a></li>
            <li><a href="login.html">LOG IN</a></li>
            <li><a href="#contact">CONTACT US</a></li>
            <li><a href="admin.html">ADMIN</a></li>
        </ul>
    </div>
    <center>
        <div class="orders">
        <h1 class="tit">Our Costumers Orders Details</h1>
        <table class="table" border="3">
        <tr class="tr">
            <th >ITEMS</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
        </tr>
    <?php
    require 'conn.php';
    global $conn;

    if(isset($_POST['vp'])){
        $query = "SELECT * FROM `products`";
        $runquery = mysqli_query($conn , $query);
        while($record = mysqli_fetch_array($runquery)){
?>
               <tr class="tr">
            <td><?php echo $record['Name'] ?></td>
            <td> <?php echo $record['description'] ?></td>
            <td><?php echo $record['price'] ?></td>
            <td><a href="delete.php?id=<?php echo $record['ID'] ?>" >delete</a></td>
            
        </tr>
        <?php
        }
    }
    
    ?>
