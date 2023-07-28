# Caputre_Creds_Website
This is a small and simple project for education purposes only

Testing on Apache2 with MariaDB


![image](https://github.com/Karmhack/Caputre_Creds_Website/assets/78755695/aa7eae1e-4ac7-47aa-a85b-3c698e23d847)

![image](https://github.com/Karmhack/Caputre_Creds_Website/assets/78755695/6788afa1-f0da-466d-9375-73a67fb26411)

You can use the command `sudo mysql_secure_installation` to install your sql database. 

Then create the database and the table :

`create database <database_name> default character set utf8 collate utf8_unicode_ci;`
`create table <table name> (username VARCHAR(255), passord VARCHAR(255))`;

 Then do not forget to edit the logs.php file with the correct sql credentials and names.

