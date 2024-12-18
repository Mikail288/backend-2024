const express = require('express');
const router = require("./routes/api.js");
const app = express()
const port = 3000

// app.get("/students", (req, res) => {
//     res.send("Menampilkan semua students");
// });

// app.post("/students", (req, res) => {
//     res.send("Menambahkan data student");
// });   

// app.put("/students/:id", (req, res) => {
//     const { id } = req.params;
//     res.send('Mengedit student ${id}');
// });
// app.delete("/students/:id", (req, res) => {
//     const { id } = req.params;
//     res.send('Mengedit student ${id}');
// });

app.use(router);

app.listen(3000)
