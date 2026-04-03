<div class="container">
    <div class="gradient-border">

        <header class="py-4">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="tool-card">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/img/nikto-logo.svg" width="30">
                                <strong>Nikto</strong>
                            </div>

                            <div class="tool-content mt-2">
                                <ul class="tool-list">
                                    <li>Pluggable web server and CGI scanner written in Perl</li>
                                    <li>Web Server Scanner</li>
                                    <li>Export Reports</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="tool-card">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/img/nmap.png" width="30">
                                <strong>Nmap</strong>
                            </div>

                            <div class="tool-content mt-2">
                                <ul class="tool-list">
                                    <li>Network explorations or security auditioning</li>
                                    <li>Ping scanning</li>
                                    <li>Port scanning techniques</li>
                                    <li>Version and services detection</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="tool-card">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/img/nuclei-logo.svg" width="30">
                                <strong>Nuclei</strong>
                            </div>

                            <div class="tool-content mt-2">
                                <ul class="tool-list">
                                    <li>Vulnerability scanner</li>
                                    <li>With powerful and flexible templating</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tool-card">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/img/menu_image.png" width="30">
                                <strong>WhatWeb</strong>
                            </div>

                            <div class="tool-content mt-2">
                                <ul class="tool-list">
                                    <li>Web scanner</li>
                                    <li>It recongnizes web technologies</li>
                                    <li>Has over 900 plugins, each recognizes something different</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tool-card">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/img/images.png" width="30">
                                <strong>SpiderFoot</strong>
                            </div>

                            <div class="tool-content mt-2">
                                <ul class="tool-list">
                                    <li>OSINT collection and reconnaissance tool</li>
                                    <li>Automate the process of OSINT about a given target</li>
                                    <li>The target can be a website, IP, etc.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tool-card">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/img/wpscan-logo.svg" width="30">
                                <strong>Wpscan</strong>
                            </div>

                            <div class="tool-content mt-2">
                                <ul class="tool-list">
                                    <li>WPScan scans remote WordPress installations to find security issues.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
<br>
<section>
    <div class="container">
        <div class="gradient-border">
            <header class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 text-center">
                            <p class="lead">
                                Este projeto foi desenvolvido com base na ideia proposta no repositório do GitHub 
                                (Cause-Effect App). Além de implementar os requisitos originais, o foco principal 
                                foi aplicar boas práticas de segurança, incluindo proteção de arquivos, controle 
                                de rotas e cuidados gerais com a aplicação.
                            </p>
                            <p class="lead">
                                Esse projeto foi feito utilizando PHP 8.4, Laravel Herd e o template Personal do Start Bootstrap
                            </p>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
</section>

<style>
    .gradient-border {
        padding: 2px;
        border-radius: 15px;
        background: linear-gradient(135deg, #6f42c1, #0d6efd);
    }

    .gradient-border>header {
        background: white;
        border-radius: 13px;
    }

    .tool-card {
        border-radius: 10px;
        padding: 10px;
        cursor: pointer;
        transition: 0.2s;
        background: white;
        border: 1px solid #eee;
    }

    .tool-card:hover {
        transform: translateY(-2px);
    }

    .tool-content {
        max-height: 0;
        overflow: hidden;
        transition: 0.3s ease;
    }

    .tool-content.active {
        max-height: 100px;
    }
</style>