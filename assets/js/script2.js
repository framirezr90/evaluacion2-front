// Función para validar el formulario
function validateForm() {
  var email = document.getElementById("email").value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Por favor, ingrese una dirección de correo electrónico válida.");
    return false;
  }
  return true;
}

// Mostrar modal al enviar el formulario
var modal = document.getElementById("myModal");
var form = document.getElementById("contactForm");

form.onsubmit = function() {
  // Llamar a la función ValidarFormulario para validar los campos adicionales
  if (!ValidarFormulario()) {
    return false; // Detener el envío del formulario si la validación falla
  }
  modal.style.display = "block";
  return false; // Para prevenir el envío del formulario
};

function closeModal() {
  modal.style.display = "none";
  location.reload(); // Recargar la página después de cerrar el modal
}

window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
};

// Función para validar el formulario extendido
function ValidarFormulario() {
  let validos = true; 
  const input_nombre = document.getElementById('nombre');
  const select_servicios = document.getElementById('servicio');
  const textArea_mensaje = document.getElementById('mensaje');
  const check_terminos = document.getElementById('terminos');

  // Validar nombre
  if (input_nombre.value.trim().length === 0) { // Trim para eliminar espacios en blanco al inicio y al final
    console.log('No tiene datos de nombre');
    input_nombre.classList.add('is-invalid');
    validos = false; // Si el nombre está vacío, establece validos como falso
  } else {
    input_nombre.classList.remove('is-invalid');
    input_nombre.classList.add('is-valid');
  }

  // Verificar si los términos y condiciones han sido aceptados
  var terminosAceptados = document.getElementById("terminos").checked;
  if (!terminosAceptados) {
    alert("Por favor, acepte los términos y condiciones.");
    return false;
  }

  return validos; // Devolver el estado de validación
}

// Función para aceptar los términos y condiciones desde el modal
function aceptarTerminos() {
  // Marcar el checkbox de términos y condiciones como seleccionado
  document.getElementById("terminos").checked = true;
  
  // Cerrar el modal
  closeModal();
}
