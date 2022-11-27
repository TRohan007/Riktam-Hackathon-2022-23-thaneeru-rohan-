<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
	<div>
	
	</div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-450 p-3 text-center">
            <h3 class="display-4 ">Welcome to your Account, <?=$_SESSION['fname']?></h3>
            <a href="logout.php" class="btn btn-warning">
            	Logout
            </a>
			<div > 
		<a href="" ><button style="margin-top:10px ;background-color: gold " name="complaint" onclick="p()
	">Complaint</button></a>
</div>
		</div>
    </div>
	<script>
		function p(){
			window.open("inde.php")
		}
	</script>

</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>