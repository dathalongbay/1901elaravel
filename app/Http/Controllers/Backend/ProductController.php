<?php

namespace App\Http\Controllers\Backend;

//use App\Models\Backend\ProductModel;
use App\Models\Backend\ProductModel;
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
            'product_description' => 'required',
        ]);


        $inputs = $request->all();

        $productModel = new ProductModel();

        $productModel->product_name = isset($inputs["product_name"]) ? $inputs["product_name"] : "";
        $productModel->product_slug = isset($inputs["product_slug"]) ? $inputs["product_slug"] : "";
        $productModel->product_images = isset($inputs["product_images"]) ? $inputs["product_images"] : "";
        $productModel->product_description = isset($inputs["product_description"]) ? $inputs["product_description"] : "";

        $productModel->save();

        return redirect("/admin/products");

    }


    public function update() {

    }

    public function destroy() {

    }


}
