Guide to Viusalization. 
To make the php part of the mailing list work you need to download xampp https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe

Install it and run it as administrator.
then run apache and mySQL.
then go to your browser and type localhost/phpmyadmin and click again, then name emaildb once created click on sql and write this query: CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    E-mail: VARCHAR(50)
);
