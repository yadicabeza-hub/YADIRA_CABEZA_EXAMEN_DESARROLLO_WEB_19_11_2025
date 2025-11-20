function validarFormulario() {
    let nombre = document.getElementById("nombre").value;
    let correo = document.getElementById("correo").value;
    let contrasena = document.getElementById("contrasena").value;

    if (nombre === "" || correo === "" || contrasena === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    return true;
}
