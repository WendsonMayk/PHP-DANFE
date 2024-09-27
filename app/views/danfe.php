<?php 
require "../app/controllers/danfeController.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANFE - Exemplo</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .danfe {
            width: 800px;
            margin: 0 auto;
            border: 1px solid black;
            padding: 10px;
        }

        .header-table,
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }

        .empresa,
        .chave-acesso,
        .nf {
            text-align: center;
        }

        .danfe-header {
            text-align: center;
            font-size: 14px;
        }

        .nf {
            font-size: 16px;
            font-weight: bold;
        }

        table {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="danfe">
        <table class="header-table" width="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td colspan="2" class="empresa">
                    <b>Empresa Fictícia LTDA</b><br>
                    Rua Fictícia, 123<br>
                    São Paulo - SP<br>
                    Fone/Fax: 11 3333-4444
                </td>
                <td rowspan="2" class="danfe-header">
                    <b>DANFE</b><br>
                    Documento Auxiliar da Nota Fiscal Eletrônica<br>
                    <b>0 - ENTRADA | 1 - SAÍDA</b><br>
                    Série: 001<br>
                    Folha: 1/1
                </td>
                <td rowspan="2" class="nf">
                    NF-e<br>
                    <b>Nº 000.000.001</b><br>
                    Série: 001
                </td>
            </tr>
            <tr>
                <td class="chave-acesso">
                    <b>Chave de Acesso:</b><br>
                    3519 0907 3346 8200 0010 5500 1000 0000 0110 0000 0018
                </td>
                <td class="emissao">
                    <b>Emissão:</b><br> 26/09/2024
                </td>
            </tr>
        </table>

        <table width="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td colspan="2"><b>Natureza da Operação:</b> Venda de Mercadoria</td>
                <td><b>Data da Saída/Entrada:</b> 26/09/2024 15:00:00</td>
            </tr>
        </table>

        <table width="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td colspan="3"><b>Destinatário/Remetente:</b> Cliente Fictício</td>
            </tr>
            <tr>
                <td><b>Endereço:</b> Rua Imaginária, 456 - Bairro Fictício</td>
                <td><b>Município:</b> São Paulo</td>
                <td><b>UF:</b> SP</td>
            </tr>
            <tr>
                <td><b>CPF/CNPJ:</b> 123.456.789-09</td>
                <td><b>CEP:</b> 01002-000</td>
                <td><b>Telefone:</b> 11 98765-4321</td>
            </tr>
        </table>

        <table width="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td><b>Descrição do Produto</b></td>
                <td><b>Quantidade</b></td>
                <td><b>Valor Unitário</b></td>
                <td><b>Valor Total</b></td>
            </tr>
            <tr>
                <td>Produto Fictício</td>
                <td>10</td>
                <td>R$ 50,00</td>
                <td>R$ 500,00</td>
            </tr>
        </table>

        <table width="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td><b>Total da NF-e:</b> R$ 500,00</td>
                <td><b>ICMS:</b> R$ 90,00</td>
                <td><b>PIS:</b> R$ 8,25</td>
                <td><b>COFINS:</b> R$ 38,00</td>
            </tr>
        </table>

        <table width="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td><b>Observações:</b> Observações gerais sobre a NF-e fictícia.</td>
            </tr>
        </table>
    </div>
</body>

</html>