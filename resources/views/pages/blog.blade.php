@extends('layouts.webpage.index', ['pageSlug' => 'events'])

@section('content')
    <section class="ftco-intro img" id="events-section" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-event" id="events-section">
        <div class="container-fluid px-4 ftco-to-top">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-5">Uplifting Articles</h2>
                    <p class="text-white">God`s claim is to take precedence of any other claim and must be discharged first. Then the poor
					and the needy are to be cared for. <span class="text-success white-text"> The youth`s Instructor. August 26 1896.</span>
					{WM 277.3}
				</p>
                </div>
            </div>
            {{--  --}}
            <div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
				<a href="https://spiked.co.zw/glytime-foods-penetrates-the-regional-market/" class="block-20" style="background-image: url('images/glytime.jpg');">
				</a>
				<div class="text float-right d-block">
					<div class="d-flex align-items-center pt-2 mb-4 topp">
						<div class="one mr-2">
							<span class="day">29</span>
						</div>
						<div class="two">
							<span class="yr">2020</span>
							<span class="mos">July</span>
						</div>
					</div>
					<h3 class="heading"><a href="https://spiked.co.zw/glytime-foods-penetrates-the-regional-market/">Glytime Company founded by Alumni Member</a></h3>
					<p>
						CUT ASA Alumni is made up of intreprenuers who are making it in the society. Glytime is now suplying all over Zimbabwe and Botswana
					</p>
					<div class="d-flex align-items-center mt-4 meta">
						<p class="mb-0"><a href="https://spiked.co.zw/glytime-foods-penetrates-the-regional-market/" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
						<p class="ml-auto mb-0">
							<a href="#" class="mr-2">Lesly Marange</a>
							<a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
						</p>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
				<a href="single.html" class="block-20" style="background-image: url('images/doc.jpeg');">
				</a>
				<div class="text float-right d-block">
					<div class="d-flex align-items-center pt-2 mb-4 topp">
						<div class="one mr-2">
							<span class="day">09</span>
						</div>
						<div class="two">
							<span class="yr">2020</span>
							<span class="mos">August</span>
						</div>
					</div>
					<h3 class="heading"><a href="single.html">Zoom Wedding for Rutendo and Tinotenda</a></h3>
					<p>ASA is a family which supports and encourages weddings between ASA members and non ASA members. Zoom Wedding in Lockdown</p>
					<div class="d-flex align-items-center mt-4 meta">
						<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
						<p class="ml-auto mb-0">
							<a href="#" class="mr-2">Admin</a>
							<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
						</p>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry">
				<a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
				</a>
				<div class="text float-right d-block">
					<div class="d-flex align-items-center pt-2 mb-4 topp">
						<div class="one mr-2">
							<span class="day">04</span>
						</div>
						<div class="two">
							<span class="yr">2019</span>
							<span class="mos">June</span>
						</div>
					</div>
					<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<div class="d-flex align-items-center mt-4 meta">
						<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
						<p class="ml-auto mb-0">
							<a href="#" class="mr-2">Admin</a>
							<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
						</p>
					</div>
				</div>
				</div>
			</div>
			</div>
        </div>
    </section>

@endsection
