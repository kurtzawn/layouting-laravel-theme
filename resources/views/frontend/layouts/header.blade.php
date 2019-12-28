<!-- Page Preloder -->
<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="{{route('home')}}" class="site-logo">
			<img src="{{asset('frontend/img/logo.png')}}" alt="">
		</a>
		<div class="header-right">
			<a href="#" class="hr-btn">Help</a>
			<span>|</span>
			<div class="user-panel">
				<a href="" class="login">Login</a>
				<a href="" class="register">Create an account</a>
			</div> 
		</div>
		<ul class="main-menu">
			<li><a href="{{route('home')}}">Home</a></li>
			{{-- <li><a href="#">About</a></li> --}}
			<li><a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="{{route('category')}}">Category</a></li>
					<li><a href="{{route('playlist')}}">Playlist</a></li>
					<li><a href="{{route('artist')}}">Artist</a></li>
					<li><a href="{{route('news')}}">Blog</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
				</ul>
			</li>
			<li><a href="{{route('news')}}">News</a></li>
			<li><a href="{{route('contact')}}">Contact</a></li>
		</ul>
	</header>
	<!-- Header section end -->