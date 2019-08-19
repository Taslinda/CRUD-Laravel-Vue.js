@extends('layout')

@section('content')
<div class="card uper">
    <div class="card-header">
        Identitas List
    </div>
    <div class="card-body" style="margin-top:10px">
        <a href="{{ route('identitas.create') }}" class="btn-primary btn">Create</a>
            
        <table class="table table-responsive" style="margin-top:15px">

            <tr>
                <th>id</th>
                <th>nama</th>
                <th>alamat</th>
                <th>nim</th>
                <th>Action</th>
            </tr>
            
            @foreach ($data as $key => $value)
            <tr>
                <td>{{ $value->id}}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->nim }}</td>
                <td>
                    <form action="{{ route('identitas.destroy', $value->nim) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ route('identitas.edit', $value->nim)}}" class=" btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                    </form>      
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</div>
    
@endsection 






