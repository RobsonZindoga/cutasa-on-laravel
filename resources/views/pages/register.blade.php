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
                    <span class="subheading">Registration</span>
                    <h2 class="mb-5">Register for CUTAA Membership</h2>
                    @if ($message=Session::get('status'))
                    <div class="alert alert-success text-white" role="alert">{{ $message }}</div>

                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-lg-10 col-xl-10 mx-auto">
                    <div class="card card-signin flex-row ">
                        <div class="card-img-left d-none d-md-flex" style="background: rgb(213, 212, 219)">
                            <img src="{{ url('images/asa.png') }}" alt="" style="max-height: 5rem;">
                        </div>
                        <div class="card-body">
                            <form class="form-signin" method="post" action="{{route('member.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputname">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Full Name" required autofocus>
                                          @error('name')
                                          <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                          @enderror
                                        </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">Email address</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Email address" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact">Contact Details</label>
                                        <input type="text" id="contact" name="contact" class="form-control"
                                        placeholder="Contact Details" required autofocus>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="occupation">Current Occupation</label>
                                        <input type="text" id="occupation" name="occupation" class="form-control"
                                            placeholder="Occupation" required autofocus>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="graduation">Year of Graduation</label>
                                        <input type="year" id="graduation" name="graduation" class="form-control"
                                            placeholder="Year of Graduation" required autofocus>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact">Field of Study</label>
                                        <input type="text" id="field_of_study" name="field_of_study" class="form-control"
                                        placeholder="Field of Study" required autofocus>
                                    </div>
                                    <div class="form-label-group col-md-6">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="address" class="form-control" placeholder="Address" required></textarea>
                                    </div>
                                    <div class="form-label-group col-md-6">
                                        <label for="">Input Image</label>
                                        <input type="file" name="image_url" id="image_url" class="form-control">
                                    </div>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                                <a class="d-block text-center mt-2 small" href="{{ route('login') }}">Sign In</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

