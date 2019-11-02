<?php

namespace PredicMVC\Models;

use PredicMVC\Libs\Model;

/**
 * Class HomeModel - Responsible for items CRUD
 *
 * @package PredicMVC\Models
 */
class HomeModel extends Model
{

    /**
     * Return title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Hello World';
    }

    /**
     * Return subtitle
     *
     * @return string
     */
    public function getSubtitle(): string
    {
        return 'Custom framework';
    }

}
