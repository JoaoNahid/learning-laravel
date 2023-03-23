<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = 'Nahid';
        $idade = 20;
        $arr = [1,2,3,4,5];
        $my_full_name = ['João', 'Eduardo', 'de', 'Godoi', 'Nahid'];
        $args = [
            'nome' => $nome, 
            'idade' => $idade,
            'profissao' => 'Web Dev',
            'arr' => $arr,
            'my_full_name' => $my_full_name
        ];
        return view('welcome', $args);
    }

    public function create(){
        return view('events.create');
    }
}
