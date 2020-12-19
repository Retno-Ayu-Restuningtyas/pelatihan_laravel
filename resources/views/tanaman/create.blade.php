@extends('layouts.app')
@section('content')
<div class="content">
        <div="class">
        <div class="card-body">
        {!! Form::open(['route' => 'tanaman.store']) !!}
        <div class="body m-10">
        <div class="form-group">
        {!! Form::label('nama', 'Nama'); !!}
        {!! Form::text('nama','', ['class' => 'form-control','placeholder'=>'nama']); !!}
        </div>
         </div>
    <button class="btn-success">Simpan</button>
    <a href="{!! route('tanaman.index') !!}" class="btn btn-danger">Cancel</a>
    {!! Form::close() !!}
        </div>
    </div>
</div>
 
@endsection