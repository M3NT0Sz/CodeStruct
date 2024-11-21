const sla = document.getElementById("sla");

sla.addEventListener("click", function () {
    // Cria o elemento div para a janela do vídeo
    const videoWindow = document.createElement("div");
    videoWindow.style.position = "fixed";
    videoWindow.style.top = "0";
    videoWindow.style.left = "0";
    videoWindow.style.width = "100%";
    videoWindow.style.height = "100%";
    videoWindow.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    videoWindow.style.display = "flex";
    videoWindow.style.justifyContent = "center";
    videoWindow.style.alignItems = "center";
    videoWindow.style.zIndex = "1000";

    // Cria o elemento video
    const video = document.createElement("video");
    video.src = "Tela1.mp4";
    video.controls = true;
    video.autoplay = true;

    // Adiciona o evento para fechar a janela quando o vídeo terminar
    video.addEventListener("ended", function () {
        document.body.removeChild(videoWindow);
    });

    // Adiciona o vídeo à janela e a janela ao corpo do documento
    videoWindow.appendChild(video);
    document.body.appendChild(videoWindow);
});