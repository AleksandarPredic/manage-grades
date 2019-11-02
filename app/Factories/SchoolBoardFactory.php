<?php


namespace PredicMVC\Factories;


use PredicMVC\UseCases\SchoolBoardCMS;
use PredicMVC\UseCases\SchoolBoardCMSB;

/**
 * Class SchoolBoardFactory
 *
 * @package PredicMVC\Factories
 */
class SchoolBoardFactory
{

    /**
     * @param string $schoolBoardName
     * @return SchoolBoardCMS|SchoolBoardCMSB|null
     */
    public static function make(string $schoolBoardName)
    {
        switch (strtolower($schoolBoardName)) {
            case 'csm':
                return new SchoolBoardCMS();
                break;

            case 'csmb':
                return new SchoolBoardCMSB();
                break;

            default:
                return null;

        }
    }
}
