@extends('backend.layouts.auth')
@section('title','Log In')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 py-5 mt-3">
            <div class="card bg-secondary border-0 mb-0">    
                <div class="card-body px-5">
                    <img src="{{asset('backend/img/user.png')}}" class="d-block mx-auto" alt="" width="100px">
                    <div class="text-center text-muted mb-4">
                        <strong>Sign In</strong>
                    </div>
                    <form role="form" action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" name="email" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" name="password" placeholder="Password" type="password">
                            </div>
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
