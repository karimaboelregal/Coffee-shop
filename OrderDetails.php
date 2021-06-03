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
        font-size:27px; 
        }

        #finalize h2 {
        font-size:23px; 
        }

        #finalize h3 {
        font-size:20px; 
        }

        #finalize p{
            font-size:20px;
        }

        #finalize input {
            border: 1px solid #aaaaaa;
            float:left;
        }
    
        #finalize label{
            font-size: 20px;
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
            <h1>Drink</h1>
            <h2>Description</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis alias nemo necessitatibus ullam, possimus corrupti qui nobis doloremque natus eveniet, id saepe excepturi at ducimus?</p>
            <h2>Select Size</h2>
            <input type="radio" id="small" name="size" value="small,5">
            <label for="small">Small (5)</label><br>
            <input type="radio" id="Medium" name="size" value="Medium,10">
            <label for="Medium">Medium (10)</label><br>
            <input type="radio" id="Large" name="size" value="Large,15">
            <label for="Large">Large (15)</label>
            <h2>Quantity</h2>
            <div id="input">
                <input id=demoInput type=number>
            </div>
            <h3>Price</h3>
            <p>50$</p>
            <button type="button">Add To Basket</button>
        </form>
    </div>    
    <script>
        function increment() {
            document.getElementById('demoInput').stepUp();
        }
        function decrement() {
            document.getElementById('demoInput').stepDown();
        }
    </script>
</body>
</html>