@extends('layout.main')

@section('title', 'Edit Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 mt-3">
            <h1>Edit Student</h1>
            {{-- Kenapa action ke student? --}}
            {{-- Karena nanti di routes mengguanakn method post sehingga yang di jalankand= di raoutes adalah /students yang methodnya post --}}

            {{-- Karena ada 3 uri maka yang terhapus hanya 1 uri jadi student/1/1 --}}
            {{-- Maka untuk mengulanginya harus ditambahkan /student/ --}}
            <form method="post" action="/students/{{ $student->id }}" class="mt-4">

                {{-- Untuk generate token csrf type hidden --}}
                @method('patch')
                @csrf

                <div class="form-group">
                    {{-- Untuk menampilkan error validation --}}
                    <label for="nama">Name</label>
                    {{-- old untuk mengisi apa yang sudah di isi, old input --}}
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{$student->nama}}">
                    {{-- Untuk menampilkan pesan error validation --}}
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp"
                        value="{{$student->nrp}}">
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$student->email}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{$student->jurusan}}">
                </div>
                <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
        </div>
    </div>
</div>
@endsection