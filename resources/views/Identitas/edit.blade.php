@extends('layout')

@section('content')
<div class="card uper">
    <div class="card-header">
        Add Share
    </div>
        <div class="card-body" style="margin-top:10px">
        
        @foreach ($data as $datas)
            <form action="{{ route('identitas.update', $datas->nim) }}" method="POST">
            
                <div class="form-group">
                    @csrf 
                    {{ method_field('PUT') }}
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$datas->nama}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{$datas->alamat}}">
                </div>
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" id="nim" class="form-control"value="{{$datas->nim}}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" value="Simpan">
                </div>
            </form>
            @endforeach
        </div>
    </div>
    
@endsection