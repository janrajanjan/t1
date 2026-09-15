<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['id' => 1, 'name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '0912 345 6789'],
            ['id' => 2, 'name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '0921 543 9876'],
            ['id' => 3, 'name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '0923 098 3214'],
            ['id' => 4, 'name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '0954 879 3471'],
            ['id' => 5, 'name' => 'Ethan Hunt', 'email' => 'ethan@example.com', 'phone' => '0998 743 2361'],
        ];

        return view('customers/index', $data);
    }
}