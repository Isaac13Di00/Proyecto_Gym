const express = require("express");
const cors = require("cors");
const app = express();

const usuarios = [{
	id: 1,
	nombre: "Isaac",
	email: "isaac@correo.com"
}];

app.use(express.urlencoded({extend: false}));
app.use(express.json());
app.use(cors());

app.get("/usuarios", (req, res) => {
	res.status(200).json({usuarios})
})
app.post("/usuarios", (req, res) => {
	res.status(200).json({
		metodo: "post"
	})
})  

app.listen(3000, () => {
	// process.stdout.write('\x18c');
	console.log('Servidor corriendo en el puerto 3000');
});