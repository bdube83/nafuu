Version control:
git@github.com:bdube83/nafuu.git

Testing and Development:
https://ide.c9.io/bdube83/nafuu

SQL Storage:
-- Get:
mysql-ctl cli
source sql/nafuucoz_c9.sql;

-- Save:
mysql-ctl cli
GRANT ALL PRIVILEGES ON *.* TO C9_USER@localhost;
quit;
mysqldump -u C9_USER c9 > sql/backup.sql

Host:
FTP: ftp.nafuu.co.za
Username: bdube83@nafuu.co.za

