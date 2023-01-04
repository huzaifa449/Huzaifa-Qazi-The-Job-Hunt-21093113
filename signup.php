<!DOCTYPE html>

<html>

	<head>
	<title>Sign up </title>
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
  <h2>Sign up </h2>
  <form method="post" action="signup.php">
    <div class="mb-3 mt-3">
      <label for="Name">Enter Full Name:</label>
      <input type="Name" class="form-control" id="Name" placeholder="Enter Full Name" name="fname">
    </div
	
	<div class="mb-3 mt-3">
      <label for="Education">Education:</label>
      <input type="Education" class="form-control" id="Education" placeholder="Enter Your EdCtion Level" name="education">
    </div>
	
	<div class="mb-3 mt-3">
      <label for="Email">Email:</label>
      <input type="Email" class="form-control" id="Email" placeholder="Enter your Email" name="email">
	      <input type="hidden" class="form-control" id="Email" value="0" name="isadmin">
    </div>
	
    <div class="mb-3 mt-3">
      <label for="pwd">Create Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Create Password" name="pswd">
    </div>
	
	<div class="mb-3 mt-3">
      <label for="Address">Address:</label>
      <input type="Address" class="form-control" id="Address" placeholder="Enter your Address" name="address">
    </div>
	
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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