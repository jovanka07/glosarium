<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="font/css/all.min.css">
	<style>
		*{
			margin: 0;
		}
		header{
			width: 100%;
			padding: 15px;
			box-sizing: border-box;
			/*border:1px solid black;	*/
			display: flex;
			justify-content: space-around;	
			background-color: #fff;
			box-shadow: 0 0 3px #333;	
		}
		.header-kiri{
			text-align: center;
			/*border: 1px solid black;*/
			display: flex;
		}
		.header-kiri .logo{
			font-size: 21px;
			color: #4649FF;
			font-weight: bold;
		}
		.header-kiri a, .header-kanan a{
			text-decoration: none;
			margin: auto;
			margin-left: 15px;
			font-size: 18px;
			color: #333;
		}
		.header-kanan{
			margin: 3px 0 0 0;
		}
		.header-kiri .a:hover, .header-kanan .a:hover{
			color: #4649FF;
			padding-bottom: 5px;
			box-sizing: border-box;
			border-bottom: 2px solid #4649FF;
		}
		.header-kanan .header-started{
			background-color: #4649FF;
			color: #fff;
			padding: 5px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		@media(max-width: 800px){
			header{
				flex-wrap: wrap;
			}
			.header-kiri{
				display: flex;
				justify-content: space-around;
				/*border: 1px solid black;*/
				width: 100%;
			}
			.header-kiri a{
				margin: 0 0 0 1px;
			}
			.header-kanan{
				width: 100%;
				display: flex;
				/*border: 1px solid black;*/
				margin: 20px 0 0 0;
			}
		}
	</style>
</head>
<body>
	<header>
		<div class="header-kiri">
			<p href="" class="logo"><i class="fa-sharp fa-solid fa-satellite" style="color:#4649FF"></i> R P L A W A K </p>
		</div>
		
	</header>
</body>
</html>