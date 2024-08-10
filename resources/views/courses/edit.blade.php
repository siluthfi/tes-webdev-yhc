@extends('adminlte::page')

@section('title', "Edit Kursus - $course->judul")

@section('content_header')
    <h1>Edit Kursus - {{ $course->judul }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md">
            <x-adminlte-card title="Form Kursus" theme="info">
                <form action="{{ route('course.update', $course->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control mb-3" required value="{{ $course->judul }}">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control mb-3" id="deskripsi" rows="3" required>{{ $course->deskripsi }}</textarea>
                    <label for="durasi">Durasi</label>
                    <input type="text" name="durasi" id="durasi" class="form-control html-duration-picker mb-3" data-hide-seconds required value="{{ $course->durasi }}">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </x-adminlte-card>
        </div>  
    </div>

    <div class="row">
        <div class="col-md">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/html-duration-picker@latest/dist/html-duration-picker.min.js"></script>
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop