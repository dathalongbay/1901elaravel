<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //


    public function index() {
        echo "<br>" . __METHOD__;

        return view("admin.product.index");
    }

    public function create() {
        echo "<br>" . __METHOD__;

        return view("admin.product.create");
    }

    public function edit($id) {
        echo "<br>" . $id . __METHOD__;

        /**
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data["id"] = $id;

        return view("admin.product.edit", $data);
    }

    public function delete($id) {
        echo "<br>" . $id . __METHOD__;

        /**
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data["id"] = $id;

        return view("admin.product.delete", $data);
    }


}
