<?php
require_once(ROOT . './Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT . './Model/Factory/UserFactory.php');
require_once(ROOT . './Service/PasswordCheck.php');

class UserRepository
{
    use PasswordCheck;

    private /*?PDO */$dbConnexion; // typage de props en 7.4+ only
    private $userFactory;

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnection();
        $this->dbConnexion = $mysqlDbConnexion->connect();
        $this->userFactory = new UserFactory();
    }

    public function find(string $username, string $pw) : bool{
        $sql = 'SELECT * FROM users WHERE username="'.$username.'"';
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch();

        var_dump($user);

        return $this->pwCheck($pw, $user['pw']);
    }

    // refacto en clean code

}