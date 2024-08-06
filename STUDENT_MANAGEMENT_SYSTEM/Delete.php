<?php

include("connect_school.php");





$id = $_GET['id'];

$query = mysqli_query($q, "DELETE FROM students WHERE id='$id'");

if ($query) {


    header("location:student_form.php");
} else {
    echo "data not deleted";
}
?>