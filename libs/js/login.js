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

// validando campos de login 
$('#iniciar').on('click', function () {
	event.preventDefault();
	// var username = document.getElementById('#user').value;
	// var pass = document.getElementById('#pass').value;
	if ($(("user").val()).lenght < 1){
		// $(this).css("border", "2px solid #A83D32");
		$('#msm1').removeClass('d-lg-none');
		
	}else{
		$(this).css("border", "2px solid #086d8b");
	}

})
