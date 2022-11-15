@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lecture</div>

                <div class="card-body">
                   
                    <a href="/lecture/create" class="btn btn-primary">Tambah Data</a>
                    <hr/>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($lectures as $lecture)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$lecture->nidn}}</td>
                                <td>{{$lecture->nama}}</td>
                                <td>
                                    @if($lecture->status == 1)
                                        <span class="badge text-bg-success">Active</span>
                                    @else
                                        <span class="badge text-bg-danger">Non-active</span>
                                    @endif
                                </td>
                            </td>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
