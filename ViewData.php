<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IVision Tagging System</title>
<script type="text/javascript">
    function redirect() {
     location.href='index.php';
    }
</script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
table {
    background-color: #888;
}
  .myButton {
  -moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
  -webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
  box-shadow: 0px 0px 0px 2px #9fb4f2;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
  background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
  background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
  background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
  background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
  background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
  background-color:#7892c2;
  -moz-border-radius:10px;
  -webkit-border-radius:10px;
  border-radius:10px;
  border:1px solid #4e6096;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:14px;
  padding:12px 30px;
  text-decoration:none;
  text-shadow:0px 1px 0px #283966;
}

</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #013144;">

<div id="header">
<table style="background-color: rgba(0,0,0,0);">
<tr style="width: 100%;">
<td style="width: 40%">
<img src="/images/rev.png" style="width: 60%;height: 60%;margin-left: 5%;margin-top: 5%">
</td>
<td style="width: 60%">
<h1 style="text-align: center;margin-top: 5%;font-family: Arial Black;color:white"><b>IVision Tagging System</b></h1>
</td>
</tr>
</table>
</div>
<div id="contents" style="margin-top: 5%; overflow: auto;height: 440px;">
<form action="handler.php" data-toggle="validator" role="form" method="POST">
<table class="table table-striped" style="width: 70%;margin-left: 15%">

<?php  
try {

if(file_exists("tags.txt"))
{
  $myfile = fopen("tags.txt", "r");


$SNO=1;
while ($row=fgets($myfile)) {
echo'<tr>';
echo'<td style="width: 10%;">';
echo'<h3 style="text-align:center">'.($SNO).'</h3>';
echo'</td>';
echo'<td style="width: 40%">';
if(($SNO-1)<10)
{
echo'<img style="width: 70px;height: 70px" src="http://localhost/images/Testimg0'.($SNO-1).'.png">';
}
else
{
 echo'<img style="width: 70px;height: 70px" src="http://localhost/images/Testimg'.($SNO-1).'.png">'; 
}
echo'</td>';
echo'<td style="width: 40%">';
echo'<h3>'.$row.'</h3>';
echo'</td>';
echo'</tr>';
$SNO++;
}
}
else
{
  echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sorry!</strong> No data found!
</div>';
}
} catch (Exception $e) {
   
  
}

  
?>
</table> 

</div>
<div style="text-align: center;margin-top: 10px">
<table style="width:70%;margin-left: 15%;background-color: rgba(0,0,0,0);">
<tr style="width: 100%">
<td style="width: 20%"></td>
</form>
<td style="width: 60%">
  <button  class="myButton" style="width: 300px;font-size:17px" onclick="redirect();"><b>Goto Home</b></button>

</td>
<td  style="width: 20%">
</td>
</tr>

</table>

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script src="js/bootbox.min.js"></script>
    
  </body>
</html>