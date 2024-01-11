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
    @foreach ($drinks as $drink)
    <div class="col-3">
        <div class="card mb-3" style="max-width: 540px;">
              <img src="/images/{{ $drink['foto_minuman'] }}" class="img-fluid card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $drink['nama_minuman'] }}</h5>
                <p class="card-text">{{ $drink['keterangan'] }}</p>
                <p class="card-text">Harga: Rp. {{ $drink['harga'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
</div>
@endsection