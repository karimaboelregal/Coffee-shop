<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/df4285e61f.js" crossorigin="anonymous"></script>
<style>
/*First, position the curtain panels so that they are not only side-by-side, but also in front of the prize itself.*/
*{
Font-family: Raleway;
}
body {
  overflow: hidden;
}
/*the parent component or the main container */
.curtain {
  width: 100vw; /*Ensures the parent component is full screen widh */
  height: 100vh; /*vh is "viewport height" and at CSS Tricks, they we're using this for demo purposes. This property constrains he parent component to the height of the viewport*/
  overflow: hidden; /* Allows us to slide the panels outside the container without them showing */
}
/*the component wrapper set to fill up within the parent container*/
.curtain__wrapper {
  width: 100%;
  height: 100%;
}
/*the curtain panel class that is attribued next to the curtain_panel-left and curtain_panel-right in the html div*/
.curtain__panel {
  width: 50%; /* Each panel takes up half the container */
  height: 100vh; /* vh is "viewport height" */
  float: left; /* Makes sure panels are side-by-side */
  position: relative; /* Needed to define the z-index -- A relative positioned element is positioned relative to its normal position.*/
  z-index: 2; /* The z-index property specifies the stack order of an element. An element with greater stack order is always in front of an element with a lower stack order. So, this places the panels in front of the prize */
  transition: all 1s ease-out; /* Animates the sliding transition of the panels -- about the transition property, this is the short-hand property used to represent up to four transition-related longhand properties:
  transition: [transition-property] [transition-duration] [transition-timing-function] [transition-delay] */
  /* For this assignment, I am changing the transition duration to 5s. It will take 5s to animate or open and close the curtain.
  /* I am going to use flexbox property to display the h1 element on the curtain in the center */
  display: flex; 
  align-items: center;
  color: #fff;
}

/*Sliding the panels out by using transform property
The transform property allows you to rotate, scale, move, skew elements.
Here, we are using the value of translateX, which Defines a translation using only the value for the X-axis, because we want to slide open and close horizontally
If I want, I could change the value of translateY, which defines a translation using the value for the Y-axis, and will make it open and close vertically.
We set the value at -100% and 100%, because we want to slide or close the curtain completely out of the curtain component
/*Slide the panel to the left out of the container */
.curtain__panel--left {
    background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('bg01.jpg');
    background-size:100%  100%;
    background-image: no-repeat;

  display:flex;
  justify-content: flex-end;
  transform: translateX(-100%);
}
/*Slide the panel to the right out of the container */
.curtain__panel--right {
    background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('bg02.jpg');
    background-size:100%  100%;
    background-image: no-repeat;

    object-fit: contain;
  display:flex;
  justify-content: flex-start;
  transform: translateX(100%);
} 
/* For this assignment, I changed the transform property to translateY(-100%) to make the curtain open up vertically. However, this caused both sides of the curtain slided up at the same time, so it looked like one giant block going up, and not two panels. 
Instead, I kept the transform property to translateX, but I changed how far the panels opened up to -40% and 40%. I can see better how the two panel curtains work with this transition.*/
.curtain__prize {
  background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 1) ), url('beans.jpg'); no-repeat center center fixed;
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;    
  color: #fff;
  padding: 1rem 0;
  position: absolute; /* Forces the prize position into the container start */
  text-align: center;
  z-index: 1; /* Places the prize behind the panels, which are z-index 2 */
  width: 100%;
  height: 100vh; /* I am setting the height of this container the same height as the curtain. */ 
}
.curtain__prize img {
  width: 15%;
}

input[type=checkbox] {
  position: absolute; /* Force the checkbox at the start of the container */
  opacity: 0; /* Hide the checkbox */
}
       
input[type=checkbox]:checked ~ div.curtain__panel--left {
  transform: translateX(0);
}
        
input[type=checkbox]:checked ~ div.curtain__panel--right {
  transform: translateX(0);
}
.window {
  position: relative;
  border-radius:10px;
  width:500px;
  height:500px;
  background-color:white;
}
.btn {
    outline: none !important;
    box-shadow: none !important;
    color:white !important;

}
#customize {
  width:150px;
  height: 50px;
  position:absolute;
  bottom: 5%;
  left: 0%;
  transform: translateX(4%);
  color:black!important;
}
#customize:hover {
  color:white !important; 
}

#closeMenu {
  width:150px;
  height: 50px;
  position:absolute;
  bottom: 5%;
  left: 100%;
  transform: translateX(-104%);
  color:black!important;
}
#closeMenu:hover {
  color:white !important; 
}
#search:hover i {
  color:white !important; 

}

.inputDesign {
  border: 0px;
  border-bottom:none;
  background:linear-gradient(#999,#999) bottom no-repeat;
  background-size:50% 1.5px;
  font-family: "Times New Roman", Times, serif;
  font-size: 18px;
  transition: background-size 0.5s;
}
.inputDesign:focus {
  outline: none;
  background:linear-gradient(#999,#999) bottom no-repeat;
  background-size:100% 1.5px;
}
@media only screen and (max-width: 1024px) {
.curtain__panel--left {
	background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('mobbg01.jpg');
}
.curtain__panel--right {
	background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('mobbg02.jpg');
}

.window {
	position: relative;
    margin-top:20%;
  	width:800px;
  	height:1200px;
  	background-color:white;
}
#closeMenu {
  width:350px;
  height: 100px;
  font-size:25px;
}
#customize {
  width:350px;
  height: 100px;
  font-size:25px;
}

#searchBar input[type=text]{
  width:450px;
  height:50px;
  font-size:20px;

}
#searchBar button{
  width:50px;
  height:50px;

}
#searchBar h6{
  font-size:20px;
}
table {
  margin-top:90px;
}
td {
   height:200px;
   font-size: 35px !important;
}
th img {
  width:120px !important;
  height:120px !important;
}
td button {
  width:60px;
  height: 60px;
}
}
.page-link {
  color: black;
}
.page-link:hover {
  background-color:#333 !important;
  color: white !important;
}
.page-link:focus {
  outline: none !important;
  box-shadow: none;

}
.active a {
  background-color:#333 !important;
  border:1px solid #333 !important;
  color: white !important;
}
#pages {
  position:absolute;
  bottom: 14%;
  left: 50%;
  transform: translateX(-50%);
}
th img {
  border-radius:5px;
  W box-shadow: 1px 1px 6px black;
}

td {
  vertical-align: middle !important;
}
.tableFixHead          { overflow-y: auto; height:70%;}
.tableFixHead thead th { position: sticky; top: 0; z-index: 1; }


</style>
</head>
<body>
<div class="curtain">	
  
  <div class="curtain__wrapper">
    
    <!-- The checkbox hack! -->
    <input id="checkb" type="checkbox" disabled="disabled" checked>
    <div class="curtain__panel curtain__panel--left" onclick="showMenu();">
      <h1>Welcome to this <br/><br/> click any where</h1>
    </div>
    
    <!-- The prize behind the curtain panels -->
    <div class="curtain__prize">
    <div style="margin-top:80px;width:100%;height:100%;" class="row d-flex justify-content-center ">
      <div class="window justify-content-center">
      <h6 style="margin-top:20px;margin-bottom:20px;color:black;font-size:20px;"id="title" class="text-center">Drinks</h6> 

<?php include "database.php"; ?>
<div class="tableFixHead table table-hover">
  <table style="width:90%; transform:translate(5%);">
    <tbody>
    <?php
    for ($i = 0; $i < count($drinksArray); $i++) {
      echo "<tr>";
      echo "<th scope='row'><img src='".$drinksArray[$i]->name.".jpg' style='width:50px;height:50px;'></th>";
      echo "<td class='text-center'>".$drinksArray[$i]->name."</td>";
      $var = "window.location.href='OrderDetails.php?id=".$i."';";
      echo "<td><button id='search' class='btn btn-outline-dark' onclick=".$var."><i style='color:black;' class='fas fa-cash-register'></i></button></td>";
      echo "</tr>";
    } 
  ?>

    </tbody>
  </table>
</div>
      <button id="customize" style="" type="button" class="btn btn-outline-dark" onclick="window.location.href='CustomDrink.php'">Customize drink</button>
      <button id="closeMenu" style="" type="button" class="btn btn-outline-dark" onclick="hideMenu()">Close menu</button>
      </div>
    </div>
    </div> 
    
    <div class="curtain__panel curtain__panel--right" onclick="showMenu();">
    <h1 style="margin-left:10px;">coffee shop <br/><br/> to open menu</h1>
	  </div>   
  </div>
</div> 
<script>
function showMenu() {
  document.getElementById("checkb").checked = false;
}
function hideMenu() {
  document.getElementById("checkb").checked = true;
}

</script>
</body>
</html>