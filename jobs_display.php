
<html>
	<head>
     <title>Jobs display</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

<body style="background-color:powderblue;">
	
		<h1>The Job Hunt</h>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="external stylesheet.css">

</head>
<body>


<div class="topnav" id="myTopnav">
  <a href="Login.php"class="active">Login</a>
  <a href="Index.php">Goal</a>
  <a href="News.html">News</a>
  <a href="Contact us.html">Contact</a>
  <a href="jobs display.php">Jobs</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<img src = "https://cdn.syncfusion.com/content/images/Careers/career-logo.png" alt="jump start your career" width height= "142">
	

<?php

$searchErr = '';
$employee_details='';

$servername='localhost';
$username="root";
$password="";
 
try
{
    $con=new PDO("mysql:host=$servername;dbname=thejobhunt",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
  
  
  
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from jobs where title like '%$search%' or description like '%$search%'");
        $stmt->execute();
        $job_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>
<html>
<head>
<title>ajax example</title>
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
}
</style>
</head>
 
<body>
    <div class="container">
    <h3><u>display results</u></h3>
    <br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Job Search</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search here">
            </div>
            <div class="col-sm-2">
              <button type="submit" name="save" class="fa fa-search">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
         
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>salary(RS)</th>
           
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$job_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($job_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['title'];?></td>
                        <td rowspan="2"><?php echo $value['description'];?></td>
                        <td ><?php echo $value['salary'];?></td>
                       
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
         </tbody>
      </table>
    </div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>

<br><br><br><br>
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