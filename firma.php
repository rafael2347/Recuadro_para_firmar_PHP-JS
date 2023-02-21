<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario de firma</title>
    <!-- Incluir la biblioteca de firma electrónica -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
</head>
<style>
    .recuadro{
        color:black;
    }
</style>
<body>
    <h1>Formulario de firma</h1>
    <p>Por favor, dibuja tu firma en el campo de abajo:</p>
    <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
    <button id="clear-button" type="button">Limpiar</button>
    <form method="post" action="procesar_firma.php" class="recuadro">
        <input type="hidden" name="signature-data" id="signature-data" />
        <button type="submit">Enviar firma</button>
    </form>
    <script>
        // Inicializar la biblioteca de firma electrónica
        var canvas = document.getElementById('signature-pad');
        var signaturePad = new SignaturePad(canvas);

        // Limpiar la firma si se hace clic en el botón "Limpiar"
        var clearButton = document.getElementById('clear-button');
        clearButton.addEventListener('click', function() {
            signaturePad.clear();
        });

        // Enviar la firma en formato base64 cuando se envía el formulario
        var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            var input = document.getElementById('signature-data');
            input.value = signaturePad.toDataURL();
        });
    </script>
</body>
</html>

