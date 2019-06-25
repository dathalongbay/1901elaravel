<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //


    public function index() {
        echo "<br>" . __METHOD__;
    }

    public function create() {
        echo "<br>" . __METHOD__;
    }

    public function edit($id) {
        echo "<br>" . $id . __METHOD__;
    }

    public function delete($id) {
        echo "<br>" . $id . __METHOD__;
    }


}
