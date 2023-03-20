
<?php  
$connect = mysqli_connect("localhost","root","","dbms");
echo "db connected";

  // code...

 // include connection.php;

  
if (isset($_POST['submit'])) {
  // extract($_GET);
  $name = $_POST['name'];  
  $email = $_POST['email'];
  $phone = $_POST['phone']; 
  $password = $_POST['password'];
  $Cpassword = $_POST['Cpassword'];
  
  echo "data taken"
  
  $sql = "INSERT INTO `otpdb`(`name`, `email`, `phone`, `password`, `Cpassword`) 
                 VALUES ('$name', '$email', '$phone', '$password', '$Cpassword')";
  
  if (mysqli_query($connect, $sql)) {
    echo "data saved";
  }
  else{
    mysqli_error($connect);
  }
}
?>