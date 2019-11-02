<?php


namespace PredicMVC\Factories;


use PredicMVC\UseCases\FormaterXML;
use PredicMVC\UseCases\FormatterJson;
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
                return new SchoolBoardCMS(new FormatterJson());
                break;

            case 'csmb':
                return new SchoolBoardCMSB(new FormaterXML());
                break;

            default:
                return null;

        }
    }
}
