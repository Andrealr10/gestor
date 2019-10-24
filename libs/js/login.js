// var uri = 'https://sudocs1.000webhostapp.com/';
var uri = 'http://localhost/gestor/';

var Toast;
jQuery(document).ready(function ($) {
	tab = $('.tabs h3 a');

	tab.on('click', function (event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});
sessionStorage.clear();


$('#conf').on('click', function (event) {
	codigo = document.getElementById('codigo').value;
	correo = document.getElementById('useremail').value;
	$.ajax({
		type: 'POST',
		url: uri + 'usuario/validar',
		data: {
			'codigo': codigo,
			'correo': correo,
		},
		success: function (result) {
			if (result) {
				if (result == 1) {
					alert('Registrado')
					location.reload();
				} else {
					alert('El código no es válido')
				}
			}
		}
	});
})
// ----------------------validacion inputs de registro --------------------------
// $('#name').on('keyup', function () {
// 	if (($('#name').val()).length == 0) {
// 		$("#m1").text("Complete el siguiente campo.");

// 	} else {
// 		$("#m1").text("");

// 	}
// })
// $('#lastname').on('keyup', function () {
// 	if (($('#lastname').val()).length == 0) {
// 		$("#m2").text("Complete el siguiente campo.");
// 	} else {
// 		$("#m2").text("");
// 	}
// })
$('#username').on('keyup', function () {
	if (($('#username').val()).length == 0) {
		$("#m3").text("Complete el siguiente campo.");
	} else {
		$("#m3").text("");
	}
})
$('#useremail').on('keyup', function () {
	if (($('#useremail').val()).length == 0) {
		$("#m4").text("Complete con un correo valido.");
	} else {
		$("#m4").text("");
	}
})
$('#userpass').on('keyup', function () {
	if (($('#userpass').val()).length == 0) {
		$("#m5").text("Complete el siguiente campo.");
	} else {
		$("#m5").text("");
	}
})
$('#userpass2').on('keyup', function () {
	if (($('#userpass2').val() != $('#userpass').val())) {
		$("#m6").text("Las contraseñas no coinciden.");
	} else {
		$("#m6").text("");
	}
})

$('#registrar').on('click', function (event) {
	correo = document.getElementById('useremail').value;
	form = new FormData(document.getElementById("reg"));

	event.preventDefault();
	$.ajax({
		type: 'POST',
		url: uri + 'usuario/registrar',
		data: form,
		processData: false,
		contentType: false,
		success: function (result) {
			console.log(result);
			// window.location.href = 'http://localhost/gestor';
		}
	});
	$.ajax({
		type: 'POST',
		url: uri + 'mail/registro',
		data: {
			'correo': correo
		},
		success: function (result) {
			console.log(result);
			alert('El correo fue enviado\nPor favor revisa tu bandeja de entrada y confirma el codigo.')
		}
	});
	// --------validacion de inputs--------
	// var name = $("#name").val();
	// var lastname = $("#lastname").val();
	var username = $("#username").val();
	var useremail = $("#useremail").val();
	var userpass = $("#userpass").val();
	var userpass2 = $("#userpass2").val();
	// if (name.length == 0) {
	// 	$("#m1").text("Complete el siguiente campo.");
	// 	$("#name").focus();
	// 	return false;
	// } else if (lastname.length == 0) {
	// 	$("#m2").text("Complete el siguiente campo.");
	// 	$("#lastname").focus();
	// 	return false;
	// } else 
	if (username.length == 0) {
		$("#m3").text("Complete el siguiente campo.");
		$("#username").focus();
		return false;
	} else if (useremail.length == 0) {
		$("#m4").text("Complete con un correo valido.");
		$("#useremail").focus();
		return false;
	} else if (userpass.length == 0) {
		$("#m5").text("Complete el siguiente campo.");
		$("#userpass").focus();
		return false;
	} else if ((userpass2.length == 0) && (userpass !== userpass2)) {
		$("#m6").text("Las contraseñas no coinciden.");
		$("#userpass2").focus();
		return false;
	}

})




$('#correo').on('keyup', function () {
	if (($('#correo').val()).length == 0) {
		$("#ms").text("Su correo debe ser valido");
	} else {
		$("#ms").text("");
	}
})




$('#correo').on('keyup', function () {
	if (($('#correo').val()).length == 0) {
		$("#ms").text("Su correo debe ser valido");
	} else {
		$("#ms").text("");
	}
})

$('#cambio').on('click', function () {
	form = new FormData(document.getElementById("form"));
	var correo = $("#correo").val();
	if (correo.length == 0) {
		$("#ms").text("Su correo debe ser valido");
		$("#correo").focus();
		return false;
	}
	$.ajax({
		type: 'POST',
		url: uri + 'mail/cambio',
		data: form,
		processData: false,
		contentType: false,
		success: function (result) {
			console.log(result);
			if (result) {
				$('#form').trigger("reset");
				$('#recuperarPass').modal('hide');
			}
			// window.location.href = 'http://localhost/gestor';
		}
	});
	var correo = $("#correo").val();
	if (correo.length == "") {
		$("#ms").text("Su correo debe ser valido");
		$("#correo").focus();
		return false;
	}
})


function validaruser() {
	correo = document.getElementById('username').value;
	$.ajax({
		type: 'POST',
		url: uri + 'usuario/validarUser',
		data: {
			'username': correo,
		},
		success: function (result) {
			if (result) {
				alert('EL nombre de usuario ya esta en uso')
			}
		}
	});
}

function validarmail() {
	correo = document.getElementById('useremail').value;
	$.ajax({
		type: 'POST',
		url: uri + 'usuario/validarCorreo',
		data: {
			'correo': correo,
		},
		success: function (result) {
			if (result) {
				alert('El correo ya esta en uso')
			}
		}
	});
}

// validando ojo

$('#eye').on('click', function (event) {
	event.preventDefault();

	if ($(this).hasClass('fa-eye-slash')) {
		$(this).removeClass('fa-eye-slash');
		$(this).addClass('fa-eye')
		$('#pass').attr('type', 'password');

	} else {
		$(this).removeClass('fa-eye');
		$(this).addClass('fa-eye-slash');
		$('#pass').attr('type', 'text');
	}

})



$('#user').on('keyup', function () {
	if (($('#user').val()).length == 0) {
		$("#msm1").text("Complete el siguiente campo.");
		$("#user").addClass('border-danger');
		// $("#user").css("border-bottom", "2px solid #A83D32");
	} else {
		$("#msm1").text("");
		$("#user").removeClass('border-danger');
	}
})
$('#pass').on('keyup', function () {
	if (($('#pass').val()).length == 0) {
		$("#msm2").text("Complete el siguiente campo.");
		$("#user").addClass('border-danger');
	} else {
		$("#msm2").text("");
		$("#pass").removeClass('border-danger');
	}
})

$("#iniciar").click(function (event) {
	event.preventDefault();
	var user = $("#user").val();
	var pass = $("#pass").val();
	if (user.length == 0) {
		$("#msm1").text("Complete el siguiente campo");
		$("#user").addClass('border-danger');
		$("#user").focus();
		return false;
	} else if (pass.length == 0) {
		$("#msm2").text("Complete el siguiente campo");
		$("#pass").addClass('border-danger');
		$("#pass").focus();
		return false;
	}
	form = new FormData(document.getElementById("loginform"));
	$.ajax({
		type: 'POST',
		url: uri + 'login/login',
		data: form,
		processData: false,
		contentType: false,
		success: function (result) {
			// console.log(result);
			if (result == 1) {
				window.location.href = uri;
			} else {
				alert('usuario o contraseña incorrectos')
			}
		}
	});
})

$('#reset').on('click', function () {
	form = new FormData(document.getElementById("form"));
	$.ajax({
		type: 'POST',
		url: uri + 'usuario/cambiar',
		data: form,
		processData: false,
		contentType: false,
		success: function (result) {
			console.log(result);
			if (result == 1) {
				window.location.href = uri;
			}
		}
	});
})


