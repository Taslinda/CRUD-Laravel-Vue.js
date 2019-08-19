@extends('layout')

@section('content')
<div class="card uper">
    <div class="card-header">
        Add Share
    </div>
        <div class="card-body" style="margin-top:10px">
            <form action="{{ route('identitas.store') }}" method="POST">

                <div class="form-group">
                    @csrf 
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" id="nim" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
    
@endsection