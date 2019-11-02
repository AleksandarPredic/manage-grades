<?php


namespace PredicMVC\Contracts\Controllers;

/**
 * Interface Controller
 *
 * @package PredicMVC\Contracts
 */
interface RouteControllerInterface
{

    /**
     * HomeControllerInterface constructor.
     *
     * @param string $name
     */
    public function __construct(string $name = '');

    /**
     * Default controller method
     *
     * @param null $param1
     * @param null $param2
     * @return mixed
     */
    public function index($param1 = null, $param2 = null);
}
