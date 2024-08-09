@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3">
            <x-adminlte-card title="Total Kursus" icon="fas fa-fw fa-chalkboard" theme="lightblue" theme-mode="outline" header-class="border-info">
                <h5>{{ $totalcourse }}</h5>
            </x-adminlte-card>
        </div>
        <div class="col-md-3">
            <x-adminlte-card title="Total Materi" icon="fas fa-fw fa-sticky-note" theme="primary" theme-mode="outline" header-class="border-info">
                <h5>{{ $totalmateri }}</h5>
            </x-adminlte-card>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop