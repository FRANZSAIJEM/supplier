<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        return Inertia('Supplier');
    }

    public function create(){
        return Inertia('Create');
    }
}
