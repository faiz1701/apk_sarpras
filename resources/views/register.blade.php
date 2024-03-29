@extends('layout.main2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card my-5">
                
                <form class="card-body cardbody-color p-lg-5" action="{{route('postregister')}}" method="POST">
                    {{ csrf_field() }}
                    <h1 class="text-center">Register Your Account</h1>
                    <div class="text-center">
                        <img src="/assets/img/logo-tb-nobg.png"
                            class="img-fluid my-3" width="200px"
                            alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="Username" aria-describedby="emailHelp"
                            placeholder="User Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="Gmail" aria-describedby="emailHelp"
                            placeholder="Gmail">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="password">
                        <a href="" class="text-dark">
                        </a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-color px-5 mb-5 w-100 ">Login</button>
                    </div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Have an account? <a href="{{route('login')}}" class="text-dark fw-bold"> <u>Login</u></a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
