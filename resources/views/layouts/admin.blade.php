@extends('layouts.main')

@section('css')
    <style>
        .navbar {
            background-color: #E8DFCA;
        }

        .navbar-brand {
            color: #F5EFE6;
            font-weight: bolder;
            padding: .5rem 1rem;
            border-radius: 10px;
            background-color: #4F6F52;
        }

        .navbar-brand:hover{
            color: #F5EFE6
        }

        .nav-link {
            font-weight: bold;
            color: #25221c;
            padding: 10px;
        }

        .nav-link:hover {
            color: #4F6F52;
        }

        .nav-item .nav-link.active {
            color: #4F6F52;
        }
    </style>
@endsection

@section('navbar')
    @include('admin.components.navbar')
@endsection
