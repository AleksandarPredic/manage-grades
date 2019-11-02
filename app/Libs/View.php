<?php

namespace PredicMVC\Libs;

use PredicMVC\Contracts\ViewInterface;

/**
 * Class View - Responsible for rendering app templates
 *
 * @package PredicMVC\Libs
 */
class View implements ViewInterface
{

    /**
     * Render view $template
     *
     * @param string $template Template to render
     */
    public function render(string $template): void
    {
        include_once BASE_PATH . 'views/public/partials/header.php';
        include_once BASE_PATH . 'views/public/partials/error_messages.php';
        include_once BASE_PATH . 'views/public/' . filter_var($template, FILTER_SANITIZE_STRING);
        include_once BASE_PATH . 'views/public/partials/footer.php';
    }

}
