<?php

namespace Controller;

/**
 * Abstract Controller para tratar o request.
 *
 */
abstract class Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($form_errors = $this->validate()) {
                $this->show($form_errors);
            } else {
                $this->process();
            }
        } else {
            $this->show();
        }
    }

    /* forces these classes to contain these functions */
    abstract public function validate(): array;

    abstract public function show(array $errors);

    abstract public function process();
}
