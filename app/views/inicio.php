<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <div id="upload" class="modal" data-state="0" data-ready="false">
        <div class="modal__body" style="padding-top: 50px;">
            <div class="modal__col">
                <!-- up -->
                <svg class="modal__icon modal__icon--blue" viewBox="0 0 24 24" width="24px" height="24px" aria-hidden="true">
                    <g fill="none" stroke="hsl(223,90%,50%)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle class="modal__icon-sdo69" cx="12" cy="12" r="11" stroke-dasharray="69.12 69.12" />
                        <polyline class="modal__icon-sdo14" points="7 12 12 7 17 12" stroke-dasharray="14.2 14.2" />
                        <line class="modal__icon-sdo10" x1="12" y1="7" x2="12" y2="17" stroke-dasharray="10 10" />
                    </g>
                </svg>
            </div>
            <div class="modal__col">
                <div class="modal__content">
                    <h2 class="modal__title">LEITOR DE XML</h2>
                    <p class="modal__message">Selecione um xml para fazer upload do seu computador ou dispositivo.</p>

                    <!-- Form for file upload -->
                    <form action="/danfe" method="POST" enctype="multipart/form-data">
                        <div class="modal__actions">
                            <label for="file" class="modal__button modal__button--upload">ESCOLHER ARQUIVO</label>
                            <button class="modal__button" type="submit" name="submit">Ler xml</button>
                            <input id="file" name="uploadedFile" type="file" hidden required>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <footer style="text-align: center; padding: 10px;">
            <!-- Icon representing an HTML tag (can also use PHP icon if preferred) -->
            <i class="fas fa-code" style="color: purple; font-size: 10px; vertical-align: middle; transition: transform 0.3s ease; cursor:pointer" id="icon"></i>
            <!-- Name with animation -->
            <span style="color: purple; font-size: 12px; font-weight: 400; transition: color 0.3s ease, transform 0.3s ease; cursor:pointer" id="name">Wendson Mayk</span>
        </footer>
    </div>




</body>

</html>