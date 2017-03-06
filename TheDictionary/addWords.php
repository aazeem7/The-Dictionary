<!DOCTYPE html>
<html>
<head>
	<title>Add Words Page</title>
	      <!--Import Google Icon Font-->
      <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->

      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
<link href="iconfont/material-icons.css" rel="stylesheet">

<!--<link rel="stylesheet" href="../css/materialdesignicons.min.css" >-->
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script type="text/javascript" src="../js/jquery-3.0.0.js">
</script>
<script type="text/javascript" src="../js/materialize.min.js">
</script>
<script type="text/javascript">
	   $(document).ready(function(){

	   	$(".button").sideNav();
	   });
</script>

<style type="text/css">
	@font-face {
    font-family: "OldeEnglish";
    font-style: "normal";
    font-weight: "700";
    src: local('OldeEnglish'), local('OldeEnglish'), url(fonts/OldeEnglish.ttf) format("truetype");
}

</style>
</head>
<body>
<?php



?>
  <nav>
    <div class="nav-wrapper grey darken-4">
      <a href="#!" class="brand-logo center mainHeading"><span style="font-size: 40px; font-family: 'OldeEnglish';">The Dictionary</span></a>
      
<ul class="left">
<a href="#" data-activates="mobile-demo" class="button left"><i class="material-icons">menu</i></a>
</ul>
      <ul class="right hide-on-med-and-down">      
  <li class="active"><a href="#"><i class="material-icons">view_module</i></a></li>
        <li class="active"><a href="#">Add Words</a></li>
        <li><a href="#">Documentation</a></li>
        <li><a href="#">About Project</a></li>
      </ul>

      <!--Mobile Navigation Begins Here -->
      <div class="side-nav purple darken-3" id="mobile-demo">
        <!--<li><a href="#">Sass</a></li>
        <li><a href="#">Components</a></li>
        <li><a href="#">Javascript</a></li>
        <li><a href="#">Mobile</a></li> -->
        <h3>control panel</h3>
        <center>
        <div class="colorChooser" style="height: 200px; width:95%; background-color: #2C323C;"></div>
        </center>

      </div>
    </div>
  </nav>

</body>
</html>
