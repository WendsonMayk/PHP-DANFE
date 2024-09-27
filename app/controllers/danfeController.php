<?php

use NFePHP\DA\NFe\Danfe;

$pathFile = $_FILES["uploadedFile"]["tmp_name"];
$arquivoXML = file_get_contents($pathFile);


$danfe = new Danfe($arquivoXML);

$danfe->montaDANFE();

// Configurar os cabeçalhos HTTP para exibir o PDF diretamente no navegador
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="danfeview.pdf"');

// Renderizar o PDF diretamente no navegador
echo $danfe->render();

