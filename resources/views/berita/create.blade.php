@extends('layouts.app')
@section('content')
<div class="content">
        <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'berita.store']) !!}
        <div class="body m-10">
        <div class="form-group">
        {!! Form::label('Judul', 'Judul'); !!}
        {!! Form::text('judul','', ['class' => 'form-control','placeholder'=>'judul berita']); !!}
        </div>
         </div>
         <div class="form-group">
    {!! Form::label('isi', 'isi'); !!}
    {!! Form::textarea('isi','', ['class' => 'form-control','placeholder'=>'isi berita']); !!}

    </div>
    <button class="btn-success">Simpan</button>
    <a href="{!! route('berita.index') !!}" class="btn btn-danger">Cancel</a>
    {!! Form::close() !!}
        </div>
    </div>
</div>
 
@endsection