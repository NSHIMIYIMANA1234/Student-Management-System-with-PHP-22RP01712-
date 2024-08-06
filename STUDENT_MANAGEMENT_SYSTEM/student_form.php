<?php
include('connect_school.php');

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $reg_number = $_POST['reg_number'];
    $dept = $_POST['dept'];
    $level = $_POST['level'];
     
    $insert = "INSERT INTO students(fname,lname,reg_number,department ,level) VALUES('$fname','$lname','$reg_number','$dept','$level')";
    $query = mysqli_query($q,$insert);
    
    if($query){ 
        echo "Data inserted successfully";
    }else{
        echo"error".mysqli_error($q);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student form</title>
</head>
<body>
    <table>
    <form action="#" method="POST">
<th>STUDENT REGISTRATION FORM</th>
<tr>
<td><label for="fname">Fname:</label>
</td>
<td><input type="text"id="fname" name="fname">
</td>

</tr>
<tr>
    <td><label for="lname">Lname:</label>
</td> <td>
<input type="text" id="fname" name="lname">
</td>
</tr>
<tr>
    <td><label for="reg_number">Reg_number:</label>
</td>
    <td><input type="text"id="reg_number" name="reg_number">
</td>
</tr>
<tr>
    <td><label for="dept">Department:</label>
</td>
<td><input type="text" id="dept" name="dept">
</td>
</tr>
<tr>
    <td><label for="level">Level:</label>
</td>
    <td><input type="text"id="level" name="level">
</td>
</tr>
<th><input type="submit"ind="submit"name="submit" value="REGISTER"></th>
</table>   
</form>
</body>
</html>

<?php

include('connect_school.php');
$x=mysqli_query($q,"SELECT * FROM students");

if(mysqli_num_rows($x)>0){

    echo" <table border='2'>
    <tr><th colspan='7'><h3>inserted students</h3></th></tr>
    <tr><td>id</td><td>firstname</td><td>lastname</td><td>Reg_number</td><td>department</td><td>level</td><td>Action</td></tr>
    ";


    while($row=mysqli_fetch_array($x)){
  
   echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td><a href='update.php?id=".$row[0]."'>update</a>&nbsp;&nbsp;&nbsp;<a href='delete.php?id=".$row[0]."'>delete</a></tr>
 ";

    }

}
else{
    echo"no students found";
}







?>