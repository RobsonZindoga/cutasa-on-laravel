@extends('layouts.app', ['page' => __('Register'), 'pageSlug' => 'register'])

@section('content')
    <div class="col-lg-10 col-xl-10 mx-auto">
        <div class="card card-signin flex-row ">
            <div class="card-img-left d-none d-md-flex" style="background: rgb(28, 0, 128)">
                <img src="{{ url('images/asa.png') }}" alt="" style="max-height: 5rem;">
            </div>
            <div class="card-body">
                <h2 class="card-title text-center">Register for CUTAA Membership</h2>
                <form class="form-signin" method="post" action="{{route('member.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <label for="inputname">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Full Name" required autofocus>
                            </div>

                            <div class="form-label-group">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Email address" required>
                            </div>
                            <div class="form-label-group">
                                <label for="contact">Contact Details</label>
                                <input type="text" id="contact" name="contact" class="form-control"
                                    placeholder="Contact Details" required autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-label-group">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" id="occupation" name="occupation" class="form-control"
                                        placeholder="Occupation" required autofocus>
                                </div>
                                <div class="form-label-group">
                                    <label for="graduation">Graduation</label>
                                    <input type="year" id="graduation" name="graduation" class="form-control"
                                        placeholder="Year of Graduation" required autofocus>
                                </div>
                                <div class="form-label-group">
                                    <label for="contact">Field of Study</label>
                                    <input type="text" id="field_of_study" name="field_of_study" class="form-control"
                                        placeholder="Field of Study" required autofocus>
                                </div>
                            </div>
                    </div>
                    <hr>
                    <div class="form-label-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
                    </div>

                    <div class="form-label-group">
                        <label for="">Input Image</label>
                        <input type="file" name="image_url" id="image_url" class="form-control">
                    </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                    <a class="d-block text-center mt-2 small" href="#">Sign In</a>
                </form>
            </div>
        </div>
    </div>

@endsection
