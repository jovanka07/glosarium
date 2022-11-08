<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container-about{
			width: 80%;
			/*border: 1px solid black;*/
			margin: 30px auto;
			text-align: center;
		}
		.container-about .about-1 h3{
			font-size: 48px;
		}
		.container-about .about-1 h3 span{
			color: #4649FF;
		}
		.container-about .about-1 h3 span .about-span{
			color: #781C68;
		}
		.about-1 p{
			margin: 20px 0 0 0 ;
			font-size: 16px;
			color: #495C83;
		}
		.about-buttom{
			margin: 40px 0 0 0;
		}
		.about-buttom a{
			z-index: 100;
			font-size: 18px;
			text-decoration: none;
			background-color: #4649FF;
			border-radius: 10px;
			padding: 15px;
			box-sizing: border-box;
			color: #fff;
		}
		.about-menu{
			display: flex;
			margin: 40px auto;
			justify-content: center;
		}
		.about-menu a{
			font-size: 16px;
			color: #4649FF;
			font-weight: bold;
			margin: 0 0 0 20px;
			text-decoration: none;
		}
		.about-menu a:hover{
			color: #333
		}
		.about-people{
			width: 60%;
			height: 500px;
			margin: 30px auto;
		}
		.about-people img{
			width: 100%;
			height: 100%;
			border-radius: 30px;
		}
		.about-video{
			width: 60%;
			/*border: 1px solid black;*/
			margin: -60px auto;
		}
		.video{
			width: 12%;
			padding: 15px;
			box-sizing: border-box;
			border-radius: 100%;
			margin: 10px auto;
			/*border: 1px solid black;*/
			background-color: #fff;
			position: relative;
			box-shadow: 0 0 15px #333;
			transition: 0.8s;
		}
		.video i{
			color: #4649FF;
			font-size: 21px;
		}
		.video:hover, .video i:hover{
			background-color: #f4f4f4;
			box-shadow: 0 0 15px #fff;
		}
		.about-video p{
			color: #4649FF;
			font-weight: bold;
			/*margin: 10px 0 0 0;*/
			font-size: 18;
		}

		@media(max-width: 800px){
			.about-people{
				width: 100%;
			}
			.video{
				width: 25%;
			}
			.container-about{
				margin: 70px auto;
			}
		}
	</style>
</head>
<body>
	<main class="container-about">
		<article class="about-1">
			<h3>"Eve<span>ry<span class="about-span">thing you ne</span>ed</span> to grow <br>your business"</h3>
			<p>Joppton does everything you need to start and grow your business. Atrract clients thought <br>engaging video content and simplify your business operationg</p>
		</article>
		
		<article class="about-buttom">
			<a href="">Get Started With Joppdev Today</a>
		</article>
			
		<article class="about-menu">
			<a href=""><i class="fa-sharp fa-solid fa-credit-card" style="margin-right: 10px;"></i>No creadit card needid</a>
			<a href=""><i class="fa-sharp fa-solid fa-rocket" style="margin-right: 10px;"></i>free 3-mont trial</a>
		</article>

		<figure class="about-people">
			<img src="img/people.png">
		</figure>
		<figcaption class="about-video">
			<div class="video">
				<i class="fa-sharp fa-solid fa-play"></i>
			</div>

			<p>See Joppton in Action</p>
		</figcaption>
	</main>
</body>
</html>