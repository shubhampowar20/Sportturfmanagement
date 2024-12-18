<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register here</title>
    <link rel="stylesheet" href="registration.css" />
  </head>
  <body class="back2">
    
    <!-- Form starts here  -->
    <form action="action_page1.php" method="post">
      <div class="container">
        <h1> Admin Register</h1>
        <label for="name"><b>Name</b></label
        ><br />
        <input
          type="text"
          placeholder="Enter Name"
          name="name"
          id="name"
          required
        /><br />

        <label for="email"><b>Email</b></label
        ><br />
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        /><br />

        

        <label for="psw"><b>Password</b></label
        ><br />
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          id="psw"
          required
        /><br />


        <button type="submit" name="submita" class="registerbtn">
          Register
        </button>
      </div>

      <div class="container signin">
        <p>
          Already have an account?
          <a href="index.php">Sign in</a>
        </p>
      </div>
    </form>
  </body>
</html>
