<!-- Navigation -->
<section class="menu cid-rGsqBtahAB" once="menu" id="menu1-1a">




	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<a href="index.html">
						<img src="{{ asset('img/main_logo.png') }}" alt="kuipedia-logo"
							title="" style="height: 3rem;">
					</a>
				</span>
				<span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5"
						href="index.html">Kuipedia</a></span>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="{{ url('/') }}" aria-expanded="false">
							ទំព័រដើម</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link link text-black display-4" href="{{ url('/about') }}" aria-expanded="false">អំពី</a>
					</li> -->
					<li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4"
							href="#!" aria-expanded="false" data-toggle="dropdown-submenu">ប្រភេទ</a>
						<div class="dropdown-menu"><a class="text-black dropdown-item display-4"
								href="boardingdemo.html" aria-expanded="false">Menu One</a><a
								class="text-black dropdown-item display-4" href="shopdemo.html"
								aria-expanded="false">Menu Two</a><a
								class="text-black dropdown-item display-4" href="schooldemo.html"
								aria-expanded="false">Menu Three</a></div>
					</li>
					<li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4"
							href="#!" data-toggle="dropdown-submenu" aria-expanded="false">
							បកប្រែ</a>
						<div class="dropdown-menu"><a class="text-black dropdown-item display-4"
								href="#!"></a><a
								class="text-black dropdown-item display-4" href="#!"
								aria-expanded="false">ភាសាខ្មែរ</a><a
								class="text-black dropdown-item display-4" href="#!"
								aria-expanded="false">English</a>
					</li>
				</ul>

				<div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4"
						href="{{ url('/contact') }}">ទំនាក់ទំនង</a></div>
			</div>
		</div>
	</nav>
</section>
