<?php

namespace PredicMVC\Libs;

/**
 * Class Controller
 *
 * @package PredicMVC\Libs
 */
class Controller
{

    /**
     * View class object
     *
     * @var object View
     */
    public $view;

    /**
     * Model for the appropriate controller
     *
     * @var object
     */
    public $model;

    /**
     * Controller constructor. Set view and model for the MVC
     *
     * @param string $name Model and Controller name
     */
    public function __construct(string $name = '')
    {
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $this->view = new View();
        $this->view->controllerName = $name;

        $modelName = '\PredicMVC\Models\\' . ucfirst($name) . 'Model';

        if (class_exists($modelName)) {
            $this->model = new $modelName();
        }
    }

    /**
     * Generate nonce
     *
     * @return string
     */
    protected function createNonce(): string
    {
        $nonce = uniqid(getenv('NONCE_PREFIX'));
        $_SESSION['nonce'] = $nonce;

        return $nonce;
    }

    /**
     * Check if nonce is valid
     *
     * @param string $nonce
     * @return bool
     */
    protected function checkNonce($nonce): bool
    {
        // Check nonce
        if (($_SESSION['nonce'] !== $nonce)) {
            return false;
        }

        return true;
    }

    /**
     * Set form fields values before form submission
     *
     * @param $array
     * @use $_SESSION
     */
    protected function setOldFormValues($array): void
    {
        $_SESSION['form_fields'] = $array;
    }

    /**
     * Redirect to page with message
     *
     * @param string $path    Relative url path
     * @param null   $message Message to display
     */
    protected function redirect(string $path, $message = null): void
    {
        $url = URL . $path;

        if ($message) {
            $url .= '?message=' . urlencode(strip_tags($message));
        }

        header('Location: ' . $url);
        die();
    }

}
