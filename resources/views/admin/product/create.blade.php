@extends("admin.layouts.layout")

@section("title")
    Tạo mới sản phẩm
@endsection

@section("content")

    <div class="container">
        <form name="product" method="post" action="">
            <div class="form-group">
                <label>tên sản phẩm:</label>
                <input type="text" class="form-control" name="product_name">
            </div>

            <div class="form-group">
                <label>giá sản phẩm:</label>
                <input type="text" class="form-control" name="product_price">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection