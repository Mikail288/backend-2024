// TODO 3: Import data students dari folder data/students.js
const students = require("../data/students");

// Membuat Class StudentController
class StudentController {
  index(req, res) {
    // TODO 4: Tampilkan data students
    res.json(students);
  }

  store(req, res) {
    // TODO 5: Tambahkan data students
    const { name, age } = req.body;
    const newStudent = {
      id: students.length + 1,
      name,
      age,
    };
    students.push(newStudent);
    res.status(201).json(newStudent);
  }

  update(req, res) {
    // TODO 6: Update data students
    const { id } = req.params;
    const { name, age } = req.body;

    const student = students.find((s) => s.id === parseInt(id));
    if (!student) {
      return res.status(404).json({ message: "Student not found" });
    }

    student.name = name || student.name;
    student.age = age || student.age;

    res.json(student);
  }

  destroy(req, res) {
    // TODO 7: Hapus data students
    const { id } = req.params;

    const index = students.findIndex((s) => s.id === parseInt(id));
    if (index === -1) {
      return res.status(404).json({ message: "Student not found" });
    }

    const deletedStudent = students.splice(index, 1);
    res.json(deletedStudent[0]);
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
