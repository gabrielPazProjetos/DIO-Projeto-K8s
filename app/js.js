function validarFormulario() {
  const nome = document.getElementById("nome").value.trim();
  const email = document.getElementById("email").value.trim();
  const comentario = document.getElementById("comentario").value.trim();

  if (!nome || !email || !comentario) {
    alert("Todos os campos são obrigatórios.");
    return false;
  }

  return true;
}
