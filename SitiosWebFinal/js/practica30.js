function habilitar() {
  let ciudad = document.getElementById('ciudad');
  let transporte = document.getElementById('transporte');  

  if (ciudad.value !== "Tijuana") {
      transporte.disabled = true;
  } else {
      transporte.disabled = false;
  }
}

function aparecer() {
  let select = document.getElementById('camisa');
  let tr = document.querySelectorAll("tr.talla");
  let form = document.querySelector('.formato');
  let enviarBtn = document.querySelector('input[type="submit"]');
  let comentariosTextarea = document.querySelector('textarea[name="comentarios"]');

  if (select.value === "Si") {
      tr.forEach(row => row.style.display = 'table-row');
      form.style.height = '600px';
  } else {
      tr.forEach(row => row.style.display = 'none');
      form.style.height = '520px';
  }
}

function convertToUppercase(el) {
  if (!el || !el.value) return;
  el.value = el.value.toUpperCase();
}

// Función para resaltar el campo de entrada cuando recibe el foco
function resaltarCampo(event) {
  event.target.style.backgroundColor = 'darksalmon';
}

// Función para eliminar el resaltado cuando el campo pierde el foco
function eliminarResaltado(event) {
  event.target.style.backgroundColor = '';
}
