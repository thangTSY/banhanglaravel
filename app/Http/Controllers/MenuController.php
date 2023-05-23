<?php

namespace App\Http\Controllers;

use App\Components\MenuRecusive;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menuRecusive;
    public function __construct(MenuRecusive $menuRecusive){

        $this->menuRecusive =$menuRecusive;
    }
    public function index(){
        return view('menus.index');
    }

    public function create() {
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();

        return view('menus.add', compact('optionSelect'));
    }

    public function store(Request $request){
       
    }

}
