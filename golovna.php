<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Classic Lectore</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Pixel Fabric clothes icons -->
	<link rel="stylesheet" type="text/css" href="fonts/pixelfabric-clothes/style.css" />
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	 <!-- Flickity gallery styles -->
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<!-- Bottom bar with filter and cart info -->
	<div class="bar">
		<div class="filter">
			<span class="filter__label">Filter: </span>
			<button class="action filter__item filter__item--selected" data-filter="*">All</button>
			<button class="action filter__item" data-filter=".History"><span class="action__text">History</span></button>
			<button class="action filter__item" data-filter=".Classics"><span class="action__text">Classics</span></button>
			<button class="action filter__item" data-filter=".Biography"><span class="action__text">Biography</span></button>
			<button class="action filter__item" data-filter=".Fantastic"><span class="action__text">Fantastic</span></button>
			<button class="action filter__item" data-filter=".Comics"><span class="action__text">Comics</span></button>
		</div>
		<form action="form3.php">
		<button class="cart">
			<i class="cart__icon fa fa-shopping-cart"></i>
			<span class="text-hidden">Shopping cart</span>
			<span class="cart__count">0</span>
		</button>
	</form>
	</div>
	<!-- Main view -->
	<div class="view">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<span>literature<span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
			<h1>Classic Lectore<span>powered by <a href="#">Two</a> &amp; <a href="#">a Half #coders</a></span></h1>
			
		</header>
		<!-- Grid -->
		<section class="grid grid--loading">
			<!-- Loader -->
			<img class="grid__loader" src="images/grid.svg" width="60" alt="Loader image" />
			<!-- Grid sizer for a fluid Isotope (Masonry) layout -->
			<div class="grid__sizer"></div>
			<!-- Grid items -->
			<div class="grid__item Classics">
				<div class="slider">
					<div class="slider__item"><img src="images/sher1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/sher2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/sher3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Classics</h3>
					<span class="meta__brand">Sherlock Holmes</span>
					<span class="meta__price">Pay if u loss: $7.59</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/dead1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/dead2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/dead3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Дэдпул. Том 1. Мертвые президенты</span>
					<span class="meta__price">Pay if u loss: $5</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Biography">
				<div class="slider">
					<div class="slider__item"><img src="images/stive1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/stive2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/stive3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Biography</h3>
					<span class="meta__brand">Steve Jobs (Hardcover)</span>
					<span class="meta__price">Pay if u loss: $19.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item grid__item--size-a Classics">
				<div class="slider">
					<div class="slider__item"><img src="images/donk1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/donk2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/donk3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Classic</h3>
					<span class="meta__brand">Don Quixote</span>
					<span class="meta__price">Pay if u loss: $4.79</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Fantastic">
				<div class="slider">
					<div class="slider__item"><img src="images/vl1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/vl2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/vl3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Fantastic</h3>
					<span class="meta__brand">Властелин колец. Возвращение короля</span>
					<span class="meta__price">Pay if u loss: $5</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item grid__item--size-a History">
				<div class="slider">
					<div class="slider__item"><img src="images/Stalingrad1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Stalingrad2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Stalingrad1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">History</h3>
					<span class="meta__brand">Stalingrad: The Fateful Siege, 1942-1943</span>
					<span class="meta__price">Pay if u loss: $10.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/bat1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/bat2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/bat3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Бэтмен. Возвращение Темного Рыцаря</span>
					<span class="meta__price">Pay if u loss: $7</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Classics">
				<div class="slider">
					<div class="slider__item"><img src="images/kirs1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/kirs2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/kirs3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Classic</h3>
					<span class="meta__brand">The old man & the sea</span>
					<span class="meta__price">Pay if u loss: $5.49</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/sup1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/sup2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/sup3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Супермен непобежденный</span>
					<span class="meta__price">Pay if u loss: $12</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Biography">
				<div class="slider">
					<div class="slider__item"><img src="images/night2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/night1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/night2.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Biography</h3>
					<span class="meta__brand">Night (The Night Trilogy, #1) </span>
					<span class="meta__price">Pay if u loss: $9.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Classics">
				<div class="slider">
					<div class="slider__item"><img src="images/WAP1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/WAP2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/WAP3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Classic</h3>
					<span class="meta__brand">War And Peace</span>
					<span class="meta__price">Pay if u loss: $9.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Fantastic">
				<div class="slider">
					<div class="slider__item"><img src="images/vid1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/vid2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/vid3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Fantastic</h3>
					<span class="meta__brand">Відьмак. Останнє бажання</span>
					<span class="meta__price">Pay if u loss: $3</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item History">
				<div class="slider">
					<div class="slider__item"><img src="images/1776.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/17762.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/1776.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">History</h3>
					<span class="meta__brand">1776</span>
					<span class="meta__price">Pay if u loss: $12.00</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/hulk1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/hulk2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/hulk3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Халк. Том 1. Битва титанов</span>
					<span class="meta__price">Pay if u loss: $10</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item grid__item--size-a Biography">
				<div class="slider">
					<div class="slider__item"><img src="images/therise1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/therise2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/therise1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Biography</h3>
					<span class="meta__brand">The Rise of Theodore Roosevelt (Paperback) </span>
					<span class="meta__price">Pay if u loss: $8.69</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Fantastic">
				<div class="slider">
					<div class="slider__item"><img src="images/gob1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/gob2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/gob3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Fantastic</h3>
					<span class="meta__brand">Гобіт, або Туди і звідти</span>
					<span class="meta__price">Pay if u loss: $4</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/otr1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/otr2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/otr3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Отряд самоубийц. Книга 1. Пинок в зубы</span>
					<span class="meta__price">Pay if u loss: $11</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item History">
				<div class="slider">
					<div class="slider__item"><img src="images/david1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/david2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/david1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">History</h3>
					<span class="meta__brand">John Adams</span>
					<span class="meta__price">Pay if u loss: $15.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Classics">
				<div class="slider">
					<div class="slider__item"><img src="images/comedy1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/comedy2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/comedy1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Classic</h3>
					<span class="meta__brand">Divine comedy</span>
					<span class="meta__price">Pay if u loss: $5.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/ros1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/ros2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/ros3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Смерть Росомахи</span>
					<span class="meta__price">Pay if u loss: $10</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Biography">
				<div class="slider">
					<div class="slider__item"><img src="images/steve1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/steve1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/steve1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Biography</h3>
					<span class="meta__brand">Born Standing Up: A Comic's Life (Hardcover) </span>
					<span class="meta__price">Pay if u loss: $5.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item grid__item--size-a Fantastic">
				<div class="slider">
					<div class="slider__item"><img src="images/gra1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/gra2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/gra3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Fantastic</h3>
					<span class="meta__brand">Игра престолов</span>
					<span class="meta__price">Pay if u loss: $8</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item History">
				<div class="slider">
					<div class="slider__item"><img src="images/august1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/august2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/august1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">History</h3>
					<span class="meta__brand">The Guns of August</span>
					<span class="meta__price">Pay if u loss: $9.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/flash1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/flash2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/flash3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Флэш. Книга 1. Только вперед</span>
					<span class="meta__price">Pay if u loss: $6</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Classics">
				<div class="slider">
					<div class="slider__item"><img src="images/frank1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/frank2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/frank1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Classic</h3>
					<span class="meta__brand">Frankenstein</span>
					<span class="meta__price">Pay if u loss: $6.00</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/x1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/x2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/x3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Люди X. Том 1. Люди будущего</span>
					<span class="meta__price">Pay if u loss: $5</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Classics">
				<div class="slider">
					<div class="slider__item"><img src="images/alice1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/alice2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/alice3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Classic</h3>
					<span class="meta__brand">Alice in Wonderland</span>
					<span class="meta__price">Pay if u loss: $4.69</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Fantastic">
				<div class="slider">
					<div class="slider__item"><img src="images/her1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/her2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/her3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Fantastic</h3>
					<span class="meta__brand">Герой империума</span>
					<span class="meta__price">Pay if u loss: $25</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item History">
				<div class="slider">
					<div class="slider__item"><img src="images/battlecry1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/battlecry2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/battlecry1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">History</h3>
					<span class="meta__brand">Battle Cry of Freedom: The Civil War Era</span>
					<span class="meta__price">Pay if u loss: $9.99</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
						<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/pauk1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/pauk2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/pauk3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Человек-Паук. Том 1. Голод</span>
					<span class="meta__price">Pay if u loss: $6</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Fantastic">
				<div class="slider">
					<div class="slider__item"><img src="images/volna1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/volna2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/volna3.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Fantastic</h3>
					<span class="meta__brand">5-я волна</span>
					<span class="meta__price">Pay if u loss: $7</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item Comics">
				<div class="slider">
					<div class="slider__item"><img src="images/super1.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/super2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/super3.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Comics</h3>
					<span class="meta__brand">Люди Икс против команды "Алтимейтс". Война Супергероев</span>
					<span class="meta__price">Pay if u loss: $8</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
			<div class="grid__item History">
				<div class="slider">
					<div class="slider__item"><img src="images/unbroken1.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/unbroken2.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/unbroken1.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">History</h3>
					<span class="meta__brand">Unbroken: A World War II Story of Survival, Resilience, and Redemption </span>
					<span class="meta__price">Pay if u loss: $7.59</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>
		</section>
		<!-- /grid-->
	</div>
	<!-- /view -->
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>