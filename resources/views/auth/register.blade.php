@extends('layouts.app')

@section('content')



<body class="sign-in" oncontextmenu="return false;">
    <div class="wrapper">

        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                            <h1 class="font-weight-bold text-capitalize" style="font-family: 'Gochi Hand', cursive; font-size:50px">Techvisor</h1>
                                    {{-- <img src="{{ url('design/style') }}/images/cm-logo.png" alt=""> --}}
                                    <p>Workwise, is a professional consulting web application specially in IT fields
                                        as it provides a rich community of professionals that can solve users’ problems
                                        or consulting them in many different IT fields</p>
                                </div>
                                <!--cm-logo end-->
                                <img src="{{ url('design/style') }}/images/cm-main-img.png" alt="">
                            </div>
                            <!--cmp-info end-->
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <div class="login-sec">
                                    <div class="card-header sign_in_sec current" id="tab-2">
                                        <h3>{{ __('Register') }}</h3>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group row mr-5">
                                                    <label for="name"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus>

                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row mr-5">
                                                    <label for="email"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                                    <div class="col-md-8">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email">

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row mr-5">
                                                    <label for="password"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row mr-5">
                                                    <label for="password-confirm"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="password-confirm" type="password"
                                                            class="form-control" name="password_confirmation" required
                                                            autocomplete="new-password">
                                                    </div>
                                                </div>
                                                <div class="form-group row mr-5">
                                                    <label for="password-confirm"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Register As') }}</label>

                                                    <div class="col-md-8">
                                                        <select class="custom-select" name="role" id="role-option">
                                                            <option value="1">User</option>
                                                            <option value="2">Professional</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mr-5" id="cat-section">
                                                    <label for="password-confirm"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>

                                                    <div class="col-md-8">
                                                        <select class="custom-select" name="categories[]" multiple>
                                                            @foreach($categories as $cat)
                                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary"
                                                            style="color: #ffffff;font-size: 16px;background-color: #e44d3a;padding: 12px 27px;border: 0;font-weight: 500;">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--login-sec end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--signin-popup end-->
    {{--    <script language="JavaScript">--}}
    {{--const  role=document.getElementById('role-option');--}}
    {{--const cat =document.getElementById('cat-section');--}}
    {{--if(role.value=='1'){--}}
    {{--    cat.style.visibility='hidden';--}}
    {{--}--}}
    {{--else if (role.value=='2'){--}}
    {{--    cat.style.visibility='visible';--}}
    {{--}--}}
    {{--    </script>--}}
    @endsection
