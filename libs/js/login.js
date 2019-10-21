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


$('#conf').on('click', function () {
	codigo = document.getElementById('codigo').value;
	correo = document.getElementById('useremail').value;
	$.ajax({
		type: 'POST',
		url: 'http://localhost/gestor/usuario/validar',
		data: {
			'codigo': codigo,
			'correo': correo,
		},
		success: function (result) {
			if (result) {
				location.reload();
			}
		}
	});
})
// ----------------------validacion inputs de registro --------------------------
$('#name').on('keyup',function(){
	if (($('#name').val()).length == 0){
		$("#m1").text("Complete el siguiente campo.");
	
	}else{
		$("#m1").text("");

	}
})
$('#lastname').on('keyup',function(){
	if (($('#lastname').val()).length == 0){
		$("#m2").text("Complete el siguiente campo.");
	}else{
		$("#m2").text("");
	}
})
$('#username').on('keyup',function(){
	if (($('#username').val()).length == 0){
		$("#m3").text("Complete el siguiente campo.");
	}else{
		$("#m3").text("");
	}
})
$('#useremail').on('keyup',function(){
	if (($('#useremail').val()).length == 0){
		$("#m4").text("Complete con un correo valido.");
	}else{
		$("#m4").text("");
	}
})
$('#userpass').on('keyup',function(){
	if (($('#userpass').val()).length == 0){
		$("#m5").text("Complete el siguiente campo.");
	}else{
		$("#m5").text("");
	}
})
$('#userpass2').on('keyup',function(){
	if (($('#userpass2').val()).length == 0){
		$("#m6").text("Las contraseñas no coinciden.");
	}else{
		$("#m6").text("");
	}
})

$('#registrar').on('click', function () {
	correo = document.getElementById('useremail').value;
	form = new FormData(document.getElementById("reg"));

	
	$.ajax({
		type: 'POST',
		url: 'http://localhost/gestor/usuario/registrar',
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
		url: 'http://localhost/gestor/mail/registro',
		data: {
			'correo': correo
		},
		success: function (result) {
			console.log(result);

		}
	});
	// --------validacion de inputs--------
	var name = $("#name").val();
	var lastname = $("#lastname").val();
	var username = $("#username").val();
	 var useremail = $("#useremail").val();
	var userpass = $("#userpass").val();
	var userpass2 = $("#userpass2").val();
	if (name.length == "") {
		$("#m1").text("Complete el siguiente campo.");
		$("#name").focus();
		return false;
	} else if (lastname.length == "") {
		$("#m2").text("Complete el siguiente campo.");
		$("#lastname").focus();
		return false;
	} else if (username.length == "") {
		$("#m3").text("Complete el siguiente campo.");
		$("#username").focus();
		return false;
	} else if (useremail.length == "") {
		$("#m4").text("Complete con un correo valido.");
		$("#useremail").focus();
		return false;
	} else if (userpass.length == "") {
		$("#m5").text("Complete el siguiente campo.");
		$("#userpass").focus();
		return false;
	} else if ((userpass2.length == "")&&(userpass !== userpass2)) {
		$("#m6").text("Las contraseñas no coinciden.");
		$("#userpass2").focus();
		return false;
	} 

})




$('#correo').on('keyup',function(){
	if (($('#correo').val()).length == 0){
		$("#ms").text("Su correo debe ser valido");
	}else{
		$("#ms").text("");
	}
})

$('#cambio').on('click', function () {
	form = new FormData(document.getElementById("form"));
	$.ajax({
		type: 'POST',
		url: 'http://localhost/gestor/mail/cambio',
		data: form,
		processData: false,
		contentType: false,
		success: function (result) {
			console.log(result);
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
		url: 'http://localhost/gestor/usuario/validarUser',
		data: {
			'username': correo,
		},
		success: function (result) {
			if (result) {
				alert("no valido")
			}
		}
	});
}

function validarmail() {
	correo = document.getElementById('useremail').value;
	$.ajax({
		type: 'POST',
		url: 'http://localhost/gestor/usuario/validarCorreo',
		data: {
			'correo': correo,
		},
		success: function (result) {
			if (result) {
				alert("no valido")
			}
		}
	});
}

// validando ojo

$('#eye').on('click', function () {
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



$('#user').on('keyup',function(){
	if (($('#user').val()).length == 0){
		$("#msm1").text("Complete el siguiente campo.");
		$("#user").addClass('border-danger');
		// $("#user").css("border-bottom", "2px solid #A83D32");
	}else{
		$("#msm1").text("");
		$("#user").removeClass('border-danger');
	}
})
$('#pass').on('keyup',function(){
	if (($('#pass').val()).length == 0){
		$("#msm2").text("Complete el siguiente campo.");
		$("#user").addClass('border-danger');
	}else{
		$("#msm2").text("");
		$("#pass").removeClass('border-danger');
	}
})

$("#iniciar").click(function () {
	event.preventDefault();
	var user = $("#user").val();
	var pass = $("#pass").val();
	if (user.length == "") {
		$("#msm1").text("Complete el siguiente campo");
		$("#user").addClass('border-danger');
		$("#user").focus();
		return false;
	} else if (pass.length == "") {
		$("#msm2").text("Complete el siguiente campo");
		$("#pass").addClass('border-danger');
		$("#pass").focus();
		return false;
	}

})

