const password = document.querySelector('#password');
const confirmPassword = document.querySelector('#confirmPassword');
const registerButton = document.querySelector('#register');

confirmPassword.addEventListener('input', () => {
	checkPasswordConfirmation();
});

password.addEventListener('input', () => {
	checkPasswordConfirmation();
});

const checkPasswordConfirmation = () => {
	if (confirmPassword.value !== password.value) {
		confirmPassword.style.borderColor = 'red';
		registerButton.disabled = true;
	} else {
		confirmPassword.style.borderColor = 'black';
		registerButton.disabled = false;
	}
};
