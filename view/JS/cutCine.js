// Verifica se o vídeo já foi exibido
if (!localStorage.getItem('videoShown')) {
    // Cria um elemento de vídeo
    const video = document.createElement('video');
    video.src = '../view/Imagens/Tela1.mp4'; // Substitua pelo caminho correto do vídeo
    video.id = 'fundo1';
    video.style.position = 'absolute';
    video.style.top = '0';
    video.style.left = '0';
    video.style.width = '100%';
    video.style.height = '100%';
    video.style.objectFit = 'cover'; // Garante que o vídeo cubra toda a página
    video.autoplay = true;

    // Adiciona o vídeo ao corpo do documento
    document.body.appendChild(video);

    // Cria um botão de skip
    const skipButton = document.createElement('button');
    skipButton.innerText = 'Skip';
    skipButton.style.position = 'absolute';
    skipButton.style.bottom = '10px';
    skipButton.style.right = '10px';
    skipButton.style.padding = '10px 20px';
    skipButton.style.backgroundColor = '#6a0dad'; // Cor alterada para #6a0dad
    skipButton.style.color = '#fff';
    skipButton.style.border = 'none';
    skipButton.style.borderRadius = '5px';
    skipButton.style.cursor = 'pointer';
    skipButton.style.transition = 'transform 0.3s ease'; // Adiciona transição para animação

    // Adiciona animação ao botão ao passar o mouse
    skipButton.addEventListener('mouseover', () => {
        skipButton.style.transform = 'scale(1.1)';
    });
    skipButton.addEventListener('mouseout', () => {
        skipButton.style.transform = 'scale(1)';
    });

    // Adiciona o botão de skip ao corpo do documento
    document.body.appendChild(skipButton);

    // Define a ação do botão de skip
    skipButton.addEventListener('click', () => {
        const videoToRemove = document.getElementById('fundo1');
        if (videoToRemove) {
            videoToRemove.remove();
        }
        skipButton.remove();
        localStorage.setItem('videoShown', 'true'); // Marca o vídeo como exibido
    });

    // Define um temporizador para remover o vídeo após 20 segundos
    setTimeout(() => {
        const videoToRemove = document.getElementById('fundo1');
        if (videoToRemove) {
            videoToRemove.remove();
        }
        skipButton.remove();
        localStorage.setItem('videoShown', 'true'); // Marca o vídeo como exibido
    }, 20000); // 20000 milissegundos = 20 segundos
}