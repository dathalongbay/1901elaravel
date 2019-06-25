<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //


    public function index() {

        return view("admin.product.index");
    }

    public function create() {

        return view("admin.product.create");
    }

    public function edit($id) {

        /**
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data["id"] = $id;

        return view("admin.product.edit", $data);
    }

    public function delete($id) {

        /**
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data["id"] = $id;

        return view("admin.product.delete", $data);
    }


    public function store() {

    }


    public function update() {

    }

    public function destroy() {

    }


}
