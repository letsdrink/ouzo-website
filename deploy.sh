find . -type f -exec curl --ftp-create-dirs -T {} -u $FTP_USER:$FTP_PASSWORD ftp://ftp.bbankowski.nazwa.pl/{} \;
