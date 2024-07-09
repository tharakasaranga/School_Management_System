
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "school_management_System";


    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Connection failed : " .mysqli_connect_error());
    }

    $RegNo = mysqli_real_escape_string($conn, $_POST['RegNo']);
    $FullName = mysqli_real_escape_string($conn, $_POST['FullName']);
    $userType = mysqli_real_escape_string($conn, $_POST['userType']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

    if ($password !== $password2) {
        echo "<script>alert('Passwords do not match. Please try again.');
        window.history.back();</script>";
        exit();
    }


    $sql = " insert into users(userId,FullName,userType,username,password) values('$RegNo','$FullName','$userType','$username','$password')";


    if (mysqli_query($conn, $sql) === TRUE){
        echo "<script>alert('Registration is Pending.....');window.location.href = 'Register.php'; </script> ";
    }else{
        echo "Error : " .$sql . "<br>" .mysqli_error($conn);
    }
?>



