@extends('layout.template')

@section('title', 'Pesanan Anda')

@section('content')

<h1>Data Master Movie</h1>
<a href="/order/form" class="btn btn-secondary">Tambah Orderan Anda</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Nama Makanan</th>
        <th scope="col">Nama Minuman</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $order->nama_pelanggan }}</td>
          <td>{{ $order->menu ? $order->menu->nama_makanan : 'N/A' }}</td>
          <td>{{ $order->drink ? $order->drink->nama_minuman : 'N/A' }}</td>
      </tr>
  @endforeach
    </tbody>
  </table>
@endsection