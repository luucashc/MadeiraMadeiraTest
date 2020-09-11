<?php

namespace Controller;

/**
 * [IndexController description]
 *
 */
class IndexController extends Controller
{
    public function index()
    {
        parent::index();
    }

    public function show(array $errors = [])
    {
        /* Show index */
        include BASE_PATH . '/views/index.php';
    }

    public function validate(): array
    {
        return [];
    }

    public function process()
    {
    }
}
