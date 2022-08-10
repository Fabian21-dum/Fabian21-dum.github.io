<?php
    include 'config/konek.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylelog.css">
    <title>Log In Admin</title>
</head>
<body>
<form action="" method="POST">
<div class="container mt-5 mb-5">
    <div class="d-flex flex row g-0">
        <div class="col-md-6 mt-3">
            <div class="card card1 p-3">
                <div class="d-flex flex-column"> <img src="img/gudang.png" height="50" width="50" /> <span class="login mt-3">Log in Admin</span> </div>
                <div class="input-field d-flex flex-column mt-3"> 
                    <span>Username</span> <input type="text" name="username" class="form-control" placeholder="username"> 
                <span class="mt-3">Password</span> <input type="password" name="password" class="form-control" placeholder="Enter Your Password"> 
                <button type="submit" name="log" class="mt-4 btn btn-dark d-flex justify-content-center align-items-center">Login</button>
                <a href="logpeg.php " class="mt-4 ms-auto me-auto">Login Sebagai Pegawai</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card card2 ">
                <div class="image">
                    <img src="img/Untitled-5.png">
                </div>
                 </div>
        </div>
    </div>
</div>
</form>
            <?php
                if(isset($_POST['log'])){
                    if(!empty($_POST['username']) && !empty($_POST['password'])){
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $password = md5($password);
                        $query=mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username'AND password='$password'");
                        $numrows=mysqli_num_rows($query);
                        if($numrows>0)
                        {
                            session_start();
                            $row = mysqli_fetch_array($query);
                            $_SESSION['username'] = $row['username'];
                            header("location: dashbar.php");

                        
                           
                            

                        }else{
                            echo "<div class='position-absolute translate-middle start-50 col-md-10 col-sm-10 col-xs-10 ml-5 justify-content-center'>";
                            echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                            echo "<p><center>Gagal Masuk Sebagai Admin</center></p>";
                            echo   "</div>";
                            echo "</div>";
                        }
                    }else{
                        echo "harap isi form login";
                    }
                }
                
          ?>


          
    
</body>
</html>