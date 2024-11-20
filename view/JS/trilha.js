// Seleciona o título "TAD" e o contêiner das trilhas
const toggleTAD = document.getElementById("toggleTAD");
const toggleLSE = document.getElementById("toggleLSE");
const toggleLDE = document.getElementById("toggleLDE");
const toggleFIFO = document.getElementById("toggleFIFO");
const togglePri = document.getElementById("togglePri");
const togglePil = document.getElementById("togglePil");
const toggleArBi = document.getElementById("toggleArBi");
const toggleArB = document.getElementById("toggleArB");
const toggleArTrie = document.getElementById("toggleArTrie");
const toggleArAVL = document.getElementById("toggleArAVL");
const toggleArRubro = document.getElementById("toggleArRubro");
const trilhasTAD = document.getElementById("trilhasTAD");
const trilhasLSE = document.getElementById("trilhasLSE");
const trilhasLDE = document.getElementById("trilhasLDE");
const trilhasFIFO = document.getElementById("trilhasFIFO");
const trilhasPri = document.getElementById("trilhasPri");
const trilhasPil = document.getElementById("trilhasPil");
const trilhasArBi = document.getElementById("trilhasArBi");
const trilhasArB = document.getElementById("trilhasArB");
const trilhasArTrie = document.getElementById("trilhasArTrie");
const trilhasArAVL = document.getElementById("trilhasArAVL");
const trilhasArRubro = document.getElementById("trilhasArRubro");

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
toggleArBi.addEventListener("click", function () {
  if (!toggleArBi.classList.contains("buttonBloqueado")) {
    trilhasArBi.classList.toggle("aberta");
  }
});
toggleArB.addEventListener("click", function () {
  if (!toggleArB.classList.contains("buttonBloqueado")) {
    trilhasArB.classList.toggle("aberta");
  }
});
toggleArTrie.addEventListener("click", function () {
  if (!toggleArTrie.classList.contains("buttonBloqueado")) {
    trilhasArTrie.classList.toggle("aberta");
  }
});
toggleArAVL.addEventListener("click", function () {
  if (!toggleArAVL.classList.contains("buttonBloqueado")) {
    trilhasArAVL.classList.toggle("aberta");
  }
});
toggleArRubro.addEventListener("click", function () {
  if (!toggleArRubro.classList.contains("buttonBloqueado")) {
    trilhasArRubro.classList.toggle("aberta");
  }
});
