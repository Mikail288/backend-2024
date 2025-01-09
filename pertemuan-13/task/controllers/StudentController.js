// import Model Student
const Student = require("../models/Student");

class StudentController {
  // menambahkan keyword async
  async index(req, res) {
    // memanggil method static all dengan async await.
    const students = await Student.all();

    if (students.length > 0) {
      const data = {
        message: "Menampilkkan semua students",
        data: students,
      };

      res.status(200).json(data);
    }
    else{
      const data = {
        message: "Students is empty",
      };
      res.status(404).json(data);
    }
  }

  async store(req, res) {
    /**
     * TODO 2: memanggil method create.
     * Method create mengembalikan data yang baru diinsert.
     * Mengembalikan response dalam bentuk json.
     */
    const {nama, nim, email, jurusan} = req.body;
    if (!nama || !!nim || !email || !jurusan) {
      const data = {
        message: "Data tidak lengkap",
      };
      return res.status(422).json(data);
    }
    const student = await Student.create(req.body);

    const data = {
      message: "Menambahkan data student",
      data: [],
    };

    res.json(data);
  }

  // update(req, res) {
  //   const { id } = req.params;
  //   const { nama } = req.body;

  //   const data = {
  //     message: `Mengedit student id ${id}, nama ${nama}`,
  //     data: [],
  //   };

  //   res.json(data);
  // }
  async update(req, res) {
      const { id } = req.params;
      //cari id student yang ingin diupdate
      const student = await Student.find(id);

      if (student) {
      //melakukan update data
      const student = await Student.update(id, req.body);
      const data = {
        message: "Mengedit student",
        data: student,
      };
      res.status(200).json(data);
    } else {
      const data = {
        message: "Data tidak ditemukan",
      };
      res.status(404).json(data);
    }
  }

  // destroy(req, res) {
  //   const { id } = req.params;

  //   const data = {
  //     message: `Menghapus student id ${id}`,
  //     data: [],
  //   };

  //   res.json(data);
  // }
  async destroy(req, res) {
    const { id } = req.params;
    const student = await Student.find(id);
    if (!student) {
      await Student.delete(id);
      const data = {
        message: `Menghapus student id ${id}`,
      };
      res.status(200).json(data);
    } else {
      const data = {
        message: "Student tidak ditemukan",
      };
      res.status(404).json(data);
    }
  }

  async show(req, res) {
    const { id } = req.params;
    const student = await Student.findById(id);
    if (student) {
      const data = {
        message: `Menampilkan student id ${id}`,
        data: student,
      };
      res.status(200).json(data);
      } 
      else {
        const data = {
          message: "Student tidak ditemukan",
          data: [],
        };
        res.status(404).json(data);
      
    }
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
