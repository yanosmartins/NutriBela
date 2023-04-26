const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const passwordconfirmation = document.getElementById('passwordconfirmation');

form.addEventListener("submit", (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs(){
    const usernameValue = username.value
    const emailValue = email.value
    const passwordValue = password.value
    const passwordconfirmationValue = passwordconfirmation.value

    if(usernameValue == ""){
        setErrorFor(username, "O nome de usuário é obrigatório.");
    }
    if(usernameValue == ""){
        setErrorFor(email, "O nome de usuário é obrigatório.");
    }
    if(usernameValue == ""){
        setErrorFor(password, "O nome de usuário é obrigatório.");
    }
    if(usernameValue == ""){
        setErrorFor(passwordconfirmation, "O nome de usuário é obrigatório.");
    }


}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");
    
    //adicionar a mesagem de erro
    small.innerText = message;

    //adicionar a classe de erro
    formControl.classname = "form-control error";

}
function setSuccessFor(input){
    const formControl = input.parentElement;
    //adicionar a classe de sucesso
    formControl.className = "form-control success";
}