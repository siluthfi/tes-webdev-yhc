@extends('adminlte::page')

@section('title', 'Kursus')

@section('content_header')
    <h1>Kursus</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md my-3">
            <h4>Daftar kursus yang tersedia</h4>
        </div>
    </div>
    
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
        <div class="col-md mb-3">
            <a href="{{ route('course.create') }}" class="btn btn-success">Tambah Kursus</a>
        </div>
    </div>

    <div class="row">
        {{-- <div class="col-md-4">
            <a href="{{ route('course.show', 1) }}" class="text-dark">
                <x-adminlte-card theme="dark" theme-mode="outline">
                    <h5 class="" style="font-weight: 700">Title 1</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad nemo aut ipsam praesentium ab accusantium qui similique animi officiis laborum.</p>
                    <span><i class="far fa-clock"></i> 60 Menit</span>
                </x-adminlte-card>
            </a>
        </div> --}}
        @foreach ($courses as $item)
            <div class="col-md-4">
                <a href="{{ route('course.show', $item->id) }}" class="text-dark">
                    <x-adminlte-card theme="dark" theme-mode="outline">
                        <h5 class="" style="font-weight: 700">{{ $item->judul }}</h5>
                        @if(strlen($item->deskripsi) > 100)
                            <p>{{ substr($item->deskripsi, 0, 100) }}...<span class="text-primary">Lihat detail</span></p>
                        @else
                            <p>{{ $item->deskripsi }}</p>
                        @endif
                        @php
                            $durasi = explode(':', $item->durasi);
                            $jam = str_contains($durasi[0], 0) ? explode('0', $durasi[0])[1] . ' Jam' : $durasi[0];
                            $menit = $durasi[1] . ' Menit';
                            if (intval($jam) < 1) {
                                $jam = '';
                            }
                        @endphp
                        <span><i class="far fa-clock mr-1"></i> {{ "$jam $menit" }}</span>
                    </x-adminlte-card>
                </a>
            </div>
        @endforeach
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop