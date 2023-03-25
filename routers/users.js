var express = require('express');
var router = express.Router();
var db = require('../database');

router.get('/form', function (req, res, next) {
	res.render('users');
});

router.post('/create', function (req, res, next) {
	const name = req.body.name;

	const surname = req.body.surname;

	const email = req.body.email;

	const phoneNumber = req.body.phoneNumber;

	const password = req.body.password;

	const gender = re.body.genderList;

	const guest = req.body.guest;

	let queryInsert = `INSERT INTO users (users_name, users_surname, users_email,
	    users_phone_number, users_password, users_gender, users_preferred_guest)
	    VALUES ("${name}", "${surname}", "${email}", "${phoneNumber}", "${password}", "${gender}", ${guest}")`;

	db.query(queryInsert, function (err, data) {
		if (err) throw err;

		console.log('User data inserted');
	});

	// // const userDetails = req.body;

	// // let sql = 'INSERT INTO users SET ?';
	// // db.query(sql, userDetails, function (err, data) {
	// // 	if (err) throw err;

	// // 	console.log('User data inserted');
	// // });

	res.redirect('index.html');
});

module.exports = router;
