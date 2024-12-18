//Import SrudentController
const StudentController = require('./controllers/StudentController');
//import express
const express = require("express");
//Membuat object router
const router = express.Router();

/**
 * Membuar routing.
 * method get menerima 2 params.
 * Param 1 adalah endpoint.
 * param 2 callback.
 * Callback menerima object req dan res
 */
router.get("/", (req, res) =>{
    res.send("Hello Express");
});

// Routing student
router.get("/students", StudentController.index);
router.post("/students", StudentController.store);
router.put("/students/:id", StudentController.update);
router.delete("/students/:id", StudentController.destroy);


module.exports = router;