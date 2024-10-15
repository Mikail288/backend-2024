<?php
# class Animal
class Animal {
    # property animals
    public $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct() {
        $this->animals = ['Kucing', 'Ayam', 'Kelinci'];
    }

    # method index - menampilkan data animals
    public function index() {
        foreach ($this->animals as $animal) {
            echo $animal . '<br>';
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data) {
        $this->animals[] = $data;
        echo "$data telah ditambahkan.<br>";
    }

    # method update - memperbarui data
    # parameter: index dan hewan baru
    public function update($index, $data) {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data;
            echo "Data hewan di index $index telah diupdate menjadi $data.<br>";
        } else {
            echo "Index tidak ditemukan.<br>";
        }
    }

    # method destroy - menghapus hewan
    # parameter: index
    public function destroy($index) {
        if (isset($this->animals[$index])) {
            $hewan = $this->animals[$index];
            unset($this->animals[$index]);
            echo "$hewan telah dihapus.<br>";
        } else {
            echo "Index tidak ditemukan.<br>";
        }
    }
}

# membuat object
# kirimkan data array ke dalam constructor
$animal = new Animal();

echo 'Index - Menampilkan seluruh hewan <br>';
$animal->index();
echo '<br>';

echo 'Store - Menambahkan hewan baru (burung) <br>';
$animal->store('burung');
$animal->index();
echo '<br>';

echo 'Update - Mengupdate hewan <br>';
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo '<br>';

echo 'Destroy - Menghapus hewan <br>';
$animal->destroy(1);
$animal->index();
echo '<br>';
?>
