<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{background:white;}
#note{width:260px;
      height:260px;
	  }
#save{position:absolute;
     left:1200px;
    top:65px;
 background:url("save.png") 0 0 no-repeat;
 width:150px;
 height:150px; 
border:1px solid white;
cursor:pointer;}
#note{position:absolute;
        top:60px;
	left:0px;
	font-size:39px;
         width:1100px;
	 font-weight:bold;}
.saver{width:170px;
       padding:4px;
       background:#000d33;
       height:180px;
        display:inline-block;
       margin:20px;}
.header {width:100%;
         height:60px;
         background:#33001a;
         position:absolute;
         top:0px;
         left:0px;}
.user {font-size:22px;
       color:white;
        position:absolute;
           font-family: 'Ubuntu', sans-serif;
        left:10px;
        top:10px;}
.logout{width:60px;
        height:30px;
        padding:8px;
        background:white;
       font-weight:bold;
       font-size:21px;
       font-family: 'Ubuntu', sans-serif;
        position:absolute;
        right:10px;
        top:7px;}
  a{  text-decoration:none;}
.savednotes{ display:inline-block;
            background:#000d33;
            width:100%;
            height:500px;
             position:absolute;
         top:300px;
         left:0px;}
.one::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
    margin:100px;}
.two::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
       margin:100px;}
.three::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
      margin:100px;} 
.four::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
       margin:100px;}
.five::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
       margin:100px;} 
.six::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
       margin:100px;}
.seven::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
       margin:100px;}
.eight::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
     margin:100px;} 
.nine::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
      margin:100px;} 
.ten::before {content:"\f1f8";
	   font-family:"FontAwesome";
         font-size:25px;
         color:#000d33;
       margin:100px;}
</style>
</head>
<body>
<div class="header">
<div class="user">
<?php
 echo "Hi       ".$_SESSION["username"]."      !!"; ?>
</div>
<div class="logout"><a href="way.html">logout</a></div>
</div>
<form action="sticknote.php" method="post" onsubmit="return myfun()" >
<textarea placeholder="write any thing" id="note"   name="<?php echo $_SESSION["value"]; ?>" ></textarea>
<input type="submit" id="save" value="">
</form>
<div class="savednotes">

<div id="1" class="saver" ><span class="one"></span>
<?php 
if (isset($_POST['1']))
{ $_SESSION["first1"] = $_POST['1']; }
if (isset($_SESSION["first1"]))
{  echo $_SESSION["first1"] ; }
  ?>  </div>

<div id="2" class="saver"><span class="two"></span>  <?php 
if (isset($_POST['2']))
{ $_SESSION["first2"] = $_POST['2']; }
if (isset($_SESSION["first2"]))
{  echo $_SESSION["first2"] ; }
  ?>    </div>

<div id="3" class="saver"><span class="three"></span>  <?php 
if (isset($_POST['3']))
{ $_SESSION["first3"] = $_POST['3']; }
if (isset($_SESSION["first3"]))
{  echo $_SESSION["first3"] ; }
  ?>    </div>

<div id="4" class="saver"> <span class="four"></span> <?php 
if (isset($_POST['4']))
{ $_SESSION["first4"] = $_POST['4']; }
if (isset($_SESSION["first4"]))
{  echo $_SESSION["first4"] ; }
  ?>    
</div>

<div id="5" class="saver"><span class="five"></span>  <?php 
if (isset($_POST['5']))
{ $_SESSION["first5"] = $_POST['5']; }
if (isset($_SESSION["first5"]))
{  echo $_SESSION["first5"] ; }
  ?>    </div>

<div id="6" class="saver">  <span class="six"></span>  <?php 
if (isset($_POST['6']))
{ $_SESSION["first6"] = $_POST['6']; }
if (isset($_SESSION["first6"]))
{  echo $_SESSION["first6"] ; }
  ?>    </div>

<div id="7" class="saver"><span class="seven"></span>  <?php 
if (isset($_POST['7']))
{ $_SESSION["first7"] = $_POST['7']; }
if (isset($_SESSION["first7"]))
{  echo $_SESSION["first7"] ; }
  ?>    </div>

<div id="8" class="saver"> <span class="eight"></span> <?php 
if (isset($_POST['8']))
{ $_SESSION["first8"] = $_POST['8']; }
if (isset($_SESSION["first8"]))
{  echo $_SESSION["first8"] ; }
  ?>    </div>

<div id="9" class="saver"> <span class="nine"></span> <?php 
if (isset($_POST['9']))
{ $_SESSION["first9"] = $_POST['9']; }
if (isset($_SESSION["first9"]))
{  echo $_SESSION["first9"] ; }
  ?>    </div>

<div id="10" class="saver"><span class="ten"></span>
  <?php 
if (isset($_POST['10']))
{ $_SESSION["first10"] = $_POST['10']; }
if (isset($_SESSION["first10"]))
{  echo $_SESSION["first10"] ; }
  ?>  
 
</div></span>
</div>
<?php $_SESSION["value"]++;   
      echo $_SESSION["value"];    ?>   
<script src="java3.js"></script>
<script src="jqu.js"></script>
</body>
</html>