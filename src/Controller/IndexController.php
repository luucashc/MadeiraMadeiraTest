<?php

namespace Controller;

/**
 * Initial controller.
 *
 */
class IndexController extends Controller
{
    public function validate(): array
    {
        return [];
    }

    public function show(array $errors = [])
    {
        /* Show index */
        include BASE_PATH . '/views/index.php';
    }

    public function process()
    {
    }
}
