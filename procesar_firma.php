<?php
// Obtener los datos de firma del campo oculto en el formulario
$signatureData = $_POST['signature-data'];

// Decodificar los datos de firma de base64
$binaryData = base64_decode($signatureData);

// Guardar la imagen de la firma en un archivo en el servidor
$filePath = 'C:\xampp\htdocs\prueba/firma2.png';
file_put_contents($filePath, $binaryData);

// Mostrar un mensaje indicando que la firma se ha guardado con éxito
echo "La firma ha sido guardada con éxito.";
?>