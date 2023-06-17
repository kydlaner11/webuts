@extends('layout.layout')
@section('title')
    Master Barang - Detail Barang
@endsection
@section('active')
    <li>
      <a href="{{route('barang.index')}}">
        <i class="nc-icon nc-bank"></i>
        <p>Data Barang</p>
      </a>
    </li>
    <li>
      <a href="{{route('barang.create')}}">
        <i class="nc-icon nc-diamond"></i>
        <p>Tambah Barang</p>
      </a>
    </li>
@endsection
@section('content')
    <div class="content">
      <div class="container mt-5">
        <h1 class="text-center mb-5">DETAIL BARANG</h1>
        <a href="{{route('barang.index')}}" class="btn btn-primary mb-3">Data Barang</a>
        @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
        @endif
        <div class="card">
          <div class="card-body">
            <h5>Kode : {{$barang->kode}}</h5>
            <h5>Nama : {{$barang->nama}}</h5>
            <h5>Harga : {{$barang->harga}}</h5>
            <h5>Deskripsi : {{$barang->deskripsi}}</h5>
            <h5>Satuan : {{$barang->Satuan->satnama}}</h5>
  
          </div>
        </div>
      </div>  
    </div>

@endsection