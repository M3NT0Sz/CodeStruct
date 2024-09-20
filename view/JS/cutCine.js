// Cria um elemento de imagem
const img = document.createElement('img');
img.src = '../view/Imagens/Fundo1.gif'; // Substitua pelo caminho correto da imagem
img.id = 'fundo1';
img.style.position = 'absolute';
img.style.top = '0';
img.style.left = '0';
img.style.width = '100%';
img.style.height = '100%';

// Adiciona a imagem ao corpo do documento
document.body.appendChild(img);

// Define um temporizador para remover a imagem após 30 segundos
setTimeout(() => {
    const imgToRemove = document.getElementById('fundo1');
    if (imgToRemove) {
        imgToRemove.remove();
    }
}, 30000); // 30000 milissegundos = 30 segundos