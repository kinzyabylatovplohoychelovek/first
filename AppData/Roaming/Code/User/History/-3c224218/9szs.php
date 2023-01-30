<?php

    function query($sql){
        $connect = mysqli_connect('localhost', 'root', 'root', 'database');
        $response = mysqli_query($connect, $sql);
        return $response;
    }

        /*if($_POST['select']) {
            $select=$_POST['select'];
            switch ($select) {
            case "year+":
                $sql = "SELECT * FROM products ORDER BY year ASC";
                break;
            case "year-":
                $sql = "SELECT * FROM products ORDER BY year DESC";
                break;
            case "az":
                $sql = "SELECT * FROM `products` ORDER BY name ASC ";
                break;
            case "za":
                $sql = "SELECT * FROM `products` ORDER BY name DESC ";
                break;
            case "priceMax":
                $sql = "SELECT * FROM products ORDER BY price ASC";
                break;
            case "priceMin":
                $sql = "SELECT * FROM products ORDER BY price DESC ";
                break;
            case "Strun":
                $sql = "SELECT * FROM products ORDER BY FIELD(category,Струнные)";
                break;
            case "Klavish":
                $sql = "SELECT * FROM products ORDER BY FIELD(category,Клавишные)";
                break;
            case "Smich":
                $sql = "SELECT * FROM products ORDER BY FIELD(category,Смычковые)";
                break;
                }}*/

?>