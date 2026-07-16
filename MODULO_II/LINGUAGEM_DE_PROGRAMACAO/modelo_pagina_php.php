<?php
/*
    ========================================
    AULA DIDÁTICA: PHP ESSENCIAL
    ========================================
    Arquivo: index.php
    Descrição: Material de aprendizagem sobre fundamentos de PHP
    Objetivo: Ensinar os conceitos básicos da linguagem de programação PHP
    ========================================
*/
?>
<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <?php
        // Meta tags e configurações de cabeçalho
        $pagina_titulo = "Aula Didática - PHP Essencial";
        ?>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $pagina_titulo; ?></title>
        <style>
            /* 
                O seletor universal (*) seleciona TODOS os elementos da página.
                Aqui removemos margens e paddings padrão para ter controle total.
            */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            /* Estilos do elemento <body> - o corpo da página */
            body {
                /* Define a fonte utilizada em toda a página */
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                /* Cria um gradiente laranja como fundo */
                background: linear-gradient(135deg, #ff7e5f 0%, #feb47b 100%);
                /* Cor padrão do texto */
                color: #333;
                /* Espaço entre linhas para melhor legibilidade */
                line-height: 1.6;
                /* Altura mínima de 100% da janela de visualização */
                min-height: 100vh;
                /* Espaço interno (preenchimento) */
                padding: 20px;
            }

            /* Estilos da classe .container - contém o conteúdo principal */
            .container {
                /* Largura máxima da página */
                max-width: 900px;
                /* Centraliza horizontalmente (margin auto) */
                margin: 0 auto;
                /* Fundo branco */
                background-color: white;
                /* Cantos arredondados */
                border-radius: 10px;
                /* Sombra para efeito de profundidade */
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
                /* Esconde conteúdo que ultrapassa as bordas */
                overflow: hidden;
            }

            header {
                background-color: #ff7e5f;
                color: white;
                padding: 40px 20px;
                text-align: center;
            }

            header h1 {
                font-size: 2.5em;
                margin-bottom: 10px;
            }

            header p {
                font-size: 1.1em;
                opacity: 0.9;
            }

            main {
                padding: 30px;
            }

            section {
                margin-bottom: 40px;
                border-left: 4px solid #ff7e5f;
                padding-left: 20px;
            }

            section h2 {
                color: #ff7e5f;
                font-size: 1.8em;
                margin-bottom: 15px;
            }

            section h3 {
                color: #feb47b;
                font-size: 1.3em;
                margin-top: 20px;
                margin-bottom: 10px;
            }

            p,
            li {
                color: #555;
                margin-bottom: 10px;
            }

            code {
                background-color: #f4f4f4;
                padding: 2px 6px;
                border-radius: 4px;
                font-family: "Courier New", monospace;
                color: #d63384;
            }

            .example {
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 6px;
                padding: 15px;
                margin: 15px 0;
                overflow-x: auto;
            }

            .example h4 {
                color: #feb47b;
                margin-bottom: 10px;
            }

            /* 
                Estilo para blocos de código pré-formatado.
                Usado para exibir exemplos de código PHP.
            */
            pre {
                /* Fundo escuro para melhor legibilidade do código */
                background-color: #2d2d2d;
                /* Texto claro */
                color: #f8f8f2;
                padding: 15px;
                border-radius: 6px;
                /* Permite rolagem horizontal se o código for muito longo */
                overflow-x: auto;
                /* Fonte monoespacial adequada para código */
                font-family: "Courier New", monospace;
                font-size: 0.9em;
                line-height: 1.4;
            }

            ul,
            ol {
                margin-left: 20px;
                margin-bottom: 15px;
            }

            li {
                margin-bottom: 8px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin: 15px 0;
            }

            table th {
                background-color: #ff7e5f;
                color: white;
                padding: 12px;
                text-align: left;
            }

            table td {
                border: 1px solid #ddd;
                padding: 12px;
            }

            table tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            footer {
                background-color: #f0f0f0;
                padding: 20px;
                text-align: center;
                color: #666;
                border-top: 1px solid #ddd;
            }

            .highlight {
                background-color: #fffacd;
                padding: 2px 4px;
                border-radius: 3px;
            }
        </style>
    </head>

    <body>
        <!-- Container (contêiner) agrupa todo o conteúdo principal -->
        <div class="container">
            <!--
                CABEÇALHO (header)
                A tag <header> define a seção de cabeçalho semântica da página.
                Geralmente contém o logo, título e subtítulo.
            -->
            <header>
                <h1>💻 Aula Didática: PHP Essencial</h1>
                <p>Aprenda os fundamentos da Linguagem de Programação para Web</p>
            </header>

            <!--
                CONTEÚDO PRINCIPAL (main)
                A tag <main> define a seção de conteúdo principal e único da página.
                Deve haver apenas uma tag <main> por página.
            -->
            <main>
                <!--
                    SEÇÃO 1: O QUE É PHP
                    A tag <section> agrupa conteúdo relacionado tematicamente.
                    Cada tópico da aula está em sua própria seção.
                -->
                <section>
                    <h2>1. O que é PHP?</h2>
                    <p>
                        <strong>PHP</strong> (Hypertext Preprocessor) é uma linguagem de programação
                        do lado do servidor, usada para criar páginas web dinâmicas. PHP é executado
                        no servidor e envia o resultado em HTML para o navegador do cliente.
                    </p>
                    <p>
                        O código PHP é escrito entre as tags <code>&lt;?php ?&gt;</code>
                        e pode ser misturado com HTML em um mesmo arquivo.
                    </p>
                    <div class="example">
                        <h4>Exemplo Básico:</h4>
                        <pre>
                            &lt;?php
                                // Este é um comentário de linha única
                                echo "Olá Mundo!";
                                
                                /* 
                                    Este é um comentário
                                    de múltiplas linhas
                                */
                            ?&gt;
                        </pre>
                    </div>
                </section>

                <!--
                    SEÇÃO 2: VARIÁVEIS E TIPOS DE DADOS
                    Conceitos fundamentais de variáveis em PHP.
                -->
                <section>
                    <h2>2. Variáveis e Tipos de Dados</h2>
                    <p>
                        Uma variável é um espaço de memória que armazena um valor.
                        Em PHP, as variáveis começam com o símbolo <code>$</code>.
                    </p>

                    <h3>Tipos de Dados Básicos:</h3>
                    <ul>
                        <li><code>String</code> - Texto entre aspas simples ou duplas</li>
                        <li><code>Integer</code> - Números inteiros (sem casas decimais)</li>
                        <li><code>Float</code> - Números com casas decimais</li>
                        <li><code>Boolean</code> - Verdadeiro (true) ou Falso (false)</li>
                        <li><code>Array</code> - Coleção de valores</li>
                        <li><code>Object</code> - Instância de uma classe</li>
                        <li><code>NULL</code> - Variável sem valor</li>
                    </ul>

                    <div class="example">
                        <h4>Exemplo de Variáveis:</h4>
                        <pre>
                            &lt;?php
                                // String
                                $nome = "João Silva";
                                
                                // Integer
                                $idade = 25;
                                
                                // Float
                                $altura = 1.75;
                                
                                // Boolean
                                $ativo = true;
                                
                                // Array
                                $frutas = array("Maçã", "Banana", "Laranja");
                                
                                // Exibindo valores
                                echo $nome;
                                echo $idade;
                                echo $frutas[0];
                            ?&gt;
                        </pre>
                    </div>
                </section>

                <!--
                    SEÇÃO 3: OPERADORES
                    Diferentes tipos de operadores em PHP.
                -->
                <section>
                    <h2>3. Operadores</h2>

                    <h3>Operadores Aritméticos:</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Operador</th>
                                <th>Descrição</th>
                                <th>Exemplo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>+</td>
                                <td>Adição</td>
                                <td>5 + 3 = 8</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>Subtração</td>
                                <td>5 - 3 = 2</td>
                            </tr>
                            <tr>
                                <td>*</td>
                                <td>Multiplicação</td>
                                <td>5 * 3 = 15</td>
                            </tr>
                            <tr>
                                <td>/</td>
                                <td>Divisão</td>
                                <td>15 / 3 = 5</td>
                            </tr>
                            <tr>
                                <td>%</td>
                                <td>Módulo (resto)</td>
                                <td>10 % 3 = 1</td>
                            </tr>
                            <tr>
                                <td>**</td>
                                <td>Potência</td>
                                <td>2 ** 3 = 8</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Operadores de Comparação:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                $a = 10;
                                $b = 5;
                                
                                // Igual a
                                $a == $b;  // false
                                
                                // Diferente de
                                $a != $b;  // true
                                
                                // Maior que
                                $a > $b;   // true
                                
                                // Menor que
                                $a < $b;   // false
                                
                                // Idêntico (igual valor e tipo)
                                $a === "10";  // false
                            ?&gt;
                        </pre>
                    </div>

                    <h3>Operadores Lógicos:</h3>
                        <ul>
                            <li><code>&&</code> ou <code>and</code> - E lógico</li>
                            <li><code>||</code> ou <code>or</code> - OU lógico</li>
                            <li><code>!</code> ou <code>not</code> - NÃO lógico</li>
                        </ul>                    
                </section>

                <!--
                    SEÇÃO 4: ESTRUTURAS CONDICIONAIS
                    if, else, elseif e switch.
                -->
                <section>
                    <h2>4. Estruturas Condicionais</h2>

                    <h3>IF / ELSE / ELSEIF:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                $idade = 20;
                                    
                                if ($idade >= 18) {
                                    echo "Você é maior de idade";
                                } elseif ($idade >= 12) {
                                    echo "Você é adolescente";
                                } else {
                                    echo "Você é criança";
                                }
                            ?&gt;
                        </pre>
                    </div>

                    <h3>SWITCH:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                $dia = "segunda";
                                
                                switch($dia) {
                                    case "segunda":
                                        echo "Hoje é segunda-feira";
                                        break;
                                    case "terça":
                                        echo "Hoje é terça-feira";
                                        break;
                                    default:
                                        echo "Dia não reconhecido";
                                }
                            ?&gt;
                        </pre>
                    </div>
                </section>

                <!--
                    SEÇÃO 5: LOOPS (REPETIÇÕES)
                    for, while, do-while e foreach.
                -->
                <section>
                    <h2>5. Loops (Repetições)</h2>

                    <h3>FOR:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                for ($i = 0; $i < 5; $i++) {
                                    echo "Número: " . $i . "&lt;br&gt;";
                                }
                            ?&gt;
                        </pre>
                    </div>

                    <h3>WHILE:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                $i = 0;
                                while ($i < 5) {
                                    echo "Número: " . $i . "&lt;br&gt;";
                                    $i++;
                                }
                            ?&gt;
                        </pre>
                    </div>

                    <h3>FOREACH (para arrays):</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                $frutas = array("Maçã", "Banana", "Laranja");
                                
                                foreach ($frutas as $fruta) {
                                    echo $fruta . "&lt;br&gt;";
                                }
                            ?&gt;
                        </pre>
                    </div>
                </section>

                <!--
                    SEÇÃO 6: FUNÇÕES
                    Criando e usando funções em PHP.
                -->
                <section>
                    <h2>6. Funções</h2>
                    <p>
                        Uma função é um bloco de código reutilizável que realiza uma tarefa específica.
                        As funções ajudam a organizar e modularizar o código.
                    </p>

                    <h3>Sintaxe Básica:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                // Definição de uma função
                                function saudacao($nome) {
                                    return "Olá, " . $nome . "!";
                                }
                                
                                // Chamando a função
                                echo saudacao("Maria");
                                
                                // Função com múltiplos parâmetros
                                function somar($a, $b) {
                                    return $a + $b;
                                }
                                
                                echo somar(5, 3);  // Resultado: 8
                            ?&gt;
                        </pre>
                    </div>

                    <h3>Funções Incorporadas Úteis:</h3>
                    <ul>
                        <li><code>strlen()</code> - Retorna o comprimento de uma string</li>
                        <li><code>str_replace()</code> - Substitui texto em uma string</li>
                        <li><code>strtoupper()</code> - Converte string para maiúscula</li>
                        <li><code>strtolower()</code> - Converte string para minúscula</li>
                        <li><code>explode()</code> - Divide uma string em array</li>
                        <li><code>implode()</code> - Junta elementos de array em string</li>
                        <li><code>count()</code> - Conta elementos de um array</li>
                        <li><code>array_push()</code> - Adiciona elemento ao array</li>
                    </ul>
                </section>

                <!--
                    SEÇÃO 7: ARRAYS
                    Trabalhando com arrays em PHP.
                -->
                <section>
                    <h2>7. Arrays</h2>

                    <h3>Arrays Indexados:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                // Criando um array indexado
                                $cores = array("Vermelho", "Verde", "Azul");
                                
                                // Acessando elementos
                                echo $cores[0];  // Vermelho
                                
                                // Modificando elementos
                                $cores[1] = "Amarelo";
                                
                                // Adicionando elementos
                                $cores[] = "Roxo";
                                
                                // Contando elementos
                                echo count($cores);
                            ?&gt;
                        </pre>
                    </div>

                    <h3>Arrays Associativos:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                // Criando um array associativo
                                $pessoa = array(
                                    "nome" => "João",
                                    "idade" => 30,
                                    "cidade" => "São Paulo"
                                );
                                
                                // Acessando valores pela chave
                                echo $pessoa["nome"];      // João
                                echo $pessoa["idade"];     // 30
                                
                                // Iterando sobre o array
                                foreach ($pessoa as $chave => $valor) {
                                    echo $chave . ": " . $valor . "&lt;br&gt;";
                                }
                            ?&gt;
                        </pre>
                    </div>
                </section>

                <!--
                    SEÇÃO 8: PROCESSAMENTO DE FORMULÁRIOS
                    Como processar dados enviados por formulários em PHP.
                -->
                <section>
                    <h2>8. Processamento de Formulários</h2>
                    <p>
                        PHP pode capturar dados de formulários HTML usando as superglobals
                        <code>$_GET</code> e <code>$_POST</code>.
                    </p>

                    <h3>Formulário HTML:</h3>
                    <div class="example">
                        <h4>Exemplo HTML:</h4>
                        <pre>
                            &lt;form method="POST" action="processar.php"&gt;
                                &lt;label&gt;Nome:&lt;/label&gt;
                                &lt;input type="text" name="nome"&gt;&lt;br&gt;&lt;br&gt;
                                
                                &lt;label&gt;Email:&lt;/label&gt;
                                &lt;input type="email" name="email"&gt;&lt;br&gt;&lt;br&gt;
                                
                                &lt;input type="submit" value="Enviar"&gt;
                            &lt;/form&gt;
                        </pre>
                    </div>

                    <h3>Processamento em PHP:</h3>
                    <div class="example">
                        <h4>Exemplo PHP (processar.php):</h4>
                        <pre>
                            &lt;?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    // Capturando dados do formulário
                                    $nome = $_POST["nome"];
                                    $email = $_POST["email"];
                                    
                                    // Validando dados
                                    if (!empty($nome) && !empty($email)) {
                                        echo "Olá, " . $nome . "!&lt;br&gt;";
                                        echo "Seu email: " . $email;
                                    } else {
                                        echo "Por favor, preencha todos os campos.";
                                    }
                                }
                            ?&gt;
                        </pre>
                    </div>

                    <h3>Variáveis Superglobais Úteis:</h3>
                    <ul>
                        <li><code>$_GET</code> - Dados enviados na URL (método GET)</li>
                        <li><code>$_POST</code> - Dados do formulário (método POST)</li>
                        <li><code>$_SERVER</code> - Informações do servidor</li>
                        <li><code>$_FILES</code> - Arquivos enviados</li>
                        <li><code>$_SESSION</code> - Dados da sessão</li>
                        <li><code>$_COOKIE</code> - Dados de cookies</li>
                    </ul>
                </section>

                <!--
                    SEÇÃO 9: CLASSES E OBJETOS
                    Programação orientada a objetos em PHP.
                -->
                <section>
                    <h2>9. Classes e Objetos (POO)</h2>
                    <p>
                        A Programação Orientada a Objetos (POO) organiza o código em classes
                        que definem objetos com propriedades e métodos.
                    </p>

                    <h3>Definindo uma Classe:</h3>
                    <div class="example">
                        <h4>Exemplo:</h4>
                        <pre>
                            &lt;?php
                                class Pessoa {
                                    // Propriedades
                                    public $nome;
                                    public $idade;
                                    
                                    // Construtor
                                    public function __construct($nome, $idade) {
                                        $this->nome = $nome;
                                        $this->idade = $idade;
                                    }
                                    
                                    // Método
                                    public function apresentar() {
                                        return "Olá, meu nome é " . $this->nome;
                                    }
                                }
                                
                                // Criando um objeto
                                $pessoa = new Pessoa("Carlos", 28);
                                echo $pessoa->apresentar();
                            ?&gt;
                        </pre>
                    </div>
                </section>

                <!--
                    SEÇÃO 10: BOAS PRÁTICAS
                    Dicas importantes para escrever código PHP profissional.
                -->
                <section>
                    <h2>10. Boas Práticas</h2>
                    <ul>
                        <li>✓ Sempre validar dados de entrada do usuário</li>
                        <li>✓ Use nomes descritivos para variáveis e funções</li>
                        <li>✓ Indente o código corretamente para melhor legibilidade</li>
                        <li>✓ Use comentários para explicar código complexo</li>
                        <li>✓ Evite usar variáveis globais desnecessariamente</li>
                        <li>✓ Use prepared statements para consultas SQL</li>
                        <li>✓ Trate erros e exceções apropriadamente</li>
                        <li>✗ Nunca confie em dados enviados pelo cliente</li>
                        <li>✗ Nunca exponha informações sensíveis no código</li>
                        <li>✗ Nunca use valores estáticos diretamente no código, use constantes</li>
                    </ul>
                </section>
            </main>

            <!--
                RODAPÉ (footer)
                A tag <footer> define a seção de rodapé semântica da página.
                Geralmente contém informações de copyright, links legais, etc.
            -->
            <footer>
                <?php
                // Exibindo data/hora dinamicamente com PHP
                $ano_atual = date("Y");
                echo "<p>Cleiton Assis &copy; " . $ano_atual . " | Curso Técnico em Informática - Módulo II</p>";
                echo "<p>Linguagem de Programação - PHP Essencial</p>";
                echo "<p>Data e Hora agora capturada pelo seu servidor PHP: " . date("d/m/Y H:i:s") . "</p>";
                ?>
            </footer>
        </div>
    </body>

</html>
