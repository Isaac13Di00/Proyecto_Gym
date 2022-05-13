const express = require("express");
const cors = require("cors");
const app = express();

app.use(express.urlencoded({extend: false}));
app.use(express.json());
app.use(cors());


app.get("/", (req, res) => {
	res.status(200).json({
		a: "Hola",
		s: 24
	})
	
})

app.listen(3000, () => {
	// process.stdout.write('\x18c');
	console.log('Servidor corriendo en el puerto 3000');
});