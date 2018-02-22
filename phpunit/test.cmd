@ECHO OFF
IF NOT EXIST phpunit.phar curl -L -o phpunit.phar https://phar.phpunit.de/phpunit.phar
REM @php ".\phpunit.phar" --bootsrap phpunit/bootstrap.php --c phpunit/phpunit.xml
@php ".\phpunit.phar"
REM CALL cat logs\testdox.txt
CALL MORE logs\testdox.txt
