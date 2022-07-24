<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "csdl";
   $conn = mysqli_connect($servername, $username, $password, $database);

   $name2 = $_POST['name2'];
   $email2 = $_POST['email2'];
   $website2 = $_POST['website2'];
   $message2 = $_POST['message2'];

   $sql = "INSERT INTO single(name, email, website,
message) VALUES ('$name2', '$email2', '$website2', '$message2')";

   if(!empty($name2) && !empty($email2) && !empty($website2) && !empty($message2)){
       $result = $conn->query($sql);
       echo '<script>alert("Form has been submitted!")</script>';
   }
   else{
       echo"Form submission failed!";
   }
?>