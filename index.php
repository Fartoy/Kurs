<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="assets/img/pizza_favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/styles/main.css">

	<meta name="viewport" content="device-width, initial-scale=1">
	<title>Pizza</title>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jqcart.min.js"></script>
<script src="js/jqcart.js"></script>
<script>
	$(function(){
	'use strict';

	$.jqCart({
			buttons: '.add_item',
			handler: './php/add.php',
			cartLabel: '.cart',
			visibleLabel: true,
			openByAdding: false,
			currency: '&euro;'
	});	

	$('#open').click(function(){
		$.jqCart('openCart'); 
	});
	$('#clear').click(function(){
		$.jqCart('clearCart'); 
	});	
	});
</script>
</head>
<body>

	<header class="header" id="header">
		<div class="container">
			<div class="header__inner">
							Pizza Town
				<div class="nav" id="nav">
					<a class="nav__link" href="#" data-scroll="#intro">home</a>
					<a class="nav__link" href="#" data-scroll="#story">about us</a>
					<a class="nav__link" href="#" data-scroll="#best">best today</a>
					<a class="nav__link" href="#" data-scroll="#contact">contact</a>
										
				</div>
				<button class="nav__link__btn btn--red" type="button" >order +1 418-692-5329</button>
				


				<!-- Cart -->
				<div class="cart">
				</div>


				<!-- Cart -->
				


				<button class="burger" id="navToggle">
					<span class="burger__item">Menu</span>
				</button>
			
			</div>
		</div>

	</header>

	<div class="intro" id="intro">
		<div class="container">
			<div class="intro__inner">
				<h2 class="intro__subtitle">best in town</h2>
				<h1 class="intro__title">
					Pizza & Pasta
				</h1>
				<button class="btn btn--red" href="#" data-scroll="#menu">todays menu</button>
			</div>
		</div>
	</div>

	<div class="history" id="story">
		<div class="locl bg-1 z--1 w-20"></div>
		<div class="locr bg-2 z--1 w-20"></div>
		<div class="container">
			<div class="head">
				<img class="history__logo" src="assets/img/logo.png"  alt="">
				<h2>Our Story</h2>
			</div>
			<div class="text">
				Until 1830, pizza was eaten in the open air in bakeries. Our institution adheres to this tradition to this day. We opened in 1960, when pizza began to gain popularity in Canada. Basically, it was sold in restaurants, but we sell it in the open space, voshche park. During such a long history of our institution, we have such popular pizzas as “Canadian”, “Margherita”, etc.
			</div>
		</div>
	</div>

	<div class="best" id="best">
		<div class="container">

			<div class="best__head">
				<img src="assets/img/logo.png" alt="">
				<h2 class="namebest">best today</h2>
			</div>

			<div class="best__all">

				<div class="best__some">
					<div class="pizza__img">
						<img class="best__pizza" src="assets/img/p1.png" alt="">
					</div>
						<div class="pizza__desc">
						California Pizza<br/>
						$10.00 <br/>
						<button class="add_item" data-id="1" data-title="California Pizza" data-price="10" data-img="assets/img/p1.png">Order Now</button>
						</div>
				</div>

				<div class="best__some">
					<div class="pizza__img">
						<img class="best__pizza" src="assets/img/p2.png" alt="">
					</div>
					<div class="pizza__desc">
						Cold Cuts<br/>
						$11.00<br/>
						<button class="add_item" data-id="2" data-title="Cold Cuts" data-price="11" data-img="assets/img/p2.png">Order Now</button>
					</div>
				</div>

				<div class="best__some">
					<div class="pizza__img">
						<img class="best__pizza" src="assets/img/p3.png" alt="">
					</div>
					<div class="pizza__desc">
						Vegetable Pizza<br/>
						$11.00<br/>
						<button class="add_item" data-id="3" data-title="Vegetable Pizza" data-price="11" data-img="assets/img/p3.png">Order Now</button>
					</div>
				</div>

			</div>
			
			<div class="best__all__2">

				<div class="best__some">
					<div class="pizza__img">
						<img class="best__pizza" src="assets/img/p7.png" alt="">
					</div>
					<div class="pizza__desc">
						Tomato Pizza<br/>
						$11.00<br/>
						<button class="add_item" data-id="4" data-title="Tomato Pizza" data-price="11" data-img="assets/img/p7.png">Order Now</button>
					</div>
				</div>

					<div class="best__some">
					<div class="pizza__img">
						<img class="best__pizza" src="assets/img/p5.png" alt="">
					</div>
					<div class="pizza__desc">
						Pizza Margherita<br/>
						$11.00<br/>
						<button class="add_item" data-id="5" data-title="Pizza Margherita" data-price="11" data-img="assets/img/p5.png">Order Now</button>
					</div>
					</div>

					<div class="best__some">
					<div class="pizza__img">
						<img class="best__pizza" src="assets/img/p6.png" alt="">
					</div>
					<div class="pizza__desc">
						Sicilian Pizza<br/>
						$11.00<br/>
						<button class="add_item" data-id="6" data-title="Sicilian Pizza" data-price="11" data-img="assets/img/p6.png">Order Now</button>
					</div>
					</div>

		</div>

		</div>
	</div>

	<div class="menu" id="menu">
		<div class="container">

			<div class="menu__head">
				<img class="history__logo" src="assets/img/logo.png" alt="">
				<h2>Our Menu</h2>
			</div>

			<div class="menu__all">


			<div class="menu__all__left">

				<div class="menu__some">
					
						<div class="menu__some__jpg">
							<img class="img__left" src="assets/img/p1.png" alt="">
						</div>
						<div class="menu__info">
						<div class="menu__some__name">
							California Pizza
							</div>
							<div class="menu__some__price">
							<button class="add_item price" data-id="1" data-title="California Pizza" data-price="10" data-img="assets/img/p1.png">Buy there $10.00</button>
							</div>
						</div>
						<div class="menu__some__desc" >
							California pizza is the style of preparation and serving of pizza. It combines the traditions of New York with California fillings with Italian practice.
						</div>
						
					
				</div>

				<div class="menu__some">
					
						<div class="menu__some__jpg">
							<img class="img__left" src="assets/img/p2.png" alt="">
						</div>
						<div class="menu__info">
							<div class="menu__some__name">
								Cold Cuts	
							</div>
							<div class="menu__some__price">					
								<button class="add_item price" data-id="2" data-title="Cold Cuts" data-price="11" data-img="assets/img/p2.png">Buy there $11.00</button>
							</div>
						</div>
						
						<div class="menu__some__desc">
							In this pizza you can enjoy European meat cuts such as Italian salami and Spanish chorizo.
						</div>
					
				</div>

				<div class="menu__some">
					
						<div class="menu__some__jpg">
							<img class="img__left" src="assets/img/p6.png" alt="">
						</div>
						<div class="menu__info">
							<div class="menu__some__name">
								Sicilian Pizza 	
							</div>
							<div class="menu__some__price">					
								<button class="add_item price" data-id="6" data-title="Sicilian Pizza" data-price="11" data-img="assets/img/p6.png">Buy there $11.00</button>
							</div>
						</div>
						<div class="menu__some__desc">
							This type of pizza became a popular dish in western Sicily by the mid-19th century and was the type of pizza usually consumed in Sicily until the 1860s.
						</div>
					
				</div>

				</div>
				<div class="menu__all__right">

				<div class="menu__some">
					
						<div class="menu__some__jpg">
							<img class="img__left" src="assets/img/p3.png" alt="">
						</div>
						<div class="menu__info">
							<div class="menu__some__name">
								Vegetable Pizza	
							</div>
							<div class="menu__some__price">					
								<button class="add_item price" data-id="3" data-title="Vegetable Pizza" data-price="11" data-img="assets/img/p3.png">Buy there $11.00</button>
							</div>
						</div>
						<div class="menu__some__desc">
							Imagine a flaky, crispy crescent roll crust, a creamy herb cheese base, and lots of colorful fresh vegetables in every bite. Veggie Pizza does exactly what it is supposed to do, without making you too full for dinner.


						</div>					
				</div>

				<div class="menu__some">
					
						<div class="menu__some__jpg">
							<img class="img__left" src="assets/img/p5.png" alt="">
						</div>
						<div class="menu__info">
							<div class="menu__some__name">
								Pizza Margherita	
							</div>
							<div class="menu__some__price">					
								<button class="add_item price" data-id="5" data-title="Pizza Margherita" data-price="11" data-img="assets/img/p5.png">Buy there $11.00</button>
							</div>
						</div>
						
						<div class="menu__some__desc">
							Pizza Margherita is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil. 
						</div>
					
				</div>

				<div class="menu__some">
					
						<div class="menu__some__jpg">
							<img class="img__left" src="assets/img/p7.png" alt="">
						</div>

						<div class="menu__info">
							<div class="menu__some__name">
								Tomato Pizza	
							</div>
							<div class="menu__some__price">					
								<button class="add_item price" data-id="4" data-title="Tomato Pizza" data-price="11" data-img="assets/img/p7.png">Buy there $11.00</button>
							</div>
						</div>						
						<div class="menu__some__desc">
							Pizza with tomatoes could have appeared in Italy not earlier than the 16th century, on the assumption that tomatoes arrived in Europe around this time. 
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>

	<div class="contact" id="contact">
		<br><br>
		<div class="container">
			<div class="contact__all">
				<div class="contact__all__info">
					Adress: <br/>
					319 Rue Saint-Paul, Québec, QC G1K 3W8, Canada
				</div>
				<div class="contact__all__info">
					Phone: <br/>
					+1 418-692-5329
				</div>
				<div class="contact__all__info">
					Email: <br/>
					lapizzaio@gmail.com
				</div>
				Copyright ©2020 All rights reserved
				<br>
				<br>
			</div>
		</div>
	</div>

<!--JS-->


<script src="js/app.js"></script>
</body>
</html>