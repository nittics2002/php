#!/bin/bash

cd "$(dirname $0)"

sudo apt install php8.1-cli php8.1-xml php8.1-mbstring
sudo apt install libpcre2-8-0 --only-upgrade 

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"


PHPUNIT=phpunit-9.5.10.phar
wget "https://phar.phpunit.de/${PHPUNIT}"

mv "${PHPUNIT}" phpunit.phar

