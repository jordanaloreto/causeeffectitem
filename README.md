🔐 Secure Cause-Effect App

Este projeto é uma adaptação do desafio proposto em:

👉 Cause-Effect App Idea

A proposta original foi expandida com um novo foco: desenvolvimento seguro (DevSec).

🎯 Objetivo

A maioria dos ataques em aplicações web ocorre devido a:

▪️Má configuração do servidor

▪️Falta de validação no backend

▪️Confiança indevida no frontend

Este projeto foi desenvolvido com o objetivo de demonstrar, na prática, como aplicar boas práticas de segurança desde aplicações simples, reforçando o princípio fundamental:

❗ Nunca confiar no cliente. Toda validação deve ser feita no backend.

🛡️ Abordagem de Segurança

A segurança da aplicação foi implementada principalmente nas camadas centrais:

▪️index.php → Ponto de entrada da aplicação (Front Controller)

▪️web.php → Sistema de roteamento com validação e controle de acesso

🔐 Principais medidas implementadas:

▪️Whitelist de rotas

▪️Apenas rotas previamente definidas podem ser acessadas

▪️Proteção contra Path Traversal

▪️Uso de realpath() e validação de diretórios para impedir acesso indevido a arquivos

▪️Normalização de URL

▪️Evita bypass de rotas utilizando variações de caminhos

▪️Security Headers

▪️X-Frame-Options → Proteção contra Clickjacking

▪️X-Content-Type-Options → Evita MIME sniffing

▪️X-XSS-Protection → Proteção básica contra XSS

▪️Content-Security-Policy (CSP) → Controle rigoroso de recursos carregados

▪️Content Security Policy (CSP)

▪️Restringe scripts, estilos e recursos externos, reduzindo significativamente o risco de XSS

🧠 Mentalidade do Projeto

Este projeto faz parte de uma jornada de evolução para a área de DevSecOps, com foco em:

▪️Construir aplicações seguras desde a base

▪️Entender como ataques funcionam na prática

▪️Aplicar contramedidas diretamente no código

▪️Evoluir de projetos simples para arquiteturas mais robustas

Cada projeto dessa série buscará responder:

"Como isso poderia ser explorado?"

"Como posso prevenir isso desde o início?"

🚀 Motivação

Pequenas decisões no código podem ter grande impacto na segurança.

Algumas linhas bem implementadas podem significar a diferença entre:

🔥 Apagar incêndios em produção
👀 Apenas monitorar um sistema seguro
📸 Preview

<img width="1349" height="631" alt="image" src="https://github.com/user-attachments/assets/00832ba3-e298-481a-a178-563f97dde755" />

👨‍💻 Autor

Projeto desenvolvido com foco em aprendizado contínuo em segurança de aplicações web e evolução para a área de DevSec.
