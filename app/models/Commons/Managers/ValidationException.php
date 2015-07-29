<?php

namespace Commons\Managers;

class ValidationException extends \Exception
{
    protected $errors;

    public function __construct($message, $errors)
    {
        $this->errors = $errors;
        parent::__construct($message);
    }

    /**
     * Ademas de que valide los datos pueda guardarlos tambien
     */
    public function getErrors()
    {
        return $this->errors;
    }
}