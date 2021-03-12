@extends('layout.main')

@section('title', 'About Blade')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h1>About Blade</h1>
                <ul>
                    <li>Nama: {{$nama}}</li>
                    <li>Umur {{$umur}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

