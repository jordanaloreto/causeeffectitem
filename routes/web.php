<?php

// =============================
// 🌐 CAPTURA E NORMALIZAÇÃO DA URL
// =============================

// Obtém apenas o caminho da URL (sem parâmetros)
// Ex: /contact?x=1 → /contact
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove barra no final da URL (normalização)
// Ex: /contact/ → /contact
// Isso evita duplicidade de rotas e possíveis bypass de validação
$uri = rtrim($uri, '/') ?: '/';


// =============================
// 🔐 WHITELIST DE ROTAS
// =============================

// Define explicitamente quais páginas podem ser acessadas
// Qualquer rota fora dessa lista será bloqueada
$routes = [
    '/' => 'home.php',
    '/contact' => 'contact.php',
];


// =============================
// 🚫 BLOQUEIO DE ROTAS INVÁLIDAS
// =============================

// Se a URL não estiver na whitelist, retorna erro 404
// Isso impede acesso a arquivos internos ou não autorizados
if (!array_key_exists($uri, $routes)) {
    http_response_code(404);
    echo "Página não encontrada";
    exit;
}


// =============================
// 🔐 PROTEÇÃO CONTRA PATH TRAVERSAL
// =============================

// Define o diretório base permitido para as views
$basePath = realpath(__DIR__ . '/../src/Views/pages/');

// Resolve o caminho real do arquivo solicitado
$viewPath = realpath($basePath . '/' . $routes[$uri]);

// Verifica:
// 1. Se o arquivo realmente existe
// 2. Se o caminho permanece dentro da pasta permitida
// Isso evita ataques como:
// ../../etc/passwd (Path Traversal)
if (!$viewPath || !str_starts_with($viewPath, $basePath)) {
    http_response_code(403);
    exit('Acesso negado');
}


// =============================
// 🏷️ DEFINIÇÃO DE DADOS DA VIEW
// =============================

// Gera um título dinâmico baseado na URL
// Ex: /contact → Contact
$title = ucfirst(trim($uri, '/')) ?: 'Home';


// =============================
// 🎨 RENDERIZAÇÃO DA VIEW
// =============================

// Carrega o layout principal da aplicação
// O layout será responsável por incluir a view ($viewPath)
require __DIR__ . '/../src/Views/layouts/main.php';