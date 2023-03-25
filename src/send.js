// const express = require('express');
// const mysql = require('mysql');

// const app = express();
// const port = 5500;

// const connection = mysql.createPool({
// 	host: 'localhost',
// 	user: 'root',
// 	password: 'password',
// 	database: 'comicon',
// });

// app.use(express.urlencoded({ extended: true }));

// app.post('/submit-form', (req, res) => {
// 	const name = req.body.name;

// 	const surname = req.body.surname;

// 	const email = req.body.email;

// 	const phoneNumber = req.body.phoneNumber;

// 	const password = req.body.password;

// 	const gender = re.body.genderList;

// 	const guest = req.body.guest;

// 	let queryInsert = `INSERT INTO users (users_name, users_surname, users_email,
//         users_phone_number, users_password, users_gender, users_preferred_guest)
//         VALUES ("${name}", "${surname}", "${email}", "${phoneNumber}", "${password}", "${gender}", ${guest}")`;

// 	connection.query(queryInsert, function (err, data) {
// 		if (err) throw err;

// 		console.log('User data inserted');
// 	});
// });

// app.listen(port, () => {
// 	console.log(`App listening at https//localhost:${port}`);
// });
