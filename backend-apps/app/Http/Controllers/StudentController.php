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
        
    public function update(Request $request, $id){
        $student = Student::find($id);
        if ($student){
            $input = [
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]; 
            $student->update($input);
            $data = [
                'message' => 'berhasil mengupdate data',
                'data' => $student
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Student gagal diubah'
            ];
            return response()->json($data, 404);
        }
    }

    public function destroy($id){
        $student = Student::find($id);
        if ($student){
            $student->delete();
            $data = [
                'message' => 'berhasil menghapus data'
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Student gagal dihapus'
            ];
            return response()->json($data, 404);
        }
    }

    public function show($id) {
        $student = Student::find($id);
        if ($student){
            $data = [
                'message' => 'berhasil menampilkan data',
                'data' => $student
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Student gagal ditampilkan'
            ];
            return response()->json($data, 404);
        }
    }
}
