<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: #fdc5f5;
  margin-top: 20px;
}

</style>
</head>
<body>

<p>Click the "NAMA SAYA" button to know my full name:</p>

<button onclick="myFunction()" id="button1">NAMA SAYA</button>
<button onclick="myFunction2()" id="button2" hidden>NAMA SAYA</button>
<button onclick="myFunction3()" id="button3" hidden>NAMA SAYA</button>
<button onclick="myFunction4()" id="button3" hidden>NAMA SAYA</button>

<div id="myDIV">
<H2>NATHAN</H2>
</div>

 <div id="myDIV2" hidden>
<H2>ADITYA</H2>
</div>

<div id="myDIV3" hidden>
<H2>TEGAR</H2>
</div>

<div id="myDIV4" hidden>
<H2>BIMANTARA</H2>
</div>




<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  var x2 = document.getElementById("myDIV2");
  var y = document.getElementById("button1");
  var y2 = document.getElementById("button2");
  x.style.display = "none";
  x2.style.display = "block";
  y2.style.display = "block";
  y.style.display = "none";
}

function myFunction2() {
  var x2 = document.getElementById("myDIV2");
  var x3 = document.getElementById("myDIV3");
  var y2 = document.getElementById("button2");
  var y3 = document.getElementById("button3");
  x2.style.display = "none";
  x3.style.display = "block";
  y3.style.display = "block";
  y2.style.display = "none";
}

function myFunction3() {
  var x3 = document.getElementById("myDIV3");
  var x4 = document.getElementById("myDIV4");
  var y3 = document.getElementById("button3");
  var y4 = document.getElementById("button4");
  x3.style.display = "none";
  x4.style.display = "block";
  y4.style.display = "block";
  y3.style.display = "none";
}


</script>

</body>
</html>
