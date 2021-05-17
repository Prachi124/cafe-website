<html>
<head>
<title>contact</title>
<link rel="stylesheet" href="styles.css">
<style>
img{
   padding:55px;
}
h1{
  font-size:58;
}
</style>
</head>
<body bgcolor="#99CC99">
<div class="topnav">
        <a  href="#home">CafeCamp</a>
        <a href="about.php">About Us</a>
        <a  href="meno.php">Menu</a>
        <a href="gallery.php">Gallery</a>
        <a href="lo.php">Location</a>
        <a href="p.php">Reviews</a>
        <a class="active" href="data.php">Contact Us</a>
        
      </div> 
<center><h1><b><i><font color="maroon">Registration Form</font></b></i></h1></center>
<center><img src="avatar.jpg" width="11%" height="25%"></center>
<form action="form.php" method="post">

<center><table border="5" width="600",top="250"  >
<tr><td><h3>Name:
    <td><input type="text" name="a"  >
<tr><td><h3>Father's Name:
    <td><input type="text" name="b">
<tr><td><h3>Mother's Name:
    <td><input type="text" name="c">
<tr><td><h3>E-mail ID:
    <td><input type="text" name="d">
<tr><td><h3>Password:
    <td><input type="text" name="e">
<tr><td><h3>Contact:
    <td><input type="text" name="f">
<tr><td><h3>Country:

<td><select name="g[]" multipl >
<option>Australia
<option>America
<option>UAE
<option>India
<option>Japan
</select>


<tr><td colspan="5" align="center"><input type="submit"  value="Submit">
</table>
</form>
</body>
</html>
