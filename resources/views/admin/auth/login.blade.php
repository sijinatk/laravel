<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Laravel Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- App favicon --}}
        {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}
        <link rel="shortcut icon" href="{{ asset('fav.png') }}">

        {{-- App css --}}
        <link href="{{ asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <style>
            .error{
                color: #f34943;
                font-size: 10pt;
            }

            input.error{
            border: solid 1px #ff0000 !important;
            }
            .input-validation-error {
            border: solid 2px #ff0000 !important;
            }
        </style>

    </head>


    <body>

       
        
        <div class="account-pages mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <form action="{{ route('admin.login.admin-login') }}" method="post" class="pt-2" id="signInForm">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label >User Name</label>
                                        <input class="form-control" type="text" name="email"  placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                       
                                        <label >Password</label>
                                        <input class="form-control" type="password" name="password"  placeholder="Enter your password">
                                    </div>

                                    @if($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                        {{ $errors->first() }}
                                        </div>
                                    @endif

                                    

                                    
                                    <div class="form-group mb-0 text-center">
                                        <button style="    min-width: 160px; height: 50px; border-radius: 25px;    border: navajowhite; background: #bf1e2e;" class="btn btn-success " type="submit"> Log In </button>
                                    </div>

                                </form>

                             
                                {{-- end row --}}

                            </div> {{-- end card-body --}}
                        </div>
                        {{-- end card --}}

                    </div> {{-- end col --}}
                </div>
                {{-- end row --}}
            </div>
            {{-- end container --}}
        </div>
        {{-- end page --}}

        {{-- Jquery --}}
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

        {{-- Vendor js --}}
        <script src="{{ asset('admin_assets/js/vendor.min.js') }}"></script>

        {{-- App js --}}
        <script src="{{ asset('admin_assets/js/script.js') }}"></script>

        {{-- Js validation --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

        {{-- Custom js for login page --}}
        <script src="{{ asset('admin_assets/js/app/auth/login.js') }}"></script>
        
        
    </body>
</html>