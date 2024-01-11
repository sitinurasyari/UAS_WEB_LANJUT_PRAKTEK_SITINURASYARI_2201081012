@extends('layout.template')

@section('title', 'Homepage')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>    
@endif

<h1>MENU RESTORAN SITI</h1>
<div class="row">
    @foreach ($menus as $menu)
    <div class="col-3">
        <div class="card mb-3" style="max-width: 540px;">
          <img src="/images/{{ $menu['foto_makanan'] }}" class="img-fluid card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $menu['nama_makanan'] }}</h5>
            <p class="card-text">{{ $menu['keterangan'] }}</p>
            <p class="card-text">Harga: Rp. {{ $menu['harga'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
</div>
@endsection