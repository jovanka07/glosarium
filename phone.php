<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container-phone{
			width: 80%;
			margin: 30px auto;
			/*border: 1px solid black;*/
			display: flex;
			justify-content: space-around;
		}
		.phone{
			width: 28%;
			height: 600px;
			/*border: 1px solid black;*/
		}
		.phone img{
			width: 100%;
			height: 100%;
		}
		.content-phone{
			margin: 80px 0 0 0;
			width: 50%;
			/*border: 1px solid black;*/
		}
		.content-phone h3{
			font-size: 48px;
		}
		.content-phone p{
			font-size: 18px;
			margin: 25px 0 0 0;
		}
		.content-input{
			padding-left: 30px;
			box-sizing: border-box;
			/*border: 1px solid black;*/
			margin: 30px 0 0 0 ;
			border-left: 5px solid blue;
		}
		.content-input input{
			background-color: #fff;
			border: 1px solid #f3f3f3;
			box-shadow: 0 0 2px #333;
			padding: 15px;
			box-sizing: border-box;
			outline-color: blue;
			border-radius: 10px;
			margin-right: 15px;
			width: 65%;
		}
		.content-input button {
			padding: 15px;
			box-sizing: border-box;
			background-color: #4649FF;
			color: #fff;
			border-radius: 10px;
			border: 1px solid blue;
			transition: 0.8s;
		}
		.content-input button:hover{
			box-shadow: 0 0 15px #333;
		}
		.content-input p{
			font-size: 16px;
			color: grey;
		}
		.content-input a{
			color: blue;
		}
		@media(max-width: 800px){
			.phone{
				display: none;
			}
			.content-phone{
				/*text-align: center;*/
				width: 100%;
				margin: 30px 0 30px 0;
			}
		}
	</style>
</head>
<body>
	<main class="container-phone">
		<figure class="phone">
			<img src="img/phone.png">
		</figure>

		<section class="content-phone">
			<h3>Thank you for <br> closing Joppton <br> premium</h3>
			<p>Enter for your email id for the download link</p>

			<div class="content-input">
				<input type="text" name="" placeholder="Enter your email id">
				<button type="submit">Send link</button>
				<p>By clicking "Send link" you agree to our <a href="">Team of Service</a> and <a href="">Privacy Policy</a></p>
			</div>

		</section>
	</main>
</body>
</html>