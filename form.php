<?php
include('include/config.php');

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql = "SELECT * FROM contact WHERE email = '$email'";

$result = $mysqli_query($con, $sql);

$row =$mysqli_fetch_array($result);

if($row['email']==$email){
    ?> 
    <script>
        confirm('Email Already Exists, Enter a new email.');
        window.location="contact.php";
    </script>
    <?php
}
else{
    $data = "INSERT INTO contact(name, phone, email, message) values('$name', '$phone', '$email', '$message')";

    if($mysqli_query($con, $data)){
        ?> 
        <script>
            confirm('<?php echo $name ?> has successfully been added, Thank You!.');
            window.location="contact.php";
        </script>
        <?php
    }
    else{
        ?> 
        <script>
            alert('User Could Not be Added, Try Again!');
            window.location="contact.php";
        </script>
        <?php
    }
}

?>