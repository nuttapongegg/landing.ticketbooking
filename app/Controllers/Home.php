<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $TicketsModel = new \App\Models\TicketsModel();
        $data['tickets'] = $TicketsModel->getTicketsAll();
        return view('index', $data);
    }
}
