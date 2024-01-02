@extends('layouts.main')
@section('content')
    <section class="p-4">
        <div class="container p-4">
            <div class="row p-4">
                <div class="col-md-8 col-lg-5 mx-auto">
                    <div class="card shadow shadow-lg">
                        <div class="card-body">
                            <h3 class="display-3 text-center">
                                {{__('Registration')}}
                            </h3>
                            <hr>
                            <form action="{{route('registration')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">{{__('Name')}}</label>
                                    <input class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" type="text" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                        <p class="invalid-feedback">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
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
                                    <label for="password_confirmation">{{__('Password Confirmation')}}</label>
                                    <input class="form-control {{$errors->has('password_confirmation')? 'is-invalid':''}}" name="password_confirmation" type="password" value="">
                                    @if($errors->has('password_confirmation'))
                                        <p class="invalid-feedback">{{$errors->first('password_confirmation')}}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input {{$errors->has('terms')? 'is-invalid':''}}" value="1" id="terms" name="terms">
                                        <label for="terms" class="form-check-label">{{__('I accept the data usage policy')}}</label>
                                        @if($errors->has('terms'))
                                        <p class="invalid-feedback">{{$errors->first('terms')}}</p>
                                    @endif
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        {{__('Registration')}}
                                    </button>
                                </div>
                                <hr>
                                <div class="d-grid text-center">
                                    <a href="{{route('login')}}" class="btn btn-link display-1">
                                        {{__('Login')}}
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