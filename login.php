
<?php
// Start the session
session_start();
?>
<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>

<body style="background-color:yellowgreen">
    <div>
        <div class="container mt-5">
            <div class="bg-info text-center p-3">
                <h1> Admin Login</h1>
            </div>
            <form method="post" action="" class="bg-info-subtle">
                <div class="mb-3 p-2">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="mb-3 p-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="align-middle p-3">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>

<?php
      if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass= $_POST['password'];
        echo ($email."+".$pass);
        $sql = " SELECT * FROM admin WHERE email='".$email."' AND password='".$pass."'";
    
        // Execute the query
        $query = mysqli_query($conn, $sql);
        
        // Check if the query was successful
        if ($query) {
            $result = mysqli_fetch_assoc($query);
            
            // Check if a matching user was found
            if (mysqli_num_rows($query) == 1) {
                $_SESSION['username'] = $result['name'];
                $_SESSION['id'] = $result['id'];
                $_SESSION['email'] = $result['email'];
                
                // Redirect the user to the home page
                header('Location: home.php');
                exit();
            } else {
                echo "Invalid email or password";
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
    }
?>