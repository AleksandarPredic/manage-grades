<?php


namespace PredicMVC\Contracts\Views;

/**
 * Interface View
 *
 * @package PredicMVC\Contracts
 */
interface ViewInterface
{

    /**
     * Render view $template
     *
     * @param string $template Template to render
     */
    public function render(string $template): void;
}
