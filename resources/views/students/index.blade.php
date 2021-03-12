@extends('layout.main')

@section('title', 'Students')

@section('container')
<div class="container">
    
    
    <div class="row">
        <div class="col-md-6 mt-3">
            
            {{-- ALERT --}}
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif

            <h1>Students Blade</h1>
            <a href="{{ url('students/create') }}" class="btn btn-primary my-3">Add Student</a>
            <ul class="list-group">
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $student->nama }}
                    <a href="{{ url('/students') . '/' . $student->id }}" class="badge badge-info badge-pill">Detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection