function validateSignInFields(event) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username.trim() === '' || password.trim() === '') {
        alert('Please fill in all fields.');
        event.preventDefault();
        return false;
    }
    
    return true;
}

function validateSignUpFields(event) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    if (username.trim() === '' || password.trim() === '' || confirmPassword.trim() === '') {
        alert('Please fill in all fields.');
        event.preventDefault();
        return false;
    }

    if (password !== confirmPassword) {
        alert('Password and confirm password do not match.');
        event.preventDefault();
        return false;
    }
    
    return true;
}

function validateGameFields(event) {
    const radios = document.getElementsByName('answer');
    let selectedAnswer = null;

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            selectedAnswer = radios[i].value;
        }
    }

    if (selectedAnswer === null) {
        alert("Please select an answer.");
        event.preventDefault();
        return false;
    }
    
    return true;
}