@extends('layouts.main')
@section('content')
    <section class="p-4">
        <div class="container p-4">
            <div class="row p-4">
                <div class="col-md-8 col-lg-4 mx-auto">
                    <div class="card shadow shadow-lg">
                        <div class="card-body">
                            <h3 class="display-3 text-center">
                                {{__('Login')}}
                            </h3>
                            <hr>
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email">{{__('Email')}}</label>
                                    <input class="form-control {{$errors->has('email')? 'is-invalid':''}}" name="email" type="email" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                        <p class="invalid-feedback">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{__('Password')}}</label>
                                    <input class="form-control {{$errors->has('password')? 'is-invalid':''}}" name="password" type="password" value="">
                                    @if($errors->has('password'))
                                        <p class="invalid-feedback">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="1" id="remember" name="remember">
                                        <label for="terms" class="form-check-label">{{__('Remember me')}}</label>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        {{__('Login')}}
                                    </button>
                                </div>
                                <hr>
                                <div class="d-grid text-center">
                                    <a href="{{route('registration')}}" class="btn btn-link display-1">
                                        {{__('Registration')}}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection