#!/bin/bash

##面倒すぎるので使えない




set -e
set -x

#setting
SAVE_DIR=~/.cache/phpunit
BIN_FILE=/usr/local/bin/phpunit
PHPUNIT_URL=https://phar.phpunit.de/
PHPUNIT_INFO_FILE=index.html
#

if [ ! -d "${SAVE_DIR}" ] ;
then
    mkdir "${SAVE_DIR}"
fi

wget \
    -P "${SAVE_DIR}" \
    ${PHPUNIT_URL}

cat "${SAVE_DIR}/${PHPUNIT_INFO_FILE}" \
    |grep "phpunit-.*phar" \
    |sed -r -e '1q' 
    
    
    ##面倒すぎる


exit






wget \
    -P "${SAVE_DIR}" \
    

cat <<-EOL > "${BIN_FILE}"
    #!/bin/bash
    php ${SAVE_DIR} $*
EOL
    
chmod +x "$BIN_FILE"

ls -l "$BIN_FILE"
