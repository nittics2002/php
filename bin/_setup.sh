#!/bin/bash

set -e
set -x

###
# user setting
###
PHPUNIT=phpunit-9.5.10.phar


CURRENT_PATH="$(cd $(dirname $0) && pwd)"

cd "${CURRENT_PATH}"

sudo apt install -y php8.1-cli php8.1-xml php8.1-mbstring
sudo apt install -y libpcre2-8-0 --only-upgrade 

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"


wget "https://phar.phpunit.de/${PHPUNIT}"

mv "${PHPUNIT}" phpunit.phar

[[ $(echo ${PATH} |grep ${CURRENT_PATH} -c) = 0 ]] && \
    export PATH="${PATH}:${CURRENT_PATH}" && echo "path=${PATH}"
