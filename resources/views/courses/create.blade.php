@extends('adminlte::page')

@section('title', 'Tambah Kursus')

@section('content_header')
    <h1>Tambah Kursus</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md my-3">
            <h4>Daftar kursus yang tersedia</h4>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md">
            <x-adminlte-card title="Form Kursus" theme="info">
                <form action="{{ route('course.store') }}" method="POST">
                    @csrf
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control mb-3" required>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control mb-3" id="deskripsi" rows="2" required></textarea>
                    <label for="durasi">Durasi</label>
                    <input type="text" name="durasi" id="durasi" class="form-control html-duration-picker mb-3" data-hide-seconds required>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </x-adminlte-card>
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