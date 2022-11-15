@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Dosen</div>

                <div class="card-body">
                    
                    {!! Form::open(['url' => 'lecture/store']) !!}
                        <div class="mb-3">
                            {{ Form::label('nidn', 'NIDN') }} 
                            {{ Form::text('nidn', null, ['class' => "form-control", 'placeholder' => 'NIDN', 'required' => 'true']) }}
                        </div>
                        <div class="mb-3">
                            {{ Form::label('nama', 'Nama Dosen') }} 
                            {{ Form::text('nama', null, ['class' => "form-control", 'placeholder' => 'Nama Dosen']) }}
                        </div>
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
