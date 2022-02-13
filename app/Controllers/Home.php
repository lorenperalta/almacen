<?php

namespace App\Controllers;
use App\Models\AlmacenModel;

class Home extends BaseController
{
    public function index()
    {
        $Menu = new AlmacenModel();
		$data= $Menu->Listar();
		$menuCliente =[ "MenuDashboardCliente"=>$data,
    ];
            $session = session();
            $session->set($menuCliente);
        return view('welcome_message');
    }
}
