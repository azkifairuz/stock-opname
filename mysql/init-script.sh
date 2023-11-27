#!/bin/bash

# Menjalankan perintah MySQL yang diinginkan
mysql -u root -ppassword -e "GRANT ALL ON stock_opname.* TO 'stock_user'@'%';"
