<?php

namespace Controller;

use Model\Calculation;


/**
 * Controller to check for errors and if they are not found,
 * return the call result to the Calculation model.
 *
 */
class CalculationController extends Controller
{
    /* creating array with validations */
    public function validate(): array
    {
        $errors = array();

        $number = trim($_POST['number']);

        if(empty($number)) {
            $errors['number_empty'] = 'O campo não pode estar vazio!';
        }

        if (!preg_match('/^[0-9]+$/i', $number)) {
            $errors['number'] = 'Por favor, insira apenas números!';
        }

        return $errors;
    }

    public function show(array $errors = array())
    {
        include BASE_PATH . '/views/index.php';
    }

    public function process()
    {
        $calculation = Calculation::calculation(trim($_POST['number']));

        include BASE_PATH . '/views/index.php';
    }
}
