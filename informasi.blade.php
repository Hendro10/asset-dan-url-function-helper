@extends('layout.master')
@section('title','Informasi Data Barang')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Informasi Data Barang {{$data[0]}}, Nama Barang {{$data[1]}}</h1>
    </div>
@endsection