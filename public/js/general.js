$("#paises").change(function (e) {
    $.get("/admin/cities/" + e.target.value + "", function (res, city) {
        $("#ciudades").empty();
        for (i = 0; i < res.length; i++) {
            $("#ciudades").append(
                `<option value= ${res[i].id}>${res[i].name}</option>`
            );
        }
    });
});
//Expresiones regulares para validar los campos
var mayus = new RegExp("^(?=.*[A-Z])");
var specialChar = new RegExp("^(?=.*[!@#$%&*])");
var number = new RegExp("^(?=.*[0-9])");
var cant = new RegExp("^(?=.{8,32})");
var verificationEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

//const valEmail = document.getElementById("inputEmail");

const valNombre = document.getElementById("inputName");
if (valNombre) {
    valNombre.addEventListener("input", function () {
        if (this.value.length > 100) this.value = this.value.slice(0, 100);
    });
}

const valCelular = document.getElementById("inputCel");
if (valCelular) {
    valCelular.addEventListener("input", function () {
        if (this.value.length > 10) this.value = this.value.slice(0, 10);
    });
}

const valCedula = document.getElementById("inputCc");
if (valCedula) {
    valCedula.addEventListener("input", function () {
        if (this.value.length > 11) this.value = this.value.slice(0, 11);
    });
}

$("#inputPassword").keyup(function () {
    var pass = $("#inputPassword").val();
    if (
        number.test(pass) &&
        specialChar.test(pass) &&
        mayus.test(pass) &&
        cant.test(pass)
    ) {
        $("#msg").text("Contraseña aceptada").css("color", "green");
    } else {
        $("#msg").text("Contraseña inaceptable").css("color", "red");
    }
});

$("#inputPassword, #confirmPass").keyup(function () {
    if ($("#inputPassword").val() == $("#confirmPass").val()) {
        $("#msgConfirm").text("Coinciden").css("color", "green");
    } else {
        $("#msgConfirm").text("No coinciden").css("color", "red");
    }
});

$("#form").submit(function (e) {
    $(".warnings").empty();
    var pass = $("#inputPassword").val();
    let enviar = true;
    if (valNombre.value.length < 6) {
        $("#msgNombre").text("El nombre es muy corto").css("color", "red");
        enviar = false;
    }
    if (!verificationEmail.test($("#inputEmail").val())) {
        $("#msgEmail").text("Email invalido").css("color", "red");
        enviar = false;
    }
    if (valCedula.value.length < 11) {
        $("#msgCc").text("CC invalida").css("color", "red");
        enviar = false;
    }
    if ($("#dateBirth").val() == "") {
        $("#msgDate").text("Digita la fecha de nacimiento").css("color", "red");
        enviar = false;
    }
    if (
        !(
            number.test(pass) &&
            specialChar.test(pass) &&
            mayus.test(pass) &&
            cant.test(pass)
        )
    ) {
        enviar = false;
    }
    if ($("#inputCel").val().length < 10 && $("#inputCel").val().length > 0) {
        $("#msgCel").text("Celular invalido").css("color", "red");
        enviar = false;
    }
    if (!($("#inputPassword").val() == $("#confirmPass").val())) {
        enviar = false;
    }
    if ($("#paises").val() == "") {
        $("#msgPais").text("Debe escoger un pais").css("color", "red");
        enviar = false;
    }
    if ($("#ciudades").val() == "") {
        $("#msgCiudad").text("Debe escoger una ciudad").css("color", "red");
        enviar = false;
    }
    if (enviar) {
        $("#warnings").text("Formulario enviado").css("color", "green");
    } else {
        e.preventDefault();
    }
});

$("#formEdit").submit(function (e) {
    $(".warnings").empty();
    let enviar = true;
    if (valNombre.value.length < 6) {
        $("#msgNombre").text("El nombre es muy corto").css("color", "red");
        enviar = false;
    }
    if ($("#inputCel").val().length < 10 && $("#inputCel").val().length > 0) {
        $("#msgCel").text("Celular invalido").css("color", "red");
        enviar = false;
    }
    if ($("#paises").val() == "") {
        $("#msgPais").text("Debe escoger un pais").css("color", "red");
        enviar = false;
    }
    if ($("#ciudades").val() == "") {
        $("#msgCiudad").text("Debe escoger una ciudad").css("color", "red");
        enviar = false;
    }
    if (enviar) {
        $("#warnings").text("Formulario enviado").css("color", "green");
    } else {
        e.preventDefault();
    }
});

$('#formEmail').submit(function(e){
    let enviar = true;
    $(".warnings").empty();
    if (!verificationEmail.test($("#dest").val())) {
        $("#msgDest").text("Email invalido").css("color", "red");
        enviar = false;
    }
    if($('#body').val().length < 1){
        $("#msgBody").text("No puedes enviar un correo sin cuerpo").css("color", "red");
        enviar = false;
    }
    if (enviar) {
        $("#success").text("Correo enviado").css("color", "green");
    } else {
        e.preventDefault();
    }
})
