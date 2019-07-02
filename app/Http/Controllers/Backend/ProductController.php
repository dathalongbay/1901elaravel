<?php

namespace App\Http\Controllers\Backend;

//use App\Models\Backend\ProductModel;
use App\Models\Backend\ProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //


    public function index() {
        $products = DB::table('products')->paginate(1);

        $data = array();
        $data['products'] = $products;
        $data['abc'] = 12;

        return view("admin.product.index", $data);
    }

    public function create() {

        return view("admin.product.create");
    }

    public function edit($id) {


        $product = ProductModel::find($id);

        /**
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data["product"] = $product;

        return view("admin.product.edit", $data);
    }

    public function delete($id) {

        /**
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data["id"] = $id;

        $product = ProductModel::find($id);
        $data["product"] = $product;

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


    public function update($id, Request $request) {

        $request->validate([
            'product_name' => 'required|max:255|min:5',
            'product_slug' => 'required',
            'product_description' => 'required',
        ]);

        $inputs = $request->all();

        $productModel = ProductModel::find($id);

        $productModel->product_name = isset($inputs["product_name"]) ? $inputs["product_name"] : "";
        $productModel->product_slug = isset($inputs["product_slug"]) ? $inputs["product_slug"] : "";
        $productModel->product_images = isset($inputs["product_images"]) ? $inputs["product_images"] : "";
        $productModel->product_description = isset($inputs["product_description"]) ? $inputs["product_description"] : "";

        $productModel->save();

        return redirect("/admin/products");

    }

    public function destroy($id) {

        DB::table('products')->where('id', '=', $id)->delete();

        return redirect("/admin/products");
    }


    public function demo1() {

        /**
         * Truyền dữ liệu biến xuống view
         * Thường truyền xuống view 1 mảng
         */
        $data = array();
        $data["author"] = "nguyễn văn tuấn";
        $data["article"] = array("title" => "học css", "desc" => "học css");

        /**
         * Xuống view blade thì sẽ truy cập vào biến có tên là key trong mảng
         * ví dụ như $author và $article
         */

        return view("admin.product.demo1", $data);
    }


    public function demo2() {
        /**
         * [] khai báo mảng trong php7
         * array() khai báo mảng trong php5
         */
        return view("admin.product.demo1", ["author" => "nguyễn văn tuấn" ,
            "article" => array("title" => "học css", "desc" => "học css")]);
    }


}
