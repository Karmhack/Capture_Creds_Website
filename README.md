## Eng

This is a small and simple project for education purposes only

Each login request sent via this web page is stored in a SQL database then the user is redirected to another address (google.com in this example).

Tested on Apache2 with MariaDB


![image](https://github.com/Karmhack/Caputre_Creds_Website/assets/78755695/aa7eae1e-4ac7-47aa-a85b-3c698e23d847)

![image](https://github.com/Karmhack/Caputre_Creds_Website/assets/78755695/6788afa1-f0da-466d-9375-73a67fb26411)

You can use the command `sudo mysql_secure_installation` to install your sql database. 

Then create the database and the table :

`create database <database_name> default character set utf8 collate utf8_unicode_ci;`

`create table <table name> (username VARCHAR(255), passord VARCHAR(255))`;

 Then do not forget to edit the logs.php file with the correct sql credentials and DB / tables names.

## Fr

Il s'agit d'un petit projet tout simple réalisé à des fins éducatives uniquement.

Chaque demande de connexion envoyée via cette page web est stockée dans une base de données SQL puis l'utilisateur est redirigé vers une autre adresse (google.com dans cet exemple).

Testé sur Apache2 avec MariaDB

![image](https://github.com/Karmhack/Caputre_Creds_Website/assets/78755695/aa7eae1e-4ac7-47aa-a85b-3c698e23d847)

![image](https://github.com/Karmhack/Caputre_Creds_Website/assets/78755695/6788afa1-f0da-466d-9375-73a67fb26411)

Vous pouvez utiliser la commande `sudo mysql_secure_installation` pour installer votre base de données SQL. 

Créez ensuite la base de données et la table :
`create database <database_name> default character set utf8 collate utf8_unicode_ci;`

`create table <table name> (username VARCHAR(255), passord VARCHAR(255))`;

 Ensuite, n'oubliez pas d'éditer le fichier logs.php avec les identifiants SQL et les noms de la BD et de la table.
