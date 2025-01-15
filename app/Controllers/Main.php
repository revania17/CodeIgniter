<?php

namespace App\Controllers;

use App\Models\Modelmatkul;

class Main extends BaseController
{
    protected $modelmatkul;
    public function __construct()
    {
        $this->modelmatkul = new Modelmatkul();
    }

    public function index()
    {
        $matkulrea = $this->modelmatkul->findAll();
        $data = [
            "title" => 'matkul',
            "matkul" => $matkulrea
        ];
        return view('dashboard', $data);
    }
}
