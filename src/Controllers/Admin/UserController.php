<?php 

namespace MyNamespace\MyProject\Controllers\Admin;

use Exception;
use MyNamespace\MyProject\Common\Controller;
use MyNamespace\MyProject\Models\User;

class UserController extends Controller
{
    private User $user;
    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        
    }    

    public function store($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function create() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function show($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function edit($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function update($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function delete($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }
}