@extends('layouts.app', ['page' => __('Register'), 'pageSlug' => 'register'])

@section('content')
    <div class="col-lg-10 col-xl-10 mx-auto">
        <div class="card card-signin flex-row ">
            <div class="card-img-left d-none d-md-flex" style="background: purple">
                <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
                <h2 class="card-title text-center">Register</h2>
            <form class="form-signin" method="post" action="{{route('member.store')}}">
                @csrf
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="inputname" name="name" class="form-control"
                                    placeholder="Full Name" required autofocus>
                                <label for="inputname">Full Name</label>
                            </div>

                            <div class="form-label-group">
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Email address" required>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-label-group">
                                <input type="text" id="contact" name="contact" class="form-control"
                                    placeholder="Contact Details" required autofocus>
                                <label for="contact">Contact Details</label>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="occupation" name="occupation" class="form-control"
                                        placeholder="Occupation" required autofocus>
                                    <label for="occupation">Occupation</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="year" id="graduation" name="graduation" class="form-control"
                                        placeholder="Year of Graduation" required autofocus>
                                    <label for="graduation">Graduation</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="contact" name="field_of_study" class="form-control"
                                        placeholder="Field of Study" required autofocus>
                                    <label for="contact">Field of Study</label>
                                </div>
                            </div>
                    </div>

                    <hr>

                    <div class="form-label-group">
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                        <label for="address">Address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                            required>
                        <label for="inputPassword">Password</label>
                    </div>
                    <div class="form-label-group">
                        <input type="password" id="inpuConfirmtPassword" class="form-control" placeholder="Confirm Password"
                            required>
                        <label for="inputConfirmPassword">Confirm password</label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                    <a class="d-block text-center mt-2 small" href="#">Sign In</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
