<?php
namespace App\Controllers;

use App\Models\TestModel;

class TestController {

    public function index() {
        $test = new TestModel();
        $test->hello();
    }
}
