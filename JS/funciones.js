const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones ={
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/,
    password: /^.{4,8}$/
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "usuario":
            if(expresiones.usuario.test(e.target.value)){

            } else {
                document.getElementsByTagName('usuario').classList.add('incorrecto')
            }
            break;
        case "contraseña":
                break;
        
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
});