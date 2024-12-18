<?php
  include 'inc/config.php';

  if(isset($_POST['submit2'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $collegeID = $_POST['clgid'];
    $Course = $_POST['course'];
    
    
    
   
    
      

    $sql_query = "insert into registerstudent (name, email, password, collegeID, course) values ('$name', '$email', '$password', '$collegeID', '$Course')";

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