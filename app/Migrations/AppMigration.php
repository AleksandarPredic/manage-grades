<?php


namespace PredicMVC\Migrations;

use \PDO;
use \PDOException;
use PredicMVC\Libs\Model;

/**
 * Class AppMigration
 *
 * TODO: Implement Migration feature in the future as now we have not time for it
 * @package PredicMVC\Migrations
 */
class AppMigration extends  Model
{

    /**
     * Create tables in DB
     * @return bool
     */
    public function createTables() {

        try {

            $this->db->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
            $conn = $this->db->prepare(
                "CREATE TABLE students (
                id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name varchar(255) NOT NULL,
                board_id tinyint NOT NULL
                )ENGINE=InnoDB DEFAULT CHARSET=utf8;
                
                CREATE TABLE grades (
                  id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  value tinyint NOT NULL,
                  subject varchar(255) NOT NULL,
                  student_id int(10) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                
                CREATE TABLE boards (
                id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name varchar(255) NOT NULL
                )ENGINE=InnoDB DEFAULT CHARSET=utf8;
                
                ALTER TABLE students
                ADD FOREIGN KEY (board_id)
                REFERENCES boards(id);
                
                ALTER TABLE grades
                ADD FOREIGN KEY (student_id)
                REFERENCES students(id);"
            );

            return $conn->execute();
        }
        catch(PDOException $e) {
            return false;
        }

    }
}
