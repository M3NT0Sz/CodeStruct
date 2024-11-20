document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const video = document.createElement('video');
        video.src = '../Imagens/Tela1.mp4'; // Substitua pelo caminho correto do vídeo
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

        // Redireciona para questoes.php após o vídeo ser reproduzido
        video.onended = () => {
            form.submit();
        };

        // Remove o vídeo após 20 segundos e redireciona
        setTimeout(() => {
            const videoToRemove = document.getElementById('fundo1');
            if (videoToRemove) {
                videoToRemove.remove();
            }
            form.submit();
        }, 20000);
    });
});