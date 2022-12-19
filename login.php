<?php

include 'config.php';

session_start();

error_reporting(0);

if(isset($_SESSION['username'])){
    header("Location: ace2.php");
}

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ace2.php");
    }else{
        echo "<script>alert('Password or Email is Wrong')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container mt-3">
    <h1>Login here! </h1>
<form action="" method="post">
    <div class="form-group">
        <label>Enter Your Email</label>
        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required> 
    </div>

    <div class="form-group">
        <label>Enter Your Password</label>
        <input type="password" name="password" class="form-control" id="password" value="<?php echo $_POST['password']; ?>" required> 
    </div>
    
    <div>
      <button name="submit"  id="btn" class="btn btn-primary">Login</button>
    </div>
    <p>Haven't Registered Yet? <a href="register.php">Click Here</a></p>
    </form>
</div>
</body>
</html>