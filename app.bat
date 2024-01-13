@echo off
setlocal

set "targetFolder=app"

if exist "%targetFolder%" (
    echo A "%targetFolder%" mappa már létezik.
    exit /b 1
) else (
    echo A "%targetFolder%" mappa még nem létezik, folytatás...
)

composer create-project laravel/laravel app

endlocal