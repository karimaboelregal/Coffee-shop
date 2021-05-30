<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style>
body {
    background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('background.jpg');
}
.btn {
    outline: none !important;
    box-shadow: none !important;
    color:white !important;

}
.btn:hover, .btn:hover {
    outline: none !important;
    box-shadow: none !important;
}
.homeCont {
    -webkit-animation: fadein 2s; 
    -moz-animation: fadein 2s; 
    -ms-animation: fadein 2s;
    -o-animation: fadein 2s;
    animation: fadein 2s;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
</style>
</head>
<body>
<div class="container text-center homeCont">
<p style="margin-top:10%;font-size: 110px; color:white;">Welcome to this coffee shop</p>
<button style="width:350px; height: 130px;font-size: 30px;border-radius:15px;" type="button" class="btn btn-dark">Open menu</button>

</div>
</body>
</html>