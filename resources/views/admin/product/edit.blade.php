@extends("admin.layouts.layout")

@section("title")
    Sửa sản phẩm
@endsection

@section("content")
    Hiển thị form sửa sản phẩm {{ $product->id }}

    <div class="container">
        <form name="product" method="post" action="{{ url("admin/products/edit/$product->id") }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label>tên sản phẩm:</label>
                <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
            </div>

            <div class="form-group">
                <label>Slug sản phẩm:</label>
                <input type="text" class="form-control" name="product_slug" value="{{ $product->product_slug }}">
            </div>

            <div class="form-group">
                <label>Hình ảnh sản phẩm:</label>
                <input type="text" class="form-control" name="product_images" value="{{ $product->product_images }}">
            </div>

            <div class="form-group">
                <label>Mô tả sản phẩm:</label>
                <input type="text" class="form-control" name="product_description" value="{{ $product->product_description }}">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection  