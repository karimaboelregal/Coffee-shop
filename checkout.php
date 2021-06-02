<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
    .tab {
        text-align: center;  
        margin-bottom:10px;
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
    font-size: 18px;
    transition: background-size 0.5s;
    margin-bottom:10px;
    padding:8px;
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
    <h2>Enter your info:</h1>
    <h1>You ordered coffee</h1>
    <h1>Total price is: 50</h2>
    <div class="tab">
        <input type="text" name="name" id="id" placeholder="Full name" class="inputDesign" /><br>
        <input type="text" name="name" id="id" placeholder="Email address" class="inputDesign" /><br>
        <input type="text" name="name" id="id" placeholder="Phone number" class="inputDesign" /><br>
        <input type="text" name="name" id="id" placeholder="Address" class="inputDesign" /><br>

    </div>
    <div >
        <div >
        <button type="button" id="nextBtn">Submit</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    </form>
</div>

</body>
</html>
