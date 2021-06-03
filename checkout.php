<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<style>
*{
Font-family: Raleway;
}

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
    }
    #container-all{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 5px;
    }

    #choices {
    background-color: #ffffff;
    font-family: Raleway;
    padding: 20px;
    text-align: center; 
    margin:0; 

    }

    h1 {
    text-align: center; 
    font-size:20px; 
    }

    input {
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    float:left;

    }
    label{
        font-size: 15px;
        font-family: Raleway;
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
    font-family: Raleway;
    cursor: pointer;
    margin-top:10px;

    }

    button:hover {
    opacity: 0.8;
    }

    #prevBtn {
    background-color: #606060;
    margin-top:10px;


    }

    .inputDesign {
    border: 0px;
    border-bottom:none;
    background:linear-gradient(#000,#000) bottom no-repeat;
    background-size:75% 1.5px;
    Font-family: Raleway;
    font-size: 15px;
    transition: background-size 0.5s;
    margin-bottom:10px;
    padding:8px;
    width:60%;
    }
    .inputDesign:focus {
    outline: none;
    background:linear-gradient(#999,#999) bottom no-repeat;
    background-size:100% 1.5px;
    }

</style>
<body>
<div id="container-all">
    <form id="choices" >
    <div class="tab">
    <?php 
    if (isset($_GET["data"])) {
        $val = base64_decode($_GET["data"]);
        $valueArray = explode('-', $val);
        echo "<h1>You ordered ".$valueArray[2]." ".$valueArray[0]." ".$valueArray[1]." Coffee.</h1>";
        echo "<h1>The total price is ".$valueArray[3]."</h1>";
    }
    ?>
    <div class="row d-flex justify-content-center">
        <input type="text" name="name" id="id" placeholder="Full name" class="inputDesign" class= /><br>
        <input type="text" name="email" id="id" placeholder="Email address" class="inputDesign" /><br>
        <input type="text" name="number" id="id" placeholder="Phone number" class="inputDesign" /><br>
        <input type="text" name="address" id="id" placeholder="Address" class="inputDesign" /><br>
        </div>
    </div>
    <div >
        <button type="button" id="nextBtn">Submit</button>
    </div>
    </form>

</div>

</body>
</html>
