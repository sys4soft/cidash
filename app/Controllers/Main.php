<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        // table data

        $table_header = ['Nome', 'Email', 'Telefone', 'Ativo'];
        $table_rows = [];

        for ($i = 1; $i <= 10; $i++) {
            $tmp = [
                '<input class="form-check-input" type="checkbox">',
                uniqid() . "@gmail.com",
                rand(900000000,999999999),
                rand(0,1)
            ];
            $table_rows[] = $tmp;
        }

        $messages = [
            [
                'image' => 'user.jpg',
                'author' => 'John Doe',
                'message' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit dicta placeat doloribus quam voluptas delectus.',
                'date_time' => date('2030-10-05')
            ],
            [
                'image' => 'user.jpg',
                'author' => 'Mary Doe',
                'message' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit dicta placeat doloribus quam voluptas delectus.',
                'date_time' => date('2030-10-05')
            ],
            [
                'image' => 'user.jpg',
                'author' => 'Steve Doe',
                'message' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit dicta placeat doloribus quam voluptas delectus.',
                'date_time' => date('2030-10-05')
            ]
        ];

        $data = [
            'table_header' => $table_header,
            'table_rows' => $table_rows,
            'messages' => $messages
        ];

        return view('main/home', $data);
    }
}
