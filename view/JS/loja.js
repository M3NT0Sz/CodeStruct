const toggleButton = document.getElementById("toggleLoja");
toggleButton.addEventListener("click", function () {
  // Alterna a classe 'aberto' na seção da loja
  lojaSection.classList.toggle("aberto");

  // Altera o texto do botão com base na visibilidade da loja
  if (lojaSection.classList.contains("aberto")) {
    toggleButton.textContent = "Fechar Loja";
  } else {
    toggleButton.textContent = "Abrir Loja";
  }
});
