@extends('adminlte::page')

@section('title', "Edit Materi - $material->judul")

@section('content_header')
    <h1>Edit Materi - {{ $material->judul }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md">
            <x-adminlte-card title="Form Materi" theme="info">
                <form action="{{ route('material.update', $material->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control mb-3" required value="{{ $material->judul }}">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control mb-3" id="deskripsi" rows="3" required>{{ $material->deskripsi }}</textarea>
                    <label for="link_embed">Link Embed</label>
                    <input type="text" name="link_embed" id="link_embed" class="form-control mb-3" required value="{{ $material->link_embed }}">
                    <label for="kursus">Kursus</label>
                    <select class="form-control mb-3" name="course_id" id="kursus">
                        @foreach ($courses as $item)
                        <option value="{{ $item->id }}" {{ $material->course_id == $item->id ? 'selected' : '' }}>{{ $item->judul }}</option>
                        @endforeach
                    </select>
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