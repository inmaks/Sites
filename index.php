<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style>	
			.thumbnail{
				text-align: center;
			}
			body{
				width: 100%;
				height: 100%;
				background-image: url("images/bk.jpg");
			}
			.error {color: #FF0001;}  
			#top, table, h1, h2{
				color: white;
			}
			p{
				color: #F9E8E4;
			}
		</style>
		<title>Sport</title>
		
		
	</head>
		<body>
			<?php
				$nameErr = $emailErr = $ageErr= "";
				$name = $email = $age="";
				if ($_SERVER["REQUEST_METHOD"] == "POST") {  
		  
					//String Validation  
					if (empty($_POST["name"])) {  
						$nameErr = "Name is required";  
					} else {  
						$name = input_data($_POST["name"]);  
						// check if name only contains letters and whitespace  
						if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
							$nameErr = "Only alphabets and white space are allowed";  
						}  
					}
						
					if (empty($_POST["email"])) {  
						$emailErr = "Email is required";  
					} else {  
						$email = input_data($_POST["email"]);  
						// check that the e-mail address is well-formed  
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
							$emailErr = "Invalid email format";  
						}  
					}  
					
					if (empty($_POST["age"])) {  
						$ageErr = "Age is required";  
					} else {  
						$age = input_data($_POST["age"]);  
						// check if age only contains digits 
						if (!preg_match("/^[0-9]*$/",$age)) {  
							$ageErr = "Only digits are allowed";  
						}  
					}
				}
				function input_data($data) {  
				  $data = trim($data);  
				  $data = stripslashes($data);  
				  $data = htmlspecialchars($data);  
				  return $data;  
				}  
			?>
			<div class="container">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  
					<div class="thumbnail">
						<div class="text-center">
							<div class="caption">
								<h3>Registration Form</h3>  
								<span class = "error">* required field </span>  
								<br><br>  
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
									Name:   
									<input type="text" name="name">  
									<span class="error">* <?php echo $nameErr; ?> </span>  
									<br><br>  
									E-mail:   
									<input type="text" name="email">  
									<span class="error">* <?php echo $emailErr; ?> </span>  
									<br><br>
									Age:   
									<input type="text" name="age">  
									<span class="error">* <?php echo $ageErr; ?> </span>  
									<br><br>  
									<input type="submit" name="submit" value="Submit">   
									<br><br>
									<a href="login.php">Already registered, login</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php  
				if(isset($_POST['submit'])) {  
					if($nameErr == "" && $emailErr == "" && $ageErr == "") {  
						header ("Location: home.php");
					} else {  
						echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
					}  
				}  
			?>  
		</body>
</html>