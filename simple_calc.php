<html>
<head><h1>My Calculator</h1></head>
<body>
<table border="1">
<tr><td colspan=4><input type="text" name="values" id="val"><td></tr>
<tr><td colspan=4><input type="text" name="values" id="val1"><td></tr>
<tr>
<td><input type="button" name="one" value="1" id=1 onclick="setValue(this.value)" ></td>
<td><input type="button" name="two" value="2"  onclick="setValue(this.value)"></td>
<td><input type="button" name="three" value="3"  onclick="setValue(this.value)"></td>
<td><input type="button" name="plus" value="+"></td>
</tr>
<tr>
<td><input type="button" name="four" value="4" onclick="setValue(this.value)"></td>
<td><input type="button" name="five" value="5" onclick="setValue(this.value)"></td>
<td><input type="button" name="six" value="6" onclick="setValue(this.value)"></td>
<td><input type="button" name="minus" value="-"></td>
</tr>
<tr>
<td><input type="button" name="seven" value="7" onclick="setValue(this.value)"></td>
<td><input type="button" name="eight" value="8" onclick="setValue(this.value)"></td>
<td><input type="button" name="nine" value="9" onclick="setValue(this.value)"></td>
<td><input type="button" name="mul" value="*" onclick="setValue(this.value)"></td>
</tr>
<tr>
<td ></td>
<td><input type="submit" name="zero" value="0"></td>
<td ><input type="submit" name="calc" value="="></td>
<td><input type="submit" name="div" value="/"></td>
</tr>
</table>
<script type="text/javascript">
    function setValue(num) {
		
           var dummyEl = document.getElementById('myID');
        document.getElementById('val').value=dummyEl;
    }
</script>
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

