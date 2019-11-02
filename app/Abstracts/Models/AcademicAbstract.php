<?php


namespace PredicMVC\Abstracts\Models;

use PredicMVC\Libs\Model;

/**
 * Class AcademicAbstract
 *
 * @package PredicMVC\Abstracts\Models
 */
class AcademicAbstract extends Model
{
    /**
     * Academic name
     * @var string
     */
    protected $name;

    /**
     * Academic id
     * @var int
     */
    protected $id;

    /**
     * Academic grades
     * @var array
     */
    protected $grades = [];

    /**
     * Board id
     * @var int
     */
    protected $boardId;

    /**
     * If academic exists in DB
     * @var bool
     */
    protected $exists;

    /**
     * Return academic name
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Return academic id
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Return Board id
     * @return int
     */
    public function getBoardId(): int {
        return $this->boardId;
    }

    /**
     * Return academic grades
     */
    public function getGrades(): array {
        $this->grades;
    }

    /**
     * Check if academic exists in DB
     * @return bool
     */
    public function exists(): bool {
        return $this->exists;
    }

    /**
     * Set academic id
     * @param int $id
     */
    public function setId(int $id): void {
        $this->id = $id;
    }
}
