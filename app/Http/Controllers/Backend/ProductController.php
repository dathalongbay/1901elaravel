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


    public function store(Request $request) {

        echo "<br>" . __METHOD__;

        $request->validate([
            'product_name' => 'required|max:255|min:5',
            'product_slug' => 'required',
            'product_description' => 'numeric',
        ]);

        $inputs = $request->all();

        $product_name = isset($inputs["product_name"]) ? $inputs["product_name"] : "";
        $product_slug = isset($inputs["product_slug"]) ? $inputs["product_slug"] : "";
        $product_images = isset($inputs["product_images"]) ? $inputs["product_images"] : "";
        $product_description = isset($inputs["product_description"]) ? $inputs["product_description"] : "";



        echo "<pre>";
        print_r($inputs);
        echo "</pre>";

        exit;
    }


    public function update() {

    }

    public function destroy() {

    }


}
