<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
                        <title>@yield('title')</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('barang')}}">Nama Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('databarang')}}">Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gambar')}}">Gallery</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('info',['databarang' => 'STOCK','namabarang' => 'MonitorASUS'])}}">Info</a>
                </li>
            </ul>
        </div>
    </nav>
    @section('content')
        <div class="alert alert-primary text-center"> Sistem Informasi Barang </div>
    @show
        <footer class="bg-dark py-4 text-white mt-4">
            <div class="container">
                <a href="{{ url('informasi/STOCK/MonitorASUS') }}">Nama Barang MonitorASUS</a> |
                Sistem Informasi Barang | Copyright © {{ date("d-m-Y") }} Dunia Inventory
            </div>
        </footer>
    </body>
</html> 