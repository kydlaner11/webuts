@extends('layout.layout')
@section('title')
    Master Barang - Tambah Barang
@endsection
@section('active')
    <li>
      <a href="{{route('barang.index')}}">
        <i class="nc-icon nc-bank"></i>
        <p>Data Barang</p>
      </a>
    </li>
    <li class="active">
      <a href="{{route('barang.create')}}">
        <i class="nc-icon nc-diamond"></i>
        <p>Tambah Barang</p>
      </a>
    </li>
@endsection
@section('navbarbrand')
    Tambah Barang
@endsection
@section('content')
  <div class="content">
    <div class="container mt-5">
      <h1 class="text-center mb-5">TAMBAH BARANG</h1>
      {{-- <a href="{{route('barang.index')}}" class="btn btn-primary mb-3">
        <i class="nc-icon nc-minimal-left"></i>
        Kembali
      </a> --}}
      @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div class="card">
        <div class="card-body">
          <form action="{{ route ('barang.store' )}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="satuan" class="form-label">Kode Barang</label>
              <input type="text" class="form-control" name="kode" id="kode" value="{{old('kode')}}" placeholder="Masukan Kode Barang">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama')}}" placeholder="Masukan Nama Barang">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control" name="harga" id="harga" value="{{old('harga')}}" placeholder="Masukan Harga Barang">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" cols="30" rows="4" class="form-control" placeholder="Masukan Deskripsi Barang">{{old('deskripsi')}}</textarea>
            </div>
            <div class="mb-3">
              <label for="satuan_id" class="form-label">Satuan</label>
              <select name="satuan_id" id="satuan_id" class="form-control">
                <option disabled value>Pilih Satuan</option>
                @foreach ($satuanbarang as $stn)
                   <option value="{{$stn->id}}">{{$stn->satnama}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-end">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection