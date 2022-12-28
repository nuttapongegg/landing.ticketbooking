<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $TicketsModel = new \App\Models\TicketsModel();
        $data['tickets'] = $TicketsModel->getTicketsAll();
        $BackgroundModel = new \App\Models\BackgroundModel();
        $data['background'] = $BackgroundModel->getBackgroundByID(1);
        return view('index', $data);
    }

    public function policy()
    {
        // $TicketsModel = new \App\Models\TicketsModel();
        // $data['tickets'] = $TicketsModel->getTicketsAll();
        return view('policy');
    }
}
