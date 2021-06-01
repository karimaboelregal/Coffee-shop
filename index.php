<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/df4285e61f.js" crossorigin="anonymous"></script>
<style>
/*First, position the curtain panels so that they are not only side-by-side, but also in front of the prize itself.*/
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
  background: #333;
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

  width:500px;
  height:500px;
  background-color:white;
  border: 2px solid #333;
  border-radius:20px;
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
  	border: 1px solid black;
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
  bottom: 15%;
  left: 5%;
}
.table>tbody>tr>td, 
.table>tbody>tr>th, 
.table>tfoot>tr>td, 
.table>tfoot>tr>th, 
.table>thead>tr>td, 
.table>thead>tr>th {
      vertical-align: middle;
 }
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
      <div id="searchBar">
      <input type="text" class="inputDesign" name="Search" placeholder="Search">
      <button id="search" style="margin-left:5px;"class="btn btn-outline-dark"><i style="color:black;"class="fa fa-search" ></i></button>
      <h6 id="title" class="text-muted text-center">Beverages</h6> 
      </div>
  <ul class="pagination justify-content-center" id="pages">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>

  <table class="table table-hover">
  <thead>
    <tr style="display:none;">
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Product price</th>
      <th scope="col">Select button</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img src="coffee1.jpg" style="width:50px;height:50px;"></th>
      <td>House blend</td>
      <td>15$</td>
      <td><button id="search" class="btn btn-outline-dark"><i style="color:black;" class="fas fa-cash-register"></i></button></td>
    </tr>
    <tr>
    <th scope="row"><img src="coffee1.jpg" style="width:50px;height:50px;"></th>
      <td>Dark roast</td>
      <td>25$</td>
      <td ><button id="search" class="btn btn-outline-dark"><i style="color:black;" class="fas fa-cash-register"></i></button></td>
    </tr>
    <tr>
    <th scope="row"><img src="coffee1.jpg" style="width:50px;height:50px;"></th>
      <td>Decaf</td>
      <td>30$</td>
      <td><button id="search" class="btn btn-outline-dark"><i style="color:black;" class="fas fa-cash-register"></i></button></td>
    </tr>
    <tr>
    <th scope="row"><img src="coffee1.jpg" style="width:50px;height:50px;"></th>
      <td>Expresso</td>
      <td>21$</td>
      <td><button id="search" class="btn btn-outline-dark"><i style="color:black;" class="fas fa-cash-register"></i></button></td>
    </tr>
    <tr>

  </tbody>
</table>
<button id="customize" style="" type="button" class="btn btn-outline-dark" onclick="hideMenu()">Customize drink</button>
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
function addToMobile() {
  var isMobile = false; //initiate as false
// device detection
  if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
      || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
      isMobile = true;
  }
  if (isMobile) {
    var pag = document.getElementById("pages");
    pag.classList.add("pagination-lg");
  }
}
addToMobile();
</script>
</body>
</html>