@extends('layout.main')

@section('title', 'Detail Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-3">
            <h1>Student Blade</h1>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                    <p class="card-text">{{$student->nrp}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>

                    <a href="{{ url('/students') . '/' . $student->id . '/edit' }}" class="btn btn-primary">Edit</a>
                    {{-- Kenapa pakai button? agar secure karena jika di taro di link, jika user tau makan akan bahaya seperti student/hapus/1 maka student yang id 1 akan terhapus tanpa melalui button --}}
                    <form action="{{$student->id}}" method="post" class="d-inline">
                        {{-- Method ini untuk mengelabui broser yang tadinya post menjadi delete --}}
                        {{-- inspect element ada type hidden --}}
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{url('/students')}}" class="card-link float-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection