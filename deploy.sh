find . -type f -exec curl -u $FTP_USER:$FTP_PASSWORD --ftp-create-dirs -T {} ftp://ftp.bbankowski.nazwa.pl/{} \;
