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

        // messages / posts
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

        // todo list
        $todo_list = [
            'Tarefa um',
            'Tarefa dois',
            'Tarefa três',
            'Tarefa quatro',
        ];

        $data = [
            'table_header' => $table_header,
            'table_rows' => $table_rows,
            'messages' => $messages,
            'todo_list' => $todo_list
        ];

        return view('main/home', $data);
    }

    public function todo_submit()
    {
        echo 'Submetido formulário da lista de tarefas';
    }

    public function error_404()
    {
        return view('partials/404');
    }

    public function blank_page()
    {
        return view('partials/blank_page');
    }
}
