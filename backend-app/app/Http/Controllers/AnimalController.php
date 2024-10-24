<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $animals = ['cicak','Bebek','kangguru','penyu'];

    public function index(){
        echo 'Menampilkan index hewan';
        echo '<br>';
        foreach($this->animals as $animal){
            echo '- ' . $animal . '<br>';
        }
    }

    public function store(Request $request){
        echo 'Menambahkan data hewan <br>' . $request->nama . '<br>';
        array_push($this->animals, $request->nama);
        $this->index();
    }

    public function update(Request $request, $id) {
        // update hewan pada posisi $id
        $this->animals[$id] = $request->nama;
        echo "upadate nama hewan: " . $request->nama . '<br>';
        // tampilkan hasil setelah di-update
        $this->index();
    }

    public function destroy($id){
        //delete hewan di index $id
        echo 'delete hewan index: '.$id;
        unset($this->animals[$id]);
        $this->index();
    }
}
