@extends('layout.template')

@section('title', 'Order Form')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Order Form</h2>

    <form action="/order/store" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="id_pelanggan" class="form-label">ID Pelanggan:</label>
            <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" value="{{ old('id_pelanggan') }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}" required>
        </div>

        <div class="mb-3">
            <label for="menu_makanan" class="form-label">Menu Makanan:</label>
            <select name="menu_makanan" id="menu_makanan" class="form-select" required>
                <option value="" disabled selected>Select Menu Makanan</option>
                @foreach ($menus as $menu)
                    <option value="{{ $menu->id_makanan }}" {{ old('menu_makanan') == $menu->id_makanan ? 'selected' : '' }}>
                        {{ $menu->nama_makanan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="menu_minuman" class="form-label">Menu Minuman:</label>
            <select name="menu_minuman" id="menu_minuman" class="form-select" required>
                <option value="" disabled selected>Select Menu Minuman</option>
                @foreach ($drinks as $drink)
                    <option value="{{ $drink->id_minuman }}" {{ old('menu_minuman') == $drink->id_minuman ? 'selected' : '' }}>
                        {{ $drink->nama_minuman }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Pesan</button>
        </div>
    </form>

    <!-- Navigasi "Order Here" diluar form -->
    <div class="mb-3">
        <a class="nav-link bi bi-cart {{ request()->is('order*') ? 'active' : '' }}" href="/orders">
            Lihat pesanan saya
        </a>
    </div>
@endsection
