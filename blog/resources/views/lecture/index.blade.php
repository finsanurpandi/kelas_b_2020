@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="lecture/create" class="btn btn-primary">TAMBAH DATA</a>
                    <hr/>
                    @foreach ($user->unreadNotifications as $notification)
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        User dengan email <strong> {{ $notification->data['email']}} </strong> sudah berhasil Login 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="markAsRead('{{ $notification->id }}');" aria-label="Close"></button>
                      </div>
                      {{-- {{ $notification->markAsRead() }} --}}
                    @endforeach
                    @if($lectures->isEmpty())
                        Tidak ada ada.
                    @else
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                                <th>PROGRAM STUDI</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($lectures as $lecture)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $lecture->nidn }}</td>
                                <td>{{ $lecture->nama }}</td>
                                <td>
                                    @if($lecture->status == 1)
                                        <span class="badge text-bg-success">AKTIF</span>
                                    @else
                                        <span class="badge text-bg-danger">TIDAK AKTIF</span>
                                    @endif
                                </td>
                                <td>{{ $lecture->department->name }}</td>
                                <td>
                                    <a href="/lecture/{{ $lecture->nidn }}/students" class="btn btn-warning btn-sm">STUDENT</a>
                                    <a href="/lecture/{{ $lecture->nidn }}/edit" class="btn btn-success btn-sm">EDIT</a>
                                    {!! Form::open(['url' => 'lecture/'.$lecture->nidn, 'method' => 'DELETE']) !!}
                                        {{ Form::button('HAPUS', ['class' => 'btn btn-danger btn-sm', 'onclick' => "deleteConfirmation('".$lecture->nama."')"]) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
