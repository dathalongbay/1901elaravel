<?php

/**
 * Class ConnectMySQL
 * KHi 1 class muốn thực thi 1 interface
 * thì class đó sẽ sử dụng từ khoá implements tên của interface
 * 1 class thì có thể implements nhiều interface
 * Nhưng 1 class thì chỉ có thể kế thừa từ 1 class abstract mà thôi
 *
 *
 * Abstract : cái class đó là gì ?
 * Interface : class đó làm được những gì ?
 *
 *
 */
class ConnectMySQL extends ConnectDatabase implements Excel, CSV {


    /**
     * Khi class kế thừa từ class abstract
     * thì class kế thừa phải viết code thực thi cho các
     * phương thức abstract của class cha
     */
    public function connectDatabase()
    {
        $connect = mysqli_connect("localhost", "root", "", "test");
    }


    public function importExcel(){
        echo "<br>" . __METHOD__;
    }


    public function exportExcel(){
        echo "<br>" . __METHOD__;
    }


    public function importCSV(){
        echo "<br>" . __METHOD__;
    }


    public function exportCSV(){
        echo "<br>" . __METHOD__;
    }

}