const toggleButton = document.getElementById("toggleLoja");
const toggleCosmeticos1 = document.querySelectorAll(".cosmeticos1");
const toggleCosmeticos2 = document.querySelectorAll(".cosmeticos2");
const toggleCosmeticos3 = document.querySelectorAll(".cosmeticos3");
const lojaSection = document.getElementById("loja");
const ulLoja = document.getElementById("ulLoja");
const imagem = document.getElementById("imagem");

if (toggleButton && toggleCosmeticos1 && toggleCosmeticos2 && toggleCosmeticos3 && lojaSection && ulLoja && imagem) {
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

  toggleCosmeticos1.forEach(element => {
    element.addEventListener("click", function () {
      imagem.value = "1";
      // Alterna a classe 'aberto' na seção da loja
      if (ulLoja.classList.contains("aberto")) {
        ulLoja.classList.remove("aberto");
      } else {
        ulLoja.classList.toggle("aberto");
      }
    });
  });

  toggleCosmeticos2.forEach(element => {
    element.addEventListener("click", function () {
      imagem.value = "2";
      // Alterna a classe 'aberto' na seção da loja
      if (ulLoja.classList.contains("aberto")) {
        ulLoja.classList.remove("aberto");
      } else {
        ulLoja.classList.toggle("aberto");
      }
    });
  });

  toggleCosmeticos3.forEach(element => {
    element.addEventListener("click", function () {
      imagem.value = "3";
      // Alterna a classe 'aberto' na seção da loja
      if (ulLoja.classList.contains("aberto")) {
        ulLoja.classList.remove("aberto");
      } else {
        ulLoja.classList.toggle("aberto");
      }
    });
  });
} else {
  console.error("One or more elements are missing in the HTML.");
}
