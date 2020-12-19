@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <a href="{!! route('kecamatan.create') !!}" class="btn btn-info">Buat Data</a>
        </div>
        <div class="card-body">
       
    <div class="body m-10">
        <div class="form-group">
        {!! Form::label('nama', 'Nama'); !!}
        {!! Form::label('nama', $kecamatan->nama, ['class' => 'form-control']); !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('created_at', 'Waktu Tambah'); !!}
        {!! Form::label('created_at', $kecamatan->created_at->format('d/m/Y H:i:s'), ['class' => 'form-control']); !!}

    </div>
    <div class="form-group">
        {!! Form::label('updated_at', 'Waktu Ubah'); !!}
        {!! Form::label('updated_at',$kecamatan->updated_at->format('d/m/Y H:i:s'), ['class' => 'form-control']); !!}

    </div>
  
    <a href="{!! route('kecamatan.index') !!}" class="btn btn-warning">Kembali</a>
 
        </div>
    </div>
</div>
 
@endsection