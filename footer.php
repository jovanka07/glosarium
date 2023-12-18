<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		footer{
			width: 100%;
			border: 1px solid black;
			display: flex;
			justify-content: space-around;
			background-color: #4649FF;
			padding: 15px;
			box-sizing: border-box;
		}
		.footer-kiri{
			margin: 30px 0 30px 0;
			width: 40%;
			/*border: 1px solid black;*/
		}
		.footer-kiri p{
			font-size: 16px;
			color: #fff;
		}
		.footer-kiri .foo{
			font-size: 21px;
			color: #fff;
			font-weight: bold;
			margin: 0 0 15px 0;
		}
		.footer-kanan{
			margin: 30px 0 30px 0;
			/*border: 1px solid black;*/
			width: 40%;
			display: flex;
			justify-content: space-around;
		}
		.satu-footer h5{
			font-size: 21px;
			color: #fff;
			font-weight: bold;
		}
		.satu-footer p{
			font-size: 16px;
			color: #fff;
			margin: 15px 0 0 0;
		}
		@media(max-width: 800px){
			footer{
				flex-wrap: wrap;
			}
			.footer-kiri{
				width: 100%;
				text-align: center;
			}
			.footer-kanan{
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<footer>
		<section class="footer-kiri">
			<p class="foo"><i class="fa-sharp fa-solid fa-satellite" style="color:#fff"></i> R P L A W A C K</p>
			<p >To be good citizenship.</p>
		</section>

		<section class="footer-kanan">
			<article class="satu-footer">
				<h5>project</h5>
				<p>Book simulation</p>
				<p>pkn squad</p>
			</article>

			<article class="satu-footer">
				<h5>Resource</h5>
				<p>Blog</p>
				<p>FAQ</p>
			</article>

			<article class="satu-footer">
				<h5>Company</h5>
				<p>About</p>
				<p>Team</p>
			</article>
		</section>
	</footer>
</body>
</html>