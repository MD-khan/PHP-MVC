<?php

class PageController
{


    public function home()
    {
        //die('home');
        $users = App::get('database')->selectAll('users');

        require view('index', compact('users'));
    }




    public function about()
    {
        require 'views/about.view.php';
    }

    public function contact()
    {
        require 'views/contact.view.php';
    }
}
