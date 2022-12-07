<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container-video{
			width: 80%;
			margin: 150px auto;
			/*border: 1px solid black;*/
			display: flex;
			justify-content: space-between;
		}
		.video-img{
			width: 50%;
			height: 580px;
			background-color: #FDF3DD;
			display: flex;
			border-top-left-radius: 60px;
			border-bottom-right-radius: 60px;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
		}
		.video-img img{
			border-radius: 30px;
			width: 80%;
			height: 80%;
			margin: auto;
		}
		.video-content{
			margin: 80px 0 0 0 ;
			width: 40%;
			/*border: 1px solid black;*/
		}
		.video-content h3{
			font-size: 48px;
		}
		.video-content p{
			width: 70%;
			margin: 15px 0 0 0;
			font-size: 16px;
			/*border: 1px solid black;*/
		}
		.video-owner{
			margin: 30px 0 0 0;
			/*border: 1px solid black;*/
			padding-left: 50px;
			border-left: 5px solid yellow;
		}
		.video-owner p{
			color: #495C83;
			font-size: 16px;
		}
		.owner{
			margin: 15px 0 0 0;
			display: flex;
		}
		.nickname{
			width: 100%;
			margin: 0 0 0 15px;
		}
		.nickname h5{
			margin: 10px 0 0 0;
			font-size: 21px;
		}
		@media(max-width: 800px){
			.video-img{
				display: none;
			}
			.video-content{
				width: 100%;
				margin: 30px auto;
				/*border: 1px solid black;*/
				/*text-align: center;*/
			}
			.container-video{
				margin: 30px auto;
			}
		}
	</style>
</head>
<body>
	<main class="container-video">
		<figure class="video-img">
			<img src="img/dua.jpg">
		</figure>

		<section class="video-content">
			<h3>Project PKN <br> RPL Squad <br> 2022!</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqu </p>

			<article class="video-owner">
				<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore e
				"</p>
				<div class="owner">
					<img src="img/foto.png">
					<div class="nickname">
						<h5>Rpl Lawack</h5>
						<p>Pkn Multitalent</p>
					</div>
				</div>
			</article>

		</section>
	</main>
</body>
</html>