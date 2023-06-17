@extends('layout.layout')
@section('title')
    Master Barang - Data Barang
@endsection
@section('active')
    <li class="active">
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
@section('navbarbrand')
    Data Barang
@endsection
@section('content')
  <div class="content"> 
    <div class="container mt-5">
      <h1 class="text-center mb-5">MASTER BARANG</h1>
      <a href="{{route('barang.create')}}" class="btn btn-primary mb-3">
        Tambah Barang
      </a>
      @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      @endif
      <div class="card">
        <table class="table">
          <thead>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Satuan</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($barang as $no => $hasil)
              <tr>
                <th>{{$no+1}}</th>
                <td>{{$hasil->kode}}</td>
                <td>{{$hasil->nama}}</td>
                <td>{{$hasil->harga}}</td>
                <td>{{$hasil->deskripsi}}</td>
                <td>{{$hasil->Satuan->satnama}}</td>
                <td>
                  <form action="{{route('barang.destroy', $hasil->id)}}" method="post" class="card">
                    @csrf
                    @method('delete')
                    <a href="{{ route ('barang.show', $hasil->id )}}" class="btn btn-warning btn-sm">View</a>
                    <a href="{{ route ('barang.edit', $hasil->id )}}" class="btn btn-success btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>  
@endsection