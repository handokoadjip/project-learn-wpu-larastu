<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('students/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Cara pertama masuk ke database
        // Buat Object
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // Cara kedua menggunakan Model
        // Student::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,
        // ]);
        // Tapi tidak sampe diatas karena ada mass assignment dikarenakan kita akan memasukan banyak data langsung
        // Error muncul karena untuk keamanan agar orang tidak sembarangan memasukan data seperti ID
        // Kita harus menambahkan property fillabe di model supaya tau mana yang boleh di isi ole user

        // Validation
        // semua validarion ada di laravel documentation
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:8'
        ]);

        // Cara ketiga menggunakan model all
        // ALL ini semua yang ada di fillable atau di luar guarded
        Student::create($request->all());

        // ->with untuk flashdata
        return redirect(url('/students'))->with('status', 'Data Berhasil Diatambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // Type Hinting : Student $student parameter type student
    // Namanya Route Model Binding
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);

        return redirect(url('/students'))->with('status', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        // Documentation ada di eloquent orm destroy
        // ada namanya soft delete jadi tidak terlihat di table namun di database table masih ada data
        Student::destroy($student->id);
        return redirect(url('/students'))->with('status', 'data berhasil di hapus');
    }
}
