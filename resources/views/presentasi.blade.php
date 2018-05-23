@extends ('master2')

@section ('header')
 <header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.html">Home</a>
								</li>

								<li>
									<a href="menu.html">Menu</a>
								</li>

								<li>
									<a href="reservation.html">Reservation</a>
								</li>

								<li>
									<a href="gallery.html">Gallery</a>
								</li>

								<li>
									<a href="about.html">About</a>
								</li>

								<li>
									<a href="blog.html">Blog</a>
								</li>

								<li>
									<a href="contact.html">Contact</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>
@stop

@section ('jumbotron')
 <h2>coba jumbotron</h2>
@stop

@section ('section1')
 <h1>tabel</h1>
 <table class="table table-bordered table-hover table-striped">
 	<thead>
 		<tr class="table bg-warning">
 			<th>Nama</th>
 			<th>NRP</th>
 		</tr>
 	</thead>
 	<tbody>
 		<tr>
 			<td>hasgha</td>
 			<td>12345</td>
 		</tr>
 		<tr>
 			<td>haggha</td>
 			<td>12345</td>
 		</tr>
 	</tbody>
 </table>
@stop

@section ('section2')
 <h1>button</h1>
 <button type="button" class="btn btn-sm btn-danger">Button</button>

 <h1>form</h1>
 <div class="form">
 	<label>Nama :</label>
 	<input type="text" class="form-control">
 	<button type="submit" class="btn btn-lg btn-warning">submit</button>
 </div>
@stop