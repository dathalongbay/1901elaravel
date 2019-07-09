<?php

class ConnectMySQL extends ConnectDatabase{


    /**
     * Khi class kế thừa từ class abstract
     * thì class kế thừa phải viết code thực thi cho các
     * phương thức abstract của class cha
     */
    public function connectDatabase()
    {
        $connect = mysqli_connect("localhost", "root", "", "test");
    }

}