// Función para habilitar o deshabilitar el campo de transporte según la ciudad seleccionada
function habilitar() {
  // Obtiene el elemento del DOM con el id 'ciudad'
  let ciudad = document.getElementById('ciudad');
  // Obtiene el elemento del DOM con el id 'transporte'
  let transporte = document.getElementById('transporte');  

  // Verifica si el valor del elemento 'ciudad' es distinto de "Tijuana"
  if (ciudad.value !== "Tijuana") {
      // Si es distinto, deshabilita el elemento 'transporte'
      transporte.disabled = true;
  } else {
      // Si es "Tijuana", habilita el elemento 'transporte'
      transporte.disabled = false;
  }
}

// Función para mostrar u ocultar las filas de talla y ajustar la altura del formulario según la opción seleccionada
function aparecer() {
  // Obtiene el elemento del DOM con el id 'camisa'
  let select = document.getElementById('camisa');
  // Obtiene todos los elementos <tr> con la clase 'talla'
  let tr = document.querySelectorAll("tr.talla");
  // Obtiene el elemento del DOM con la clase 'formato'
  let form = document.querySelector('.formato');
  // Obtiene el botón de envío dentro del formulario
  let enviarBtn = document.querySelector('input[type="submit"]');
  // Obtiene el textarea con el nombre 'comentarios'
  let comentariosTextarea = document.querySelector('textarea[name="comentarios"]');

  // Verifica si el valor del elemento 'camisa' es "Si"
  if (select.value === "Si") {
      // Si es "Si", muestra todas las filas con la clase 'talla'
      tr.forEach(row => row.style.display = 'table-row');
      // Ajusta la altura del formulario a 600px
      form.style.height = '600px';
  } else {
      // Si es distinto de "Si", oculta todas las filas con la clase 'talla'
      tr.forEach(row => row.style.display = 'none');
      // Ajusta la altura del formulario a 520px
      form.style.height = '520px';
  }
}

// Función para convertir el valor de un campo de entrada a mayúsculas
function convertToUppercase(el) {
  // Verifica si el elemento 'el' existe y tiene un valor
  if (!el || !el.value) return;
  // Convierte el valor del elemento a mayúsculas
  el.value = el.value.toUpperCase();
}

// Función para resaltar el campo de entrada cuando recibe el foco
function resaltarCampo(event) {
  // Cambia el color de fondo del campo que recibió el foco a 'darksalmon'
  event.target.style.backgroundColor = 'darksalmon';
}

// Función para eliminar el resaltado cuando el campo pierde el foco
function eliminarResaltado(event) {
  // Restablece el color de fondo del campo que perdió el foco al valor original
  event.target.style.backgroundColor = '';
}
