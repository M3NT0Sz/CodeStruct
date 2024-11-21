<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeStruct</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="./Imagens/Tela2.mp4" type="video/mp4">
        </video>
    </div>
    <a href="javascript:history.back()" style="position: absolute; bottom: 10px; right: 10px; padding: 10px 20px; background-color: rgba(0, 0, 0, 0.5); color: white; text-decoration: none; border-radius: 5px;">Voltar</a>
</body>
</html>