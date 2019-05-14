<?php

class PagesController {

    public function home()
    {
        $title = 'Home';
        $intro = 'Welcome!';
        $tasks = App::get('database')->selectAll('tasks');
        return view('index', compact('title', 'intro', 'tasks'));    
        //require __DIR__.'/../views/index.view.php';
    }

    public function about()
    {
        $title = 'About';
        $intro = 'About us..';
        return view('about', compact('title', 'intro'));    
        //require __DIR__.'/../views/about.view.php';
    }

    public function contact()
    {
        $title = 'Contact';
        $intro = 'Contact us..';
        $formURI = 'userAdd';
        return view('contact', compact('title', 'intro', 'formURI'));    
        //require __DIR__.'/../views/contact.view.php';
    }

}