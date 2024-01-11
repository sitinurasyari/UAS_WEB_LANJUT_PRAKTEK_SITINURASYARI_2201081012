@extends('layout.template')

@section('title', 'Homepage')

@section('content')

<div class="container-fluid bg-dark">

    <div class="row justify-content-end mt-3">
        
            <div class="container-fluid text-right p-3">
                @auth
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <form action="/logout" method="post">
                            @csrf
                            <li>
                                <button type="submit" class="dropdown-item">Logout</button>
                            </li>
                        </form>
                    </ul>
                </div>
                @else
                <a class="nav-link bg-secondary text-white text-center" href="/login"><i class="bi bi-person-lock"></i> Login</a>
                @endauth
            </div>
        </div>

   
    <div class="row justify-content-center">
        <div class="col-md-8 bg-dark text-white d-flex align-items-center justify-content-center" style="background-image: url('/images/home1.png'); background-size: cover; background-position: center; height: 500px;">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 bg-dark text-white" style="background-image: url('/images/restoran.jpg'); background-size: cover; background-position: center; height: 500px;">
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-8 bg-dark text-white d-flex align-items-center justify-content-center" style="background-image: url('/images/home2.png'); background-size: cover; background-position: center; height: 500px;">
        </div>
    </div>
</div>
</div>

@endsection
