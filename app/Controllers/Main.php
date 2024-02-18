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

        $data = [
            'table_header' => $table_header,
            'table_rows' => $table_rows
        ];

        return view('main/home', $data);
    }
}
