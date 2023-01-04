<!DOCTYPE html>

<html>

	<head>
	<title>Persona</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body style="background-color:powderblue;">
	
		<h1>The Job Hunt</h>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="external stylesheet.css">
<body>

<div class="topnav" id="myTopnav">
  <a href="Login.html"class="active">Login</a>
  <a href="Index.html">Goal</a>
  <a href="News.html">News</a>
  <a href="Contact us.html">Contact</a>
  <a href="jobs display.html">Jobs</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<img src = "https://cdn.syncfusion.com/content/images/Careers/career-logo.png" alt="jump start your career" width height= "142">
	</body>
	
</html>
		
<div class="container mt-3">
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


  <!--FOOTER-->
  
  <footer class="footer-distributed">
  
    <div class="footer-right"style="float:bottom">
  
        <a href="https://www.youtube.com/watch?v=J8hdWy_Y9oM&t=1s"><i class="fa fa-youtube"></i></a>
        <a href="https://github.com/huzaifa449/Huzaifa-Qazi-The-Job-Hunt-21093113"><i class="fa fa-github"></i></a>
  
    </div>
  
    <div class="footer-left">
 
     <p>TheJobHunt &copy; 2022</p>
    </div>
  
  </footer>
  </body>
  </html>

  <?php

$email = $_POST['email'];
$password = $_POST['password'];

//database connection here

$db = mysqli_connect('localhost', 'root','', 'thejobhunt');
if($con->connect_error) {
  die("Failed to connect : " .$con->connect_error);
} else {
  $stmt = $con->prepare("select * from registeration where email = ?");
  $stmt->bind_param("s", $email);
  $stmt ->execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_addoc(); 
    if($data['password'] === $password) {
      echo "<h2>Login Sucessfully</h2>";

  }else {
    echo "<h2> Invalid Email or Passowrd</h2>"; 
  }

} else {
  echo "<h2> Invalid Email or Passowrd</h2>";
}
}
?>