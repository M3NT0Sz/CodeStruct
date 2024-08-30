// Seleciona o título "TAD" e o contêiner das trilhas
const toggleTAD = document.getElementById("toggleTAD");
const toggleLSE = document.getElementById("toggleLSE");
const toggleLDE = document.getElementById("toggleLDE");
const toggleFIFO = document.getElementById("toggleFIFO");
const togglePri = document.getElementById("togglePri");
const togglePil = document.getElementById("togglePil");
const trilhasTAD = document.getElementById("trilhasTAD");
const trilhasLSE = document.getElementById("trilhasLSE");
const trilhasLDE = document.getElementById("trilhasLDE");
const trilhasFIFO = document.getElementById("trilhasFIFO");
const trilhasPri = document.getElementById("trilhasPri");
const trilhasPil = document.getElementById("trilhasPil");

// Adiciona um evento de clique ao título "TAD"
toggleTAD.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  trilhasTAD.classList.toggle("aberta");
});
toggleLSE.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  if (!toggleLSE.classList.contains("buttonBloqueado")) {
    trilhasLSE.classList.toggle("aberta");
  }
});
toggleLDE.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  if (!toggleLDE.classList.contains("buttonBloqueado")) {
    trilhasLDE.classList.toggle("aberta");
  }
});
toggleFIFO.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  if (!toggleFIFO.classList.contains("buttonBloqueado")) {
    trilhasFIFO.classList.toggle("aberta");
  }
});
togglePri.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  if (!togglePri.classList.contains("buttonBloqueado")) {
    trilhasPri.classList.toggle("aberta");
  }
});
togglePil.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  if (!togglePil.classList.contains("buttonBloqueado")) {
    trilhasPil.classList.toggle("aberta");
  }
});
