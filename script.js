// Editar libro form
var editFotoFlag = false;

const mostrarEditFoto = () => {
	const editContainer = document.getElementById('edit-container');
	const editFotoBtn = document.getElementById('edit-foto-btn');
	if (editFotoFlag) {
		editContainer.setAttribute('style', 'display: none;');
		editFotoFlag = false;
		editFotoBtn.innerHTML = 'Editar foto';
	} else {
		editContainer.setAttribute('style', 'display: block;');
		editFotoFlag = true;
		editFotoBtn.innerHTML = 'Ocultar';
	}
};
ddffgg

// Crear cuenta form

var signUpPasswdFlag = false

const comprobarPassword = () => {
	const passwd1 = document.getElementById('password').value;
	const passwd2 = document.getElementById('password2').value;
	const passwd2container = document.getElementById('repite-password');
	const customMSG = document.getElementById('clave-dif-msg')
	if (passwd1 == passwd2){
		passwd2container.setAttribute('style', 'margin-bottom: 20px;')
		customMSG.setAttribute('style', 'display: none;')
		document.querySelector('#submit-button-login-form').disabled = false;
		signUpPasswdFlag = true
	}else{
		passwd2container.setAttribute('style', 'margin-bottom: 50px;')
		customMSG.setAttribute('style', 'display: block;')
		document.querySelector('#submit-button-login-form').disabled = true;
		signUpPasswdFlag = false

	}
}

// Pagina del libro
var descripLargaFlag = false

const mostrarOcultarDescrip= ()=>{
	const describLarga= document.querySelector('.libro-text-descrip')
	const mostrarMasButton = document.getElementById('mostrar-mas')
	if (descripLargaFlag==true){
		describLarga.setAttribute('style', 'max-height: 100px;')
		mostrarMasButton.innerHTML = 'Mostrar mas'
		descripLargaFlag= false
	}else{
		describLarga.setAttribute('style', 'max-height: none;')
		mostrarMasButton.innerHTML = 'Mostrar menos'
		descripLargaFlag= true
	}
}




