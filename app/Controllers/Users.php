<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['id' => 1, 'username' => 'jdoe', 'name' => 'John Doe', 'role' => 'Manager'],
            ['id' => 2, 'name' => 'Jane Miller', 'username' => 'jmiller', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Alex Turner', 'username' => 'aturner', 'role' => 'Inventory Admin'],
            ['id' => 4, 'name' => 'Sarah Connor', 'username' => 'sconnor', 'role' => 'Supervisor'],
            ['id' => 5, 'name' => 'Michael Scott', 'username' => 'mscott', 'role' => 'Cashier'],
        ];

        return view('users/index', $data);
    }
}