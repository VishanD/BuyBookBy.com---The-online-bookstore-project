

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<title>Sign In | BuyBookBy.com</title>
		<link rel="shortcut icon" href="images/logo.jpg" /> <!--Icon displayed with the title-->
		
		<style type="text/css">
			.signin
			{
				position: absolute;
				height: 25%;
				width: 25%; 
				top: 50%;
				right: 38%;
				font-family: sans-serif;
				font-size: 15px;
				color:#001A66;
		
				
			}
			
			/* WebKit and Opera browsers */
  @-webkit-keyframes spinner {
    from { -webkit-transform: rotateY(0deg);    }
    to   { -webkit-transform: rotateY(-360deg); }
  }

  /* all other browsers */
  @keyframes spinner {
    from {
      -moz-transform: rotateY(45deg);
      -ms-transform: rotateY(0deg);
      transform: rotateY(0deg);
    }
    to {
      -moz-transform: rotateY(-360deg);
      -ms-transform: rotateY(-360deg);
      transform: rotateY(-360deg);
    }
  }
  
  #stage {
    margin: 1em auto;
    -webkit-perspective:5000px;
    -moz-perspective: 5000px;
    -ms-perspective:5000px;
    perspective: 5000px;
   }
   
    #spinner {
    -webkit-animation-name: spinner;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-duration: 10s;

    animation-name: spinner;
    animation-timing-function: linear;
    animation-iteration-count:1;
    animation-duration: 15s;

    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }

  #spinner:hover {
    -webkit-animation-play-state: active;
    animation-play-state: active;
  }

	.face
	{
		margin-top:80px;
	}	
		
		
		.bodyform
		{
			width:265px;
			font-family:Arial;
			font-size:14px;
		}
		
		label{color:#6c6c6c;}

		
		

		#submit_button
		{
			width:109px;
			height:34px;
			-webkit-border-radius:3px;
			-moz-border-radius:3px;
			border-radius:3px;
			background-color:#86c5fa;
			-webkit-box-shadow:inset 0 2px rgba(255,255,255,.29);
			-moz-box-shadow:inset 0 2px rgba(255,255,255,.29);
			box-shadow:inset 0 2px rgba(255,255,255,.29);
			border:solid 1px #77a4cb;
			font-weight:bold;
			color:#fff;
			margin-left:7px;
		}
		
		a.sign:hover
		{
			font-size: 17px;
			
		}
		
		
		
		</style>
		
	</head>
	
	<body>
	<div class="header">
	 			<img src="images/logo.jpg" width="10%" height="10%"> 
	 		<a href="home.php">	
	 			<img src="images/LOGO FINAL.jpg" width="25%" height="30%"> 
	 		</a>
	</div>
		
		<div class="signin">
			<div class="border">
			
		
			<form class="bodyform" id="login" method="post" action="check_login.php">
			
			
				
				<table>
					<tr>
						<td>
							Your Email: 
						</td>
						<td>
							<input type="text" name="email"/>
						</td>
					</tr>
					<tr>
						<td>
							Your Password: 
						</td>
						<td>
							<input type="password" name="password"/>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<input id="submit_button" type="submit" class="searchButton" value="Sign in" />
						</td>
					</tr>
					
				</table>
				
				<p><h4>Don't you have an account?<a class="sign"  style="color: red;" href="sign_up.php">  Sign up</a> </h4></p>
				
				
			</form>
			</div>
		</div>
		<div id="stage">
		<div id="spinner">
		<img class="face"src="images/books.png" width="150" height="200">


	</body>
	
</html>

