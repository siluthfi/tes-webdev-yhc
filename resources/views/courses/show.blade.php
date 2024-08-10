@extends('adminlte::page')

@section('title', 'Detail Kursus')

@section('content_header')
    <h1>Detail Kursus</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="row">
            <div class="col-md mb-3">
                <x-adminlte-alert theme="success" title="Success">
                    {{ session('success') }}
                </x-adminlte-alert>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md my-3">
            <a href="{{ route('course.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">Edit Kursus</a>
            <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline" onsubmit="deleteForm(event)">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus Kursus</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <x-adminlte-callout theme="info" title="{{ $course->judul }}">
                <h6>{{ $course->deskripsi }}</h6>
                @php
                    $durasi = explode(':', $course->durasi);
                    $jam = intval($durasi[0]) < 10 ? explode('0', $durasi[0])[1] . ' Jam' : $durasi[0] . ' Jam';
                    $menit = $durasi[1] . ' Menit';
                    if (intval($jam) < 1) {
                        $jam = '';
                    }
                @endphp
                <span><i class="far fa-clock mr-1"></i> {{ "$jam $menit" }}</span>
            </x-adminlte-callout>
        </div>
        <div class="col-md">
            <x-adminlte-card title="Materi" theme="info">
                {{-- <h5>Klik untuk mengedit materi</h5> --}}
                <a href="{{ route('course.material.create', $course->id) }}" class="btn btn-sm btn-success mb-3">Tambah Materi</a>

                @foreach ($course->materials as $item)
                    <div class="row">
                        <div class="col-md">
                            <x-adminlte-card theme="info" theme-mode="outline">
                                <h5>{{ $item->judul }}</h5>
                                <p class="text-muted">{{ $item->deskripsi }}</p>
                                <span class="d-block"><a href="{{ $item->link_embed }}">Embed Materi</a></span>

                                <a href="{{ route('material.edit', $item->id) }}" class="btn btn-sm btn-warning mt-3">Edit Materi</a>
                                <form action="{{ route('material.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="deleteForm(event)">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger mt-3">Hapus Materi</button>
                                </form>
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
    <script>
        function deleteForm(event) {
            event.preventDefault();

            const isDelete = confirm('Apakah yakin ingin menghapus?');
            if (isDelete) {
                event.target.submit();
            }
        }
    </script>
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop