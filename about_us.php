<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!--Displaying the project logo in Browser Tab-->
    <link rel="icon" type="image" href="./Frontend_images/gvtBD.png">
	<title>DPSA | About Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styleee.css">
</head>
<body>
	
	<section>
		
		<div class="container">
			
			<div class="card">
				<div class="content">
					<div class="imgBx"><img src="./Frontend_images/walid.jpeg"></div>
					<div class="contentBx">
						<h3>s m khalidujjaman walid<br><span>Fullstack Developer</span></h3>
					</div>
				</div>
				<ul class="sci">
				<li style="--i:1">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</li>
			</ul>
			</div>
			<div class="card">
				<div class="content">
					<div class="imgBx"><img src="./Frontend_images/shahadat.jpeg"></div>
					<div class="contentBx">
						<h3>MD Shahadat kabir<br><span>Front-end Developer</span></h3>
					</div>
				</div>
				<ul class="sci">
				<li style="--i:1">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</li>
			</ul>
			</div>
			<div class="card">
				<div class="content">
					<div class="imgBx"><img src="./Frontend_images/samil.jpeg"></div>
					<div class="contentBx">
						<h3>shamil salamn<br><span>Ui Designer</span></h3>
					</div>
				</div>
				<ul class="sci">
				<li style="--i:1">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</li>
			</ul>
			</div>
			<div class="card">
				<div class="content">
					<div class="imgBx"><img src="./Frontend_images/imrul.jpeg"></div>
					<div class="contentBx">
						<h3>Imrul kayes fahad<br><span>Ux Designer</span></h3>
					</div>
				</div>
				<ul class="sci">
				<li style="--i:1">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</li>
			</ul>
			</div>

			<div class="card">
				<div class="content">
					<div class="imgBx"><img src="./Frontend_images/mahir.jpeg"></div>
					<div class="contentBx">
						<h3>Mahir sahariar<br><span>Backend Developer</span></h3>
					</div>
				</div>
				<ul class="sci">
				<li style="--i:1">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li style="--i:1">
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</li>
			</ul>
			</div>

			
	</section>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@200&display=swap');
    *{
        margin: 0;
        padding: 0;
        font-family: 'poppins',sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: warp;
        background: #161623;
        min-height: 100vh;
    }
    section{
        position: relative;
    }
    section::before{
        content:'';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#f00,#f0f);
        clip-path: circle(30% at right 70%);
    }
    section::after{
        content: '';
        position:absolute ;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#2196f3,#e91e63);
        clip-path: circle(20% at 10% 10%);

    }
    .container{
        position: relative;
        z-index: 1;
        display:flex;
        justify-content:center;
        align-items: center;
        flex-wrap:wrap;
        margin:20px 0;

    }
    .container .card{
        position: relative;
        width: 300px;
        height: 400px;
        background: rgba(255,255,255, 0.05);
        margin: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        display: flex;
        justify-content:center;
        align-items: center;
        backdrop-filter: blur(10px);
    }
    .container .card .content{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0.5;
        transition: 0.5s;
    }
    .container .card:hover .content{
        opacity: 1;
        transform:translateY(-20PX) ;
    }
    .container .card .content .imgBx{
        position: relative;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        border: 10px solid rgba(0, 0, 0, 0.25);
    }
    .container .card .content .imgBx img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height:100% ;
        object-fit: cover;
    }
    .container .card .content .contentBx h3{
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 500;
        font-size: 18px;
        text-align: center;
        margin: 20 px 0 10px;
        line-height: 1.1em;

    }
    .container .card .content .contentBx h3 span{
        font-size: 12px;
        font-weight: 300;
        text-transform: initial;

    }
    .container .card .sci{
        position: absolute;
        bottom: 50px;
        display: flex;
    }
    .container .card .sci li{
        list-style: none;
        margin: 0 10px;
        transform: translateY(40px);
        transition: 0.5s;
        opacity: 0;
        transition-delay:calc(0.1s * var(--i)) ;
    }
    .container .card:hover .sci li{
        transform: translateY(0px);
        opacity: 1;
    }
    .container .card .sci li a{
        color: #fff;
        font-size: 24px;
    }
    .container.card.content.btn-btn-primary{
    position:top;
    }
</style>