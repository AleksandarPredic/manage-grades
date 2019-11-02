<?php


namespace PredicMVC\Models;


use \PDO;
use \PDOException;
use PredicMVC\Abstracts\Models\AcademicAbstract;
use PredicMVC\Contracts\Models\AcademicGradesInterface;

/**
 * Class StudentsModel
 *
 * @package PredicMVC\Models
 */
final class StudentsModel extends AcademicAbstract implements AcademicGradesInterface
{

    /**
     * Set the object values
     */
    public function loadData(): bool
    {
        try {
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn = $this->db->prepare(
                'SELECT *
                        FROM students
                        WHERE id = ' . $this->id
            );

            $conn->execute();

            // set the resulting array to associative
            $conn->setFetchMode(PDO::FETCH_ASSOC);

            $result = $conn->fetch();

            if ($result === false) {
                $this->exists = false;

                return false;
            }

            $this->name = $result['name'];
            $this->board_id = intval($result['board_id']);
            $this->setGrades();
            $this->exists = true;
            var_dump($result);

            return true;

        } catch (PDOException $e) {
            var_dump($e->getMessage());

            // TODO: Handle exception or log it
            return false;
        }
    }

    /**
     * Set grades property
     *
     * @throws PDOException
     */
    private function setGrades(): void
    {
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn = $this->db->prepare(
            'SELECT value , subject
                    FROM grades
                    WHERE student_id = ' . $this->id
        );

        $conn->execute();

        // set the resulting array to associative
        $conn->setFetchMode(PDO::FETCH_ASSOC);

        $this->grades = $conn->fetchAll();
    }


}
