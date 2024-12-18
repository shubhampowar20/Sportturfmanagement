<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register here</title>
    <link rel="stylesheet" href="registration.css" />
  </head>
  <body>
    
    <!-- Form starts here  -->
    <form action="action_page.php" method="post">
      <div class="container">
        <h1> Student Register</h1>
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

        <label for="clgid"><b>College ID Number</b></label
          ><br />
          <input
            type="text"
            placeholder="Enter College Id"
            name="clgid"
            id="clgid"
            required
          /><br />
  
          <label for="course"><b>Course</b></label
            ><br />
            <input
              type="text"
              placeholder="Enter Course"
              name="course"
              id="course"
              required
            /><br />

        

       <!--- <label for="psw-repeat"><b>Confirm Password</b></label
        ><br />
        <input
          type="password"
          placeholder="confirm Password"
          name="confirmPsw"
          id="psw-repeat"
          required
        />-->

        <!-- <div class="optr">
          <span>Select Course</span>
          <select name="course" id="course" required>
            <option value=""><-Select Course-></option>
            <option value="BscIT">BscIT</option>
            <option value="BBI">BBI</option>
            <option value="BMS">BMS</option>
            <option value="B.com">B.Com</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="optr">
          <span>Select Year</span>
          <select name="year" id="year" required>
            <option value=""><-Select Year-></option>
            <option value="First">First</option>
            <option value="Second">Second</option>
            <option value="Third">Third</option>
          </select>
        </div> -->

        <button type="submit" name="submit2" class="registerbtn">
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
