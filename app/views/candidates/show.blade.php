@extends('layout')

@section('content')

    <div class="container">

        <h1>{{ $candidate->user->full_name }}</h1>

        <p>
            Categoría:
            <a href="">
                Backen Developer
            </a>
        </p>

        <p>Tipo de trabajo: Job Type</p>

        <p>
            Website:
            <a href="">
                Web Site
            </a>
        </p>

        <h4>Descripción</h4>

        <p>Description</p>

    </div> <!-- /container -->

@endsection