@extends('layouts.app', ['page' => __('Login'), 'pageSlug' => 'member-login'])

@section('content')
    <div class="col-lg-10 col-xl-8 mx-auto">
        <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex" style="background: purple">
                <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form class="form-signin">
                    <div class="form-label-group">
                        <input type="email" id="email" name="emaim" class="form-control"
                            placeholder="Email address" required>
                        <label for="email">Email address</label>
                    </div>
                
                    <div class="form-label-group">
                        <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password"
                            required>
                        <label for="inputConfirmPassword">Confirm password</label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                    <a class="d-block text-center mt-2 small" href="#">Password</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
