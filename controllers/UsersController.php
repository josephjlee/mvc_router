<?php

class UsersController {
    
    public function index()
    {
        $title = 'Users';
        $intro = 'All users..';
        $users = App::get('database')->selectAll('users');
        return view('users', compact('title', 'intro', 'users'));
    }

    public function add()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        $this->index();
    }

}
