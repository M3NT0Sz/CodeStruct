const toggleButton = document.getElementById("toggleLoja");
const lojaSection = document.getElementById("loja");

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

const chk = document.getElementById("chk");
chk.addEventListener("change", () => {
  document.body.classList.toggle("dark");
});

function toggleDropdown() {
  var dropdown = document.getElementById("myDropdown");
  dropdown.style.display =
    dropdown.style.display === "block" ? "none" : "block";
}

/* Fechar o dropdown se o usuário clicar fora dele */
window.onclick = function (event) {
  if (!event.target.closest("li")) {
    var dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    }
  }
};
