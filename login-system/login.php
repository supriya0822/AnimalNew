<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: landing.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
body
    {
    background-image: url("https://img.freepik.com/free-vector/frame-with-dogs-white-background_53876-99295.jpg?w=740&t=st=1707545740~exp=1707546340~hmac=2a278471308108aac847019168c6542dea8e89378c3b2d3b30955ceb5b3f2570");
    position:relative;
    min-height:100vh;
    background-size:cover;
    background-position:right;
    display:flex;
    justify-content:space-between;
    align-items:center;
	font-family:"Poppins",sans-serif;
    }

	
	#text{

		height: 25px;
		border-radius: 50px;
		padding: 4px;
		border: solid dark #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: #7875B5;
		border: none;
		border-radius: 50px;
	}

	#box{

		background-color: #e5e4e2;
		margin: auto;
		width: 300px;
		padding: 20px;
		box-shadow: 8px 8px 20px rgb(0,0,0);
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>