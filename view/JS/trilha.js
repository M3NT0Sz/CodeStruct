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
  trilhasLSE.classList.toggle("aberta");
});
toggleLDE.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  trilhasLDE.classList.toggle("aberta");
});
toggleFIFO.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  trilhasFIFO.classList.toggle("aberta");
});
togglePri.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  trilhasPri.classList.toggle("aberta");
});
togglePil.addEventListener("click", function () {
  // Alterna a classe 'aberta' no contêiner das trilhas
  trilhasPil.classList.toggle("aberta");
});
