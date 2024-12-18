<?php
  include 'inc/config.php';

  if(isset($_POST['submita'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    
    
    
    
   
    
      

    $sql_query = "insert into admin (name, email, password) values ('$name', '$email', '$password')";

    if(mysqli_query($con, $sql_query)){
      echo "<script>
      alert('Registered Successfully');
      </script>";
      header("Location: index.php");
    } else {
      echo "ERROR : " . mysqli_error($con);
    }
    mysqli_close($con);
  }
?>