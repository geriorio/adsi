@extends('layouts.main')

@section('css')
    <style>
        .navbar {
            background-color: #4F6F52;
        }

        .navbar-brand {
            font-weight: bolder;
            padding: .5rem 1rem;
            border-radius: 10px;
            background-color: #F5EFE6;
        }

        .nav-link {
            font-weight: bold;
            color: #25221c;
            padding: 10px;
        }

        .nav-link:hover {
            color: #F5EFE6;
        }

        .nav-item .nav-link.active {
            color: #E8DFCA;
        }

        .image-container {
            width: 100%;
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 15px;
        }
    </style>
@endsection

@section('navbar')
    @include('penyewa.components.navbar')
@endsection
