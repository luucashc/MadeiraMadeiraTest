<?php

namespace Controller;

use Model\Calculation;

class CalculationController extends Controller
{
    public function show(array $errors = array())
    {
        include BASE_PATH . '/views/index.php';
    }

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

    public function process()
    {
        $number = Calculation::calculation(trim($_POST['number']));

        header('Location: /index.php');

        exit;
    }
}
