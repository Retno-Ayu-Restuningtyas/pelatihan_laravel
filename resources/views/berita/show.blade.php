@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <a href="{!! route('berita.create') !!}" class="btn btn-info">Buat Data</a>
        </div>
        <div class="card-body">
       
    <div class="body m-10">
        <div class="form-group">
        {!! Form::label('Judul', 'Judul'); !!}
        {!! Form::label('judul', $berita->judul, ['class' => 'form-control','placeholder'=>'judul berita']); !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('created_at', 'Waktu Tambah'); !!}
        {!! Form::label('isi', $berita->created_at->format('d/m/Y H:i:s'), ['class' => 'form-control']); !!}

    </div>
    <div class="form-group">
        {!! Form::label('updated_at', 'Waktu Ubah'); !!}
        {!! Form::label('isi',$berita->updated_at->format('d/m/Y H:i:s'), ['class' => 'form-control']); !!}

    </div>
  
    <a href="{!! route('berita.index') !!}" class="btn btn-warning">Kembali</a>
 
        </div>
    </div>
</div>
 
@endsection