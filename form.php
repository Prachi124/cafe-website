<?php
session_start();
$con =mysqli_connect("localhost","root","","abc");
if($con == false)
{
             die("mysql is not connected");
}
else
{
             echo "sql is connected";
}



            $name=$_REQUEST["a"];
            $fn=$_REQUEST["b"];
            $mn=$_REQUEST["c"];
            $id=$_REQUEST["d"];
            $password=$_REQUEST["e"];
            $contact=$_REQUEST["f"];
            foreach($_REQUEST["g"] as $val)
            {
                           $country=$val;
            }
   mysqli_select_db($con,"abc");
  if(($name=="")||($fn=="")||($mn=="")||($id=="")||($password=="")||($contact=="")||(strlen($contact)!=10))
  {
                             echo"<script>alert('Please fill all the fields');</script>";
                             echo"<br>";
                             echo"<h1>go back and check the detail</h1>";
  }
else
  {
                             $sql="INSERT INTO cafe(name,fn,mn,id,password,contact,country)
                                         VALUES('$name','$fn','$mn','$id','$password','$contact','$country');";
                            $query=mysqli_query($con,$sql);
                             if($query==true)
                            {
                                              echo"<h1><center>Your data is inserted</center></h1>";
                           }
                       else
                         {
                                             echo"data is not inserted";
                        }
  }
?>   