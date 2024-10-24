<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        //melihat data
        //query builder
        $student = Student::all();
        $data = [
            'message' => 'berhasil akses data',
            'data' => $student
        ];
        return response()->json($data, 200);
    }

    public function store(Request $request){
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
        $student = Student::create($input);
        $data = [
            'message' => 'berhasil menambahkan data',
            'data' => $student
        ];
        return response()->json($data, 200);
    }
}
