<?php
class Animal {
    public $animals;

    public function __construct() {
        $this->animals = ['Beruang', 'Cicak'];
    }

    public function index() {
        echo "Daftar Hewan:<br>";
        foreach ($this->animals as $animal) {
            echo "- $animal<br>";
        }
    }

    public function store($data) {
        array_push($this->animals, $data);
        echo "$data berhasil ditambahkan.<br>";
    }

    public function update($index, $data) {
        if (isset($this->animals[$index])) {
            $animal = $this->animals[$index];
            $this->animals[$index] = $data;
            echo "$animal diperbarui menjadi '$data'.<br>";
        } else {
            $animal = $this->animals[$index];
            echo "$animal tidak ditemukan.<br>";
        }
    }


    public function destroy($index) {
        if (isset($this->animals[$index])) {
            $removed = $this->animals[$index];
            array_splice($this->animals, $index, 1);
            echo " $removed berhasil dihapus.<br>";
        } else {
            echo " $index tidak ditemukan.<br>";
        }
    }
}


$animal = new Animal();

echo "<br>Menampilkan seluruh hewan<br>";
$animal->index();

echo "<br>Store: Menambahkan Burung<br>";
$animal->store('Burung');
$animal->index();

echo "<br>Update: Mengupdate beruang menjadi 'Kucing Anggora'<br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();

echo "<br>Destroy: Menghapus Cicak<br>";
$animal->destroy(1);
$animal->index();



?>
