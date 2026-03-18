:: ESCONDE O COMANDO E HABILITA CARACTERES UTF8 COM ACENTUAÇÃO
@echo off
chcp 65001 >nul

:: SOLICITA O NOME DO USUÁRIO
echo Como você se chama?
set /p nome=

:: INÍCIO DO MENU DE OPÇÕES
:menu
cls
echo Olá, %nome%, seja bem vindo!
echo.
echo =========================
echo   MENU DE OPÇÕES
echo =========================
echo.
echo 1 - Testar conexão com a internet
echo 2 - Informações do sistema
echo 3 - Informações de ativação do sistema
echo 4 - Sair
echo.

:: SOLICITA AO USUÁRIO QUE ESCOLHA UMA OPÇÃO
set /p opcao=Escolha uma opção: 

if %opcao%==1 goto teste
if %opcao%==2 goto sistema
if %opcao%==3 goto ativacao
if %opcao%==4 goto sair

:: CASO O USUÁRIO DIGITE UMA OPÇÃO INVÁLIDA, EXIBE UMA MENSAGEM DE ERRO E VOLTA PARA O MENU
echo.
echo Opção inválida!
pause
goto menu

:: 1ª OPÇÃO - TESTAR CONEXÃO COM A INTERNET
:teste
cls
echo Testando conexão com a internet...
ping www.google.com
pause
goto menu

:: 2ª OPÇÃO - INFORMAÇÕES DO SISTEMA
:sistema
cls
echo Buscando Informações do sistema...
systeminfo
pause
goto menu

:: 3ª OPÇÃO - INFORMAÇÕES DE ATIVAÇÃO DO SISTEMA
:ativacao
cls
echo Buscando Informaçõesde ativação...
start slmgr /xpr

:: 4ª OPÇÃO - SAIR DO PROGRAMA
:sair
echo Encerrando o programa...
:: AGUARDA 2 SEGUNDOS ANTES DE FECHAR O PROGRAMA
timeout /t 2 >nul
:: FECHA O PROGRAMA
exit
:: PAUSA O PROGRAMA PARA QUE O USUÁRIO POSSA VER AS INFORMAÇÕES ANTES DE FECHAR
pause