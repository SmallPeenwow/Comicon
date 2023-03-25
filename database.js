const mysql = require('mysql');

const connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: 'password',
	database: 'comicon',
});

connection.connect(function (error) {
	if (error) throw error;

	console.log('Connection established');
});

module.exports = connection;
