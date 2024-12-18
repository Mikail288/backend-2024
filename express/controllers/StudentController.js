class StudentController {
    index(req, res) {
    res.send("Menampilkan semua students");
    }
    store(req, res) {
    res.send("Menambahkan data student");
    }
    update(req, res) {
    const { id } = req.params;
    res.send("Mengedit student id ${id}");
    }
    destroy(req, res) {
    const { id } = req.params;
    res.send("Menghapus student id ${id}");
    }
    }
    // Membuat object Student Controller
    const object = new StudentController();
    // Export object StudentController
    module.exports = object;