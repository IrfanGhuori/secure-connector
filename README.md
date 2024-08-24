
[![Behance](https://img.shields.io/badge/Behance-1769ff?logo=behance&logoColor=white)](https://behance.net/Irfan_Ghuori) [![Facebook](https://img.shields.io/badge/Facebook-%231877F2.svg?logo=Facebook&logoColor=white)](https://facebook.com/irfan.whitehead) [![LinkedIn](https://img.shields.io/badge/LinkedIn-%230077B5.svg?logo=linkedin&logoColor=white)](https://linkedin.com/in/irfan-ghuori-39b410155/) [![Pinterest](https://img.shields.io/badge/Pinterest-%23E60023.svg?logo=Pinterest&logoColor=white)](https://pinterest.com/irfanghuori_) 

# 💻 full-Stack:
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) ![Apache Groovy](https://img.shields.io/badge/Apache%20Groovy-4298B8.svg?style=for-the-badge&logo=Apache+Groovy&logoColor=white) ![AssemblyScript](https://img.shields.io/badge/assembly%20script-%23000000.svg?style=for-the-badge&logo=assemblyscript&logoColor=white) ![Nodemon](https://img.shields.io/badge/NODEMON-%23323330.svg?style=for-the-badge&logo=nodemon&logoColor=%BBDEAD) ![NodeJS](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white) ![FastAPI](https://img.shields.io/badge/FastAPI-005571?style=for-the-badge&logo=fastapi) ![Xamarin](https://img.shields.io/badge/Xamarin-3199DC?style=for-the-badge&logo=xamarin&logoColor=white) ![Apache](https://img.shields.io/badge/apache-%23D42029.svg?style=for-the-badge&logo=apache&logoColor=white) ![Apache Airflow](https://img.shields.io/badge/Apache%20Airflow-017CEE?style=for-the-badge&logo=Apache%20Airflow&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white) ![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white) ![SQLite](https://img.shields.io/badge/sqlite-%2307405e.svg?style=for-the-badge&logo=sqlite&logoColor=white) ![Sequelize](https://img.shields.io/badge/Sequelize-52B0E7?style=for-the-badge&logo=Sequelize&logoColor=white) ![Adobe](https://img.shields.io/badge/adobe-%23FF0000.svg?style=for-the-badge&logo=adobe&logoColor=white) ![Adobe Illustrator](https://img.shields.io/badge/adobe%20illustrator-%23FF9A00.svg?style=for-the-badge&logo=adobe%20illustrator&logoColor=white) ![GitHub](https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white) ![Git](https://img.shields.io/badge/git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white)



# Connecting to MySQL in PHP using PDO with Session Manager
PDO is a database access layer that provides a fast and consistent interface for accessing and managing databases in PHP applications. Every DBMS has a specific PDO driver that must be installed when you are using PDO in PHP applications.
-:I'm highly experienced in large size web portals:-

## PDO Configuration


### Installation 
------------
Important if you're installing from the composer 
you have to modify the ENV file path it will 
```php
function : name _CreateVars()
Location : vendor\pdo\connecter\src\helper.php
Line Number: 56
Modify : self::$Path = "/.env"; | to -> self::$Path = "vendor/pdo/connecter/src/.env";
```
and if you're cloning the GitHub repository and use the same structure, Please share your feedback  


```php
require_once("vendor/autoload.php");
use Src\Connect_me;

 -- How to use it --
$db = new Connect_me();
$qry = $db->conn->prepare("SELECT * FROM `tablename` WHERE 1");
$qry->execute();
$row = $qry->fetch(PDO::FETCH_OBJ);
echo $row->user_code;
```


 ## Secure Session Package
If you're on a shared host and use sessions for storing sensitive data, 
it's a good idea to store session files in your custom location and encrypt them.

### Installation
```php
require_once("vendor/autoload.php");
use Src\create_session;
-------------------------
 And use it
$session->set('name', 'John');
```
### Configuration

| Method        | OOP Code Script |
| ------------- | -------------   |
| Basic Usage   | $session = new Session($prefix);   |
| Second way  | $session->prefix('test_')->set('name', 'Irfan');  it will set the session as "test_name"    |
| Get the session prefix | $sesssion->getPrefix(); will return the session prefix |
| Get all session keys | $sesssion->all(); |
| Add new session | $session->set($key, $value); |
| Session by Chaining method | $session->set('name', 'Irfan')->set('age', 19)->set('city', 'Baghdad'); |
| session by providing an array | $session->set(['name' => 'Irfan', 'location' => [ 'country' => 'iraq' ]]); |
| Get one session by key | $sesssion->get($key); // will use the default prefix |
| Get All Session by specific prefix | $session->fromPrefix('test'); Returns an array of all sessions that have a "test" prefix|
| Check if the session exists | Session::has($key); |
| Remove Session by key        | $sesssion->remove($key); |
| by chaining method |  $session->remove('name')->remove('age')->remove('location'); |
| by providing an array of keys  | $session->remove(['name', 'age', 'location']); |
| or just like this  | $session->remove('name', 'age', 'location'); |
| Get the session id | $sesssion->id();  will return the id of the session. |
| Regenerate the session id   | $sesssion->regenerate_id();  will return the id of the session. |
| Remove all session at one        | $session->destroy(); |





  ## 💰 You can help me by Donating
  [![BuyMeACoffee](https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/irfanghuori) 

  




