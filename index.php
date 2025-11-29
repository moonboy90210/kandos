<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS v5.2.1 -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
		crossorigin="anonymous" />
	<style>
		/* class="Menu-Section".nav-link:hover */
		.menu-section {
			font-family: 'Lora', serif;
		}

		.menu-title {
			font-size: 2.8rem;
			font-weight: 700;
			letter-spacing: 1px;
		}

		.menu-sub {
			color: #777;
			font-size: 1.1rem;
		}

		.underline {
			width: 80px;
			height: 3px;
			background: #000;
			margin: 10px auto;
			border-radius: 5px;
		}

		.menu-tabs .nav-link {
			border: none;
			font-family: 'Poppins', sans-serif;
			font-size: 1rem;
			padding: 10px 18px;
			margin: 0 7px;
			border-radius: 50px;
			transition: 0.3s;
		}

		.menu-tabs .nav-link.active,
		.menu-tabs .nav-link:hover {
			background: #000;
			color: #fff;
		}

		.menu-list {
			display: none;
			animation: fadeIn 0.6s ease;
		}

		.menu-list.active {
			display: block;
		}

		.menu-item {
			margin-bottom: 25px;
			padding-bottom: 15px;
			border-bottom: 1px solid #eee;
		}

		.menu-item h4 {
			display: flex;
			justify-content: space-between;
			font-size: 1.2rem;
			font-weight: 600;
		}

		.menu-item p {
			color: #777;
			margin: 5px 0 0;
			font-size: 0.95rem;
		}
	</style>
</head>

<body>
	<header>
		<!-- place navbar here -->
	</header>
	<main>




	
		<section id="menu" class="menu-section py-5">
			<div class="container">
				<div class="text-center mb-5">
					<h2 class="menu-title">Our Menu</h2>
					<p class="menu-sub">Crafted with passion. Served with elegance.</p>
					<div class="underline"></div>
				</div>

				<!-- TAB BUTTONS -->
				<ul class="nav justify-content-center mb-4 menu-tabs">
					<li class="nav-item">
						<button class="nav-link active" data-menu="starters">Starters</button>
					</li>
					<li class="nav-item">
						<button class="nav-link" data-menu="main">Main Course</button>
					</li>
					<li class="nav-item">
						<button class="nav-link" data-menu="drinks">Drinks</button>
					</li>
					<li class="nav-item">
						<button class="nav-link" data-menu="desserts">Desserts</button>
					</li>
				</ul>

				<!-- MENU LISTS -->
				<div class="menu-content">

					<!-- Starters -->
					<div class="menu-list active" id="starters">
						<div class="menu-item">
							<h4>Grilled Chicken Skewers <span>$12</span></h4>
							<p>Tender marinated chicken grilled to perfection.</p>
						</div>
						<div class="menu-item">
							<h4>Spiced Beef Suya <span>$10</span></h4>
							<p>Authentic Nigerian suya with Kandos signature spices.</p>
						</div>
						<div class="menu-item">
							<h4>Prawn Cocktail <span>$14</span></h4>
							<p>Fresh prawns served with creamy cocktail sauce.</p>
						</div>
					</div>

					<!-- Main Course -->
					<div class="menu-list" id="main">
						<div class="menu-item">
							<h4>Kandos Special Fried Rice <span>$22</span></h4>
							<p>Loaded with vegetables, prawns & signature seasoning.</p>
						</div>
						<div class="menu-item">
							<h4>Chicken Alfredo Pasta <span>$25</span></h4>
							<p>Creamy, rich, and topped with grilled chicken.</p>
						</div>
						<div class="menu-item">
							<h4>Grilled Salmon Fillet <span>$30</span></h4>
							<p>Served with lemon butter sauce & mashed potatoes.</p>
						</div>
					</div>

					<!-- Drinks -->
					<div class="menu-list" id="drinks">
						<div class="menu-item">
							<h4>Chapman <span>$8</span></h4>
							<p>Refreshing fruity cocktail, Kandos style.</p>
						</div>
						<div class="menu-item">
							<h4>Fresh Pineapple Juice <span>$6</span></h4>
							<p>Cold-pressed and naturally sweet.</p>
						</div>
						<div class="menu-item">
							<h4>Classic Mojito <span>$10</span></h4>
							<p>Minty, zesty, and incredibly refreshing.</p>
						</div>
					</div>

					<!-- Desserts -->
					<div class="menu-list" id="desserts">
						<div class="menu-item">
							<h4>Chocolate Lava Cake <span>$15</span></h4>
							<p>Warm cake with molten chocolate center.</p>
						</div>
						<div class="menu-item">
							<h4>Vanilla Cheesecake <span>$12</span></h4>
							<p>Served with strawberry glaze.</p>
						</div>
						<div class="menu-item">
							<h4>Ice Cream Trio <span>$10</span></h4>
							<p>Mix of chocolate, vanilla & caramel.</p>
						</div>
					</div>

				</div>
			</div>
		</section>




		<!-- MENU SECTION -->
		<section id="menu" class="py-5">
			<main>
				<div class="container">
					<div class="row">
						<div class="col-md-12 justify-content-center text-center">
							<h1>Delicious Menu</h1>
							<h6 class="text-secondary mb-4">Come eat our delicious, healthy meals and relax in our ambient environment.
							</h6>
						</div>
					</div>


					<div class="justify-content-center">
						<ul class="nav nav-tabs nav-tab-dark mb-3 justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active  text-dark" id="pills-home-tab" data-bs-toggle="pill"
									data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
									aria-selected="true">MEALS</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link  text-dark" id="pills-contact-tab" data-bs-toggle="pill"
									data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
									aria-selected="false">SWALLOW</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link  text-dark" id="pills-profile-tab" data-bs-toggle="pill"
									data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
									aria-selected="false">SOUP</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link  text-dark" id="pills-sides-tab" data-bs-toggle="pill"
									data-bs-target="#pills-sides" type="button" role="tab" aria-controls="pills-sides"
									aria-selected="false">PROTEINS</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link  text-dark" id="pills-pepper-tab" data-bs-toggle="pill"
									data-bs-target="#pills-pepper" type="button" role="tab" aria-controls="pills-pepper"
									aria-selected="false">PEPPERSOUP</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link  text-dark" id="pills-1759-tab" data-bs-toggle="pill" data-bs-target="#pills-1759"
									type="button" role="tab" aria-controls="pills-1759" aria-selected="false">1759</button>
							</li>

						</ul>

						<div class="tab-content " id="pills-tabContent">

							<!-- BREAKFAST PILLS -->
							<div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
								tabindex="0">
								<div class="card mb-1 border-0 " style="max-width: 1600px;">
									<div class="row g-2 item7 justify-content-center p-5">
										<div class="col-sm-2 col-lg-1">
											<img src="/img/wrice.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">White Riceeee</h5>
												<!-- <p class="card-text">
                        This is a creamy Italian mushroom sauce for pasta, chicken or beef fillets.
                        If you are a mushroom lover, then this Italian sauce is for you.
                        It features a variety of mushrooms and you can add or take away as many kinds as you like.
                      </p> -->
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/Jollof-rice.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Jollof Rice</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,500.00</h6>
												</p>
											</div>
										</div>

										<div class="col-sm-2 col-lg-1">
											<img src="/img/freid.JPG" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Fried Rice</h5>
												<!-- <p class="card-text">
                        This is a creamy Italian mushroom sauce for pasta, chicken or beef fillets.
                        If you are a mushroom lover, then this Italian sauce is for you.
                        It features a variety of mushrooms and you can add or take away as many kinds as you like.
                      </p> -->
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/bplantain.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Boil Plantain </h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/planporridge.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Plantain Porridge</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/basmati.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Basmati Rice</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/noodles.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Noodles w/ Fried Egg & Veggies</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/noodles.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Extra Noodles</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#900.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/plainspag.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Plain Spaghetti</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/yamp.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Yam Porridge</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/yamegg.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Yam w/ Egg Sauce</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-sm-2 col-lg-1">
											<img src="/img/abacha.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
											<hr style="width: 320px;">
										</div>
										<div class="col-sm-4 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Abacha</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,500.00</h6>
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>


							<!-- SWALLOW PILLS -->
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
								tabindex="0">
								<div class="card mb-1 border-0" style="max-width: 1800px;">
									<div class="row g-0">
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/semovita1.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Semovita</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#600.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/Poundo-300x297.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Poundo</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/oat.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Oat Meal</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/wheat.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Wheat</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#800.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/garri.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Garri</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#600.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/fufu.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Fufu</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#600.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/yp.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Boiled Yam/Plantain</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/fyp.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Fried Yam/Plantain</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,500.00</h6>
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- SOUP PILLS -->
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
								tabindex="0">

								<div class="card mb-1 border-0" style="max-width: 1800px;">
									<div class="row g-0">
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/egusi.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Egusi Soup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,200.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/vegie.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Vegetable Soup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,300.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/okro.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Okro/Ogbono Soup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,200.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/okrov.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Vegetable Okro</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,300.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/oha.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Oha Soup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,300.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/bleaf.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Bitter Leaf Soup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,300.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/vegie.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Vegetable Sauce</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/tsus.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Fresh Tomato Sauce</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/stew.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Stew</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,200.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/egg-sauce.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Egg Sauce</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/banga.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Ofe Akwu(Banga)</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,200.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/ogbon.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Ogbono</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,200.00</h6>
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- PROTEIN/SIDES PILLS -->
							<div class="tab-pane fade" id="pills-sides" role="tabpanel" aria-labelledby="pills-sides-tab" tabindex="0">
								<div class="card mb-1 border-0" style="max-width: 1800px;">
									<div class="row g-0">
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/salad.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Salad</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/coles.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Coleslaw</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#1,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/plant.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Fried Plantain</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#600.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/meat.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Beef</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/gmeat.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Goat Meat</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/assort.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Assorted</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/chick.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Chicken</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/turke.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Turkey</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#4,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/tit.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Titus Fish</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,000.00</h6>
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- PEPPERSOUP PILLS -->
							<div class="tab-pane fade" id="pills-pepper" role="tabpanel" aria-labelledby="pills-pepper-tab"
								tabindex="0">
								<div class="card mb-1 border-0" style="max-width: 1800px;">
									<div class="row g-0">
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/chi sou.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Chicken/Turkey Peppersoup w/ Plantain or Yam</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#6,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/gsou.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Goat Meat Peppersoup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#4,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/assort.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Assorted Peppersoup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/catsou.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Catfish Peppersoup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/cathead.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Catfish (Head) Peppersoup</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/fullcf.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Full Catfish Peppersoup w/ Plantain or Yam</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#15,000.00</h6>
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- 1759 PILLS -->
							<div class="tab-pane fade" id="pills-1759" role="tabpanel" aria-labelledby="pills-1759-tab" tabindex="0">
								<div class="card mb-1 border-0" style="max-width: 1800px;">
									<div class="row g-0">
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/isi.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Isi-Ewu</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#10,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/peppered_goat_meat.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Peppered Goat Meat</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#4,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/pfish.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Peppered Fish</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#2,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/pmeat.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Peppered Beef</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/pturk.jpeg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Peppered Chicken/Turkey</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#4,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/chickchips.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Chicken/Turkey w/ Chips</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#6,500.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/nkwobi.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Nkwobi (Goatleg/Cowleg)</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#3,000.00</h6>
												</p>
											</div>
										</div>
										<div class="col-3 col-sm-3 col-lg-1">
											<img src="/img/vchick.jpg" class="img-fluid mt-3" alt="Card title"
												style="width: 100px; border-radius: 100px;" />
										</div>
										<div class="col-9 col-sm-9 col-lg-5">
											<div class="card-body text-start">
												<h5 class="card-title">Vegetable Full Chicken w/ Plantain or
													Yam</h5>
												<p class="card-text">
												<h6 class="fs-5 text-warning">#15,000.00</h6>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</main>
		</section>

	</main>
	<footer>
		<!-- place footer here -->
	</footer>
	<!-- Bootstrap JavaScript Libraries -->
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>

	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
		integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
		crossorigin="anonymous"></script>
</body>

</html>