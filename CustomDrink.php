<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
    font-size:25px; 
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
        display: none;
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

    .step {
    height: 15px;
    width: 15px;
    margin: 2px 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
    }

    .step.active {
    opacity: 1;
    }

    .step.finish {
    background-color: #04AA6D;
    }
</style>
<body>
<div id="container-all">
    <form id="choices" >
    <h1>Customize Your Coffee:</h1>
    <div class="tab"><h2>Coffee Grind:</h2>
        <input type="radio" id="houseBlend" name="coffeeType" value="houseBlend">
        <label for="houseBlend">House Blend</label><br>
        <input type="radio" id="darkRoast" name="coffeeType" value="darkRoast">
        <label for="darkRoast">Dark Roast</label><br>
        <input type="radio" id="Decaff" name="coffeeType" value="Decaff">
        <label for="Decaff">Decaff</label><br>
        <input type="radio" id="Espresso" name="coffeeType" value="Espresso">
        <label for="Espresso">Espresso</label>

    </div>
    <div class="tab"><h2>Milk:</h2>
    <input type="radio" id="almond" name="milkType" value="almond">
        <label for="almond">Almond Milk</label><br>
        <input type="radio" id="fullCream" name="milkType" value="fullCream">
        <label for="fullCream">Full Cream</label><br>
        <input type="radio" id="coconut" name="milkType" value="coconut">
        <label for="coconut">Coconut Milk</label>
    </div>
    <div class="tab"><h2>Flavors:</h2>
    <input type="radio" id="houseBlend" name="coffeeType" value="houseBlend">
        <label for="houseBlend">House Blend</label><br>
        <input type="radio" id="darkRoast" name="coffeeType" value="darkRoast">
        <label for="darkRoast">Dark Roast</label><br>
        <input type="radio" id="Decaff" name="coffeeType" value="Decaff">
        <label for="Decaff">Decaff</label><br>
        <input type="radio" id="Espresso" name="coffeeType" value="Espresso">
        <label for="Espresso">House Blend</label>
    </div>
    <div class="tab"><h2>Size:</h2>
    <input type="radio" id="small" name="size" value="small">
        <label for="small">Small</label><br>
        <input type="radio" id="Medium" name="size" value="Medium">
        <label for="Medium">Medium</label><br>
        <input type="radio" id="Large" name="size" value="Large">
        <label for="Large">Large</label>
    </div>
    <div style="overflow:auto;">
        <div >
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
    </form>
</div>
<script>
    var currentTab = 0; 
    showTab(currentTab); 
    function asd() {
        alert("sdfsf");
    }
    function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        document.getElementById("nextBtn").onclick=function () {window.location='checkout.php';};
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
    }
    function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        document.getElementById("choices").submit();
        return false;
    }
    showTab(currentTab);
    }

    function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
    }
</script>

</body>
</html>
