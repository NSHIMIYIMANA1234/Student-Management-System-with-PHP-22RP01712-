<?php
$Error="";

include('connect_school.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $names=$_POST['names'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

   
if(empty($_POST['names'])) {
    $Error = "All fields are required!";

}else{

    $sql = "INSERT INTO admin (names, username, email, password) VALUES ('$names', '$username', '$email', '$password')";
    $result = mysqli_query($q, $sql);
    
    if($result){
        ?>
<script>
    alert('Registration successful!');
    window.location.href="admin_login.php";
</script>

        <?php
    }else{
        echo "Registration failed!";
    
}
    
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management system</title>
</head>
<body>
    <form action="#" method="POST">
        <table><th>
        <h2>REGISTER AS ADMIN</h2>
        </th>
        <tr><td>
        <label for="names">Names:</label>
        </td>
        <td><input type="text"id="names" name="names" <?php
            $Error;?>></td>
        </tr>
        <tr>
            <td>
                <label for="username">Username:</label>
            </td>
            <td><input type="text"id="username"name="username" <?php
            $Error;?>></td>
        </tr>
        <tr>
            <td><label for="email">E-mail:</label></td>
            <td><input type="email" id="email" name="email" <?php
            $Error;?>></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" id="password" name="password" <?php
            $Error;?>></td>
        </tr>
        <tr><td><input type="submit"id="submit" name="submit" value="register"></td></tr>
        </table>
    </form>
</body>
</html>