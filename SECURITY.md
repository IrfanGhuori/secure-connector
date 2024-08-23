

## What is the difference between MySQL, MySQLi and PDO?

To understand the difference between MySQL, MySQLi, and PDO, we must know about them individually. These are just the PHP APIs used to access the MySQL database and tables. Developers can choose either of these for their project, however, it should be noted that MySQL cannot be used with PHP 7 and newer versions. However, developers can use MySQL with PHP 5, which is now deprecated. Let's find out a little more about each of them:

MySQL: This was the main extension created to help PHP applications send and receive data from MySQL databases. However, MySQL has been deprecated and removed as of PHP 7 and newer versions. This is why it is not recommended for new projects, and why MySQLi and PDO extensions are used more today.
MySQLi: The 'i' in MySQLi stands for better. Hence it is also called the improved version of MySQL. It has many new features which will be covered later in the article.
PDO - PHP Data Objects: The main advantage of using PDO is that it supports and provides a uniform way of accessing 11 different databases.

PDO enters the ring. This extension is all about flexibility and future-proofing your code. Here's why PDO might be the champion in disguise: The Database Don: PDO isn't just a one-trick pony. It's like a Swiss Army Knife for databases, supporting a whopping 12 different database management systems! Need to switch from MySQL to PostgreSQL down the line? No problem, PDO handles it all.
- The Database Don: PDO isn't just a one-trick pony. It's like a Swiss Army Knife for databases, supporting a whopping 12 different database management systems!
  Need to switch from MySQL to PostgreSQL down the line? No problem, PDO handles it all.
- Security First: PDO is a champion for secure coding. It enforces the use of prepared statements, which are like shields against those nasty SQL injection attacks.
  Think of it as your code's bodyguard.
- Object-Oriented Oasis: For the modern developer, PDO's object-oriented approach makes your code cleaner and more maintainable.
  It's like writing poetry compared to procedural prose.


Databases supported by PDO are as follows:
- 1 Firebird/Interbase
- 2 MS SQL Server
- 3 CUBRID
- 4 IBM
- 5 Informix
- 6 MS SQL Server 
- 7 Oracle
- 8 MySQL
- 9 ODBC
- 10 DB2
- 11 PostgreSQL 
- 12 4D
- 13 SQLite
----------------------
### Secure Session Package. 
The session data are encrypted using a random key stored in a cookie variable starting with the prefix KEY_.
This random key is generated using the random_bytes() function of PHP 7. For PHP 5 versions we used the paragonie/random_compat project which is a polyfill for random_bytes().
We also generated a random authentication key stored in the same cookie variable. The value stored in the KEY_ cookie is the Base64 representation of the encryption key concatenated with the authentication key.

------------------------------
### Reporting a Vulnerability
Please report (suspected) security vulnerabilities to IrfanGhuori@yandex.com You will receive a response from us within 48 hours. 
If the issue is confirmed, we will release a patch as soon as possible depending on complexity but historically within a few days.
 
