 // Función para validar el formulario
 function validateForm() {
    var email = document.getElementById("email").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Por favor, ingrese una dirección de correo electrónico válida.");
      return false;
    }
    // Aquí puedes agregar más validaciones según tus necesidades
    return true;
  }

  // Mostrar modal al enviar el formulario
  var modal = document.getElementById("myModal");
  var form = document.getElementById("contactForm");

  form.onsubmit = function() {
    modal.style.display = "block";
    return false; // Para prevenir el envío del formulario
  }

  function closeModal() {
    modal.style.display = "none";
    location.reload(); // Recargar la página después de cerrar el modal
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      closeModal();
    }
  }
    