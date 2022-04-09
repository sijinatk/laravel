<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>User Registration</title>
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
                        <div class="row m0 main-row">
                            <h4 class="title"></h4>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#Masters" role="tab" aria-controls="pills-flamingo" aria-selected="true">User Registration</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                             
                                <div class="tab-pane active" id="Masters" role="tabpanel" aria-labelledby="flamingo-tab">
                                    <form class="add-forma" id="add-form-ida" name="add-form-ida" action="{{ route('store-registration') }}" method="post" enctype="multipart/form-data" >
                                         @csrf
                                @method('POST')
                                    <div class="row">
                                            <div class="col-md-8 pl0">
                                                <div class="row">
                                                    @foreach($form_setups as $form_setup)
                                                    <div class="col-md-6 pl0">
                                                        <label>{{ $form_setup->label }}</label>
                                                        @if($form_setup->type=="text")
                                                        <input type="text" name="{{ $form_setup->name }}" id="{{ $form_setup->input_id }}"  >
                                                        @elseif($form_setup->type=="selectbox")
                                                        <select name="{{ $form_setup->name }}" id="{{ $form_setup->input_id }}"  class="col-md-6 pl0">
                                                                <option value="">Select {{ $form_setup->label }}</option>
                                                        </select>
                                                        @elseif($form_setup->type=="textarea")
                                                         <textarea rows="3" id="{{ $form_setup->input_id }}" name="{{ $form_setup->name }}" ></textarea>
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row mt43">
                                            <div class="col-md-12">
                                                <center>
                                                   <button type="submit" class="btn submit-btn">Submit</button>
                                                </center>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>{{-- Jquery --}}
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