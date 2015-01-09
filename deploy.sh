echo "deploying";
echo $FTP_USER:$FTP_PASSWORD;
curl --ftp-create-dirs -T index.php -u $FTP_USER:$FTP_PASSWORD ftp://ftp.bbankowski.nazwa.pl/index.php

