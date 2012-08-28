<?php
if(isset($_POST['submit']))
{
	header("location:index.php");
}
?>
<html>

<title>Welcome to Timegrab!</title>

<script type="text/javascript">

</script>
<body background="pic.jpg" style="background-repeat: no-repeat; background-position:center;"  >
<center>
Welcome to Timegrab!<br>
<input type="submit" name="submit" value="Homepage" /><br>
</center>
</html>

<div style="width:1280px; height:800px; background: pic.jpg;">
    <a href="index.php" style="display:block;width:1280px;height:800px;">&nbsp;</a>
</div>

<script type="text/javascript">

window.onload=timeout;
function timeout(){
window.setTimeout("redirect()",2000)}

function redirect(){
window.location="index.php"
return}

</script>