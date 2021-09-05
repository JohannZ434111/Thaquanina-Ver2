var nombre1 = document.getElementById('nombre');
var correo1 = document.getElementById('mail');
var clave1 = document.getElementById('pass');
var localStorageKeyName = 'Registro';

function guardar() {
    localStorage.setItem('nombre', nombre1.value);
    localStorage.setItem('mail', correo1.value);
    localStorage.setItem('pass', clave1.value);
    alert('Datos Guardados');
}

function login() {
    var userGuardado = localStorage.getItem('mail');
    var passGuardado = localStorage.getItem('pass');

    var loginUser = document.getElementById('usuario');
    var loginPass = document.getElementById('password');

    if(loginUser.value == userGuardado && loginPass.value == passGuardado) {
        alert('Has hecho Login Satisfactoriamente, Bienvenido');
        window.location="file:///C:/xampp/htdocs/Thaquanina-Ver2/Menu_Usuario/menu_usuario.html"
    }else {
        alert('ERROR. Usuario No Encontrado');
    }
}