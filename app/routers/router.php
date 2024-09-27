<?php

// Função que retorna o nome do arquivo da página de erro 404
function errorPage(): string
{
    return "error404.php"; // Retorna o nome do arquivo da página de erro
}

// Função que define as rotas da aplicação
function routes(): array
{
    return [
        "/" => "inicio.php",  // A rota raiz ("/") leva à página de início
        "/danfe" => "danfe.php" // A rota "/danfe" leva à página danfe.php
    ];
}

// Função que gerencia o roteamento da aplicação
function router()
{
    // Obtém o URI da requisição atual e extrai o caminho
    $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $routes = routes(); // Obtém as rotas definidas

    // Verifica se a URI requisitada existe nas rotas
    if (array_key_exists($uri, $routes)) {
        require viewPath . $routes[$uri]; // Inclui o arquivo correspondente à rota
    } else {
        require viewPath . errorPage(); // Inclui a página de erro 404 se a rota não for encontrada
    }
}
