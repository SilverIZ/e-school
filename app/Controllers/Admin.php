<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        //kalo di CI panggil filenya bisa tanpa ektensi contoh 'layout/wrapper'
        $data = [
            'title' => 'Home', //ini judul untuk dinamis title barnya atau sama saja $titlef
            'content' => 'home' //ini variabel $content dari content.php
        ];

        echo view('layout/wrapper', $data); //ini ambil data yg isnya file home.php di Views
    }


    public function about()
    {
        // return view('welcome_message');
        //kalo di CI panggil filenya bisa tanpa ektensi contoh 'layout/wrapper'
        $data = [
            'title' => 'About Me',
            'content' => 'about',
            'class' => 'active'
        ];

        echo view('layout/wrapper', $data); //ini ambil data yg isnya file about.php di Views
    }


    //--------------------------------------------------------------------

}
