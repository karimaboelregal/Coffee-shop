<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        body{
            background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0.2, 0, 1) ), url('beans.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;    
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Raleway;

        }

        #container-all{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 5px;
        }

        #finalize {
        background-color: #ffffff;
        font-family: Raleway;
        padding: 20px;
        text-align: left; 
        margin:0; 
        padding-left:30px;
        }


        #finalize h1 {
        text-align: center; 
        font-size:19px; 
        }

        #finalize h2 {
        font-size:15px; 
        }

        #finalize h3 {
        font-size:15px; 
        }

        #finalize p{
            font-size:15px;
        }

        #finalize input {
            border: 1px solid #aaaaaa;
            float:left;
        }
    
        #finalize label{
            font-size: 15px;
            padding-left:0;
        }
    
        button {
            justify-content:center;
            text-align: center;  
            background-color:#080808;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 15px;
            cursor: pointer;
            margin-top:10px;
        }

        #finalize button:hover {
            opacity: 0.8;
        }

        #input{
            display:flex;
        }

        #demoInput{
            border-radius:10px;
            width: 45px;
            height:30px;
            margin-bottom:10px;
            font-size:17px;
        }

    </style>
</head>
<body>
    <div id="container-all">
        <form id="finalize" >
        <?php 
        include "database.php";
        if (isset($_GET["id"])) { 
            $id = $_GET["id"];
            echo "<h1 id='dName'>".$drinksArray[$id]->name."</h1>";
            echo "<h2>Description</h2>";
            echo "<p>".$drinksArray[$id]->description."</p>";
            echo "<img style='width:150px;height:150px;' src='".$drinksArray[$id]->name.".jpg'>";
            echo "<h2> Select Size </h2>";
            echo '<input type="radio" id="small" name="size" value="small,'.$drinksArray[$id]->prices[0].'">';
            echo '<label for="small">Small ('.$drinksArray[$id]->prices[0].')</label><br>';
            echo '<input type="radio" id="Medium" name="size" value="Medium,'.$drinksArray[$id]->prices[1].'"';
            echo '<label for="Medium">Medium ('.$drinksArray[$id]->prices[1].')</label><br>';
            echo '<input type="radio" id="Large" name="size" value="Large,'.$drinksArray[$id]->prices[1].'">';
            echo '<label for="Large">Large ('.$drinksArray[$id]->prices[2].')</label><br>';
            echo "<h2> Select Condiment </h2>";
            echo '<input type="radio" id="cond" name="condType" value="none, 0" checked="checked">';
            echo '<label>none(0)</label><br>';
            for ($i = 0; $i < count($condArray); $i++) {
                echo '<input type="radio" id="cond" name="condType" value="'.$condArray[$i]->name.','.$condArray[$i]->price.'">';
                echo '<label for='.$condArray[$i]->name.'>'.$condArray[$i]->name.'('.$condArray[$i]->price.')</label><br>';
            }

        } else {
            header("Location: index.php");
        }
        ?>
            <button type="button" onclick="checkSelected()">Go to checkout</button>
        </form>
    </div>    
    <script>

    function checkSelected() {
        var sizeSelected = document.querySelector('input[name="size"]:checked');
        var condSelected = document.querySelector('input[name="condType"]:checked');
        if (sizeSelected == null) {
            alert("Please choose a size");
            return;
        }

        var condArr = condSelected.value.split(',');
        var sizeArr = sizeSelected.value.split(',');
        var price =  parseInt(condArr[1]) + parseInt(sizeArr[1]);
        var text = document.getElementById('dName').innerHTML +'-'+condArr[0]+'-'+sizeArr[0]+"-"+price;
        var enctext = btoa(text);
        window.location='checkout.php?data='+enctext;

    }
    </script>
</body>
</html>