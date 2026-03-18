REM Desativa a exibicao dos comandos na tela (mostra apenas o resultado)
@echo off
REM ==========================================
REM SISTEMA DE CADASTRO DE ALUNOS
REM ==========================================

REM Define titulo e cor do prompt
title Sistema de Cadastro
color 0A

REM ===============================
REM ROTULO DO MENU PRINCIPAL
REM ===============================
:menu

REM Limpa a tela
cls

REM Exibe o cabecalho do sistema
echo =============================
echo   SISTEMA DE CADASTRO
echo =============================
echo.

REM Exibe as opcoes do menu
echo 1 - Cadastrar Aluno
echo 2 - Listar Alunos
echo 3 - Sair
echo.

REM Solicita que o usuario digite uma opcao
set /p opcao=Escolha uma opcao: 

REM Verifica a opcao escolhida
if "%opcao%"=="1" goto cadastrar
if "%opcao%"=="2" goto listar
if "%opcao%"=="3" goto sair

REM Caso nenhuma opcao valida seja digitada
echo Opcao invalida!
pause
goto menu

REM ===============================
REM AREA DE CADASTRO
REM ===============================
:cadastrar
cls
echo ===== Cadastro de Aluno =====
echo.

REM Solicita o nome e idade do aluno
set /p nome=Digite o nome do aluno: 
set /p idade=Digite a idade do aluno: 

REM Salva os dados no arquivo alunos.txt
echo Nome: %nome% - Idade: %idade% >> alunos.txt

REM Salta uma linha e imprime a msg de sucesso
echo.
echo Aluno cadastrado com sucesso!
pause
goto menu

REM ===============================
REM AREA DE LISTAGEM COM MENU INTERNO
REM ===============================
:listar
cls
echo ===== Lista de Alunos =====
echo.

REM Verifica se o arquivo alunos.txt existe. Se não existir, exibe a mensagem, pausa o código e em seguida volta ao menu principal
if not exist alunos.txt (
    echo Nenhum aluno cadastrado ainda.
    echo.
    pause
    goto menu
)

REM Mostra o conteudo do arquivo
type alunos.txt
echo.

:menu_listagem
echo 1 - Limpar lista de alunos
echo 2 - Voltar ao menu principal
echo.
set /p escolha=Escolha uma opcao: 

if "%escolha%"=="1" (
    del alunos.txt
    echo.
    echo Lista apagada com sucesso!
    echo.
    pause
    goto menu
) else if "%escolha%"=="2" (
    goto menu
) else (
    echo Opcao invalida!
    echo.
    goto menu_listagem
)

REM ===============================
REM SAIR DO SISTEMA
REM ===============================
:sair
echo Encerrando o sistema...
timeout /t 2 >nul
exit