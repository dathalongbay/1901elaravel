@extends("admin.layouts.layout")

@section("title")
    Hiển thị sản phẩm
@endsection

@section("content")
    <div class="container">
        <h2>Danh sách sản phẩm</h2>
        <p><a href="{{ url("admin/products/create") }}" class="btn btn-success">Thêm sản phẩm</a> </p>
        <table class="table">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection  