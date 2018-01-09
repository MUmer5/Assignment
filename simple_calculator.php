<html>
<head><h1>Mini Calculator</h1></head>
<body>
<form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="background-color:LightGray;">
First Number<br>
<input type="number" name="fn"><br>
Second Number<br>
<input type="number" name="sn"><br>
<input type="submit" name="submit" value="+"> <input type="submit" name="submit" value="-"> <input type="submit" name="submit" value="*"> <input type="submit" name="submit" value="/">
</form>
<?php
$ans='';
if($_SERVER['REQUEST_METHOD']=="POST")
{
$first=$_REQUEST['fn'];
$second=$_REQUEST['sn'];
$sub=$_REQUEST['submit'];
if($sub=="+")
{
$GLOBALS['ans']=$GLOBALS['first']+$GLOBALS['second'];
}	
if($sub=="-")
{
$GLOBALS['ans']=$GLOBALS['first']-$GLOBALS['second'];
}
if($sub=="*")
{
$GLOBALS['ans']=$GLOBALS['first']*$GLOBALS['second'];
}
if($sub=="/")
{
$GLOBALS['ans']=$GLOBALS['first']/$GLOBALS['second'];
}
}
echo "Result:".$ans;
?>
<br>
<br>
<h4 style="background-color:LightGray; text-align:center">Muhammad Umer &copy;</h4>
</body>
</html>

