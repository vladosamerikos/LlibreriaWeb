// Editar libro form
editFotoFlag = false;

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
