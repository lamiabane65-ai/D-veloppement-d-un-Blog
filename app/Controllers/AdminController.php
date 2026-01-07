<?php
namespace App\Controllers;
use Core\Controller;

class AdminController extends Controller {
    public function categories(){
        $this->render('admin/categories');
    }
}
?>