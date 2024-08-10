@extends('adminlte::page')

@section('title', 'Detail Kursus')

@section('content_header')
    <h1>Detail Kursus</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md my-3">
            <a href="{{ route('course.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">Edit Kursus</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <x-adminlte-callout theme="info" title="{{ $course->judul }}">
                <h6>{{ $course->deskripsi }}</h6>
            </x-adminlte-callout>
        </div>
        <div class="col-md">
            <x-adminlte-card title="Materi" theme="info">
                {{-- <h5>Klik untuk mengedit materi</h5> --}}
                <a href="{{ route('material.create') }}" class="btn btn-success mb-3">Tambah Materi</a>

                @foreach ($course->materials as $item)
                    <div class="row">
                        <div class="col-md">
                            <x-adminlte-card theme="info" theme-mode="outline">
                                <h5># Materi 1</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, consectetur.</p>
                                <span class="d-block"><a href="">Embed Materi</a></span>

                                <a href="" class="btn btn-sm btn-warning mt-3">Edit Materi</a>
                            </x-adminlte-card>
                        </div>
                    </div>
                @endforeach

            </x-adminlte-card>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop