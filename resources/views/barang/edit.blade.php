@extends('layout.layout')
@section('title')
    Master Barang - Edit Barang
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
      <div class="content">
        <div class="container mt-5">
          <h1 class="text-center mb-5">EDIT BARANG</h1>
          <a href="{{route('barang.index')}}" class="btn btn-primary mb-3">Data Barang</a>
          @if(session('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
          @endif
          <div class="card">
            <div class="card-body">
              <form action="{{ route ('barang.update', $barang->id )}}" method="POST">
                @csrf
                @method('patch')
                <div class="mb-3">
                  <label for="satuan" class="form-label">Kode Barang</label>
                  <input type="text" class="form-control" name="kode" value="{{$barang->kode}}" id="kode">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" name="nama" value="{{$barang->nama}}" id="nama">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="text" class="form-control" name="harga" value="{{$barang->harga}}" id="harga">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea type="text" name="deskripsi" id="deskripsi" cols="30" rows="4" class="form-control">{{$barang->deskripsi}}</textarea>
                </div>
                <div class="mb-3">
                  <label for="satuan_id" class="form-label">Satuan</label>
                  <select name="satuan_id" id="satuan_id" class="form-control" >
                    @foreach ($satuanbarang as $stn)
                       <option value="{{$stn->id}}" @selected($stn->id == $barang->satuan_id)>{{$stn->satnama}}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form>
            </div>
          </div>
        </div> 
      </div>  
    </div>
@endsection