@echo off
setlocal

:: BASEDIR é a pasta onde está o .bat (ex: ...\scripts\)
set "BASEDIR=%~dp0"

:: Remove a barra final
set "BASEDIR=%BASEDIR:~0,-1%"

:: Sobe um nível (remover o "\scripts")
for %%a in ("%BASEDIR%\..") do set "PROJECTDIR=%%~fa"

sass --watch "%PROJECTDIR%\public\css\panel.scss" "%PROJECTDIR%\public\css\panel.css"

pause
