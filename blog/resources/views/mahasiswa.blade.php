@extends('master')

@section('title', 'Mahasiswa')

@section('content')
    Hello, dari halaman Mahasiswa

    @php print_r($cars) @endphp
    <br/>
    <br/>
    <x-alert theme="danger" closeable='true' caption="ini adalah Alert"/>
       
@stop

@section('js')
    <script>
        console.log('hello')
    </script>
@stop