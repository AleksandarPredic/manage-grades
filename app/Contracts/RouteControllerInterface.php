<?php


namespace PredicMVC\Contracts;

/**
 * Interface Controller
 *
 * @package PredicMVC\Contracts
 */
interface RouteControllerInterface
{

    /**
     * Default controller method
     *
     * @param null $param
     * @return void
     */
    public function index($param = null): void;
}
