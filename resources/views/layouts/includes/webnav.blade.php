<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}">
			  <img src="images/sda logo.png" alt="" style="max-height:4rem">
			  <span class="text-primary font-weight-bold">CUTAA</span>
		  </a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="{{ route('pages.gallery') }}" class="nav-link"><span>Gallery</span></a></li>
	          <li class="nav-item"><a href="{{ route('pages.sermons') }}" class="nav-link"><span>Sermons</span></a></li>
	          <li class="nav-item"><a href="{{ route('pages.events') }}" class="nav-link"><span>Events</span></a></li>
	          <li class="nav-item"><a href="{{ route('pages.blog') }}" class="nav-link"><span>Blog</span></a></li>
			  <li class="nav-item"><a href="{{ route('pages.contact') }}" class="nav-link"><span>Contact</span></a></li>
			  <li class="nav-item"><a href="/member/create" class="btn btn-primary btn-md"><span>Join Our Community</span></a></li>
	        </ul>
	      </div>
	    </div>
	</nav>
