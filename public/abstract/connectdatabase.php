<?php

abstract class ConnectDatabase {


    abstract public function connectDatabase();

    public function test() {
        echo "<br>" . __METHOD__;
    }


}