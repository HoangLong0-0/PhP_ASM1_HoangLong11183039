<?php
include_once "database.php";

class Controller
{
    public  function home(){
        include "views/home.php";
    }
    public  function aboutus(){
        include "views/about_us.php";
    }
    public  function listsp(){
        $sql_text="select * from product";
        $list=queryDB($sql_text);
        include "views/list.php";
    }
    public  function add(){
        include "views/add.php";
    }
    public function save(){
        //params
        $name=$_POST["name"];
        $price=$_POST["price"];
        $quantity=$_POST["quantity"];
        $category=$_POST["category"];
        $sql_text = "insert into product(name,category,quantity,price) values
                                                         ('$name','$category','$price','$quantity')";
        if(insertOrUpdateDB($sql_text)){
            header("location: ?route=list");
        }
        else{
            echo "ERROR";
        }

    }

    public function edit(){
        include "views/edit.php";
        //params
        $id = $_GET["id"];
        $sql_text="select * from product where id = $id";
        $rs=queryDB($sql_text);
        $sp=null;
        if($rs->num_rows>0){
            while ($row = $rs->fetch_assoc())
            {
                $sp = $row;
                break;
            }
        }
        if($sp == null){
            header("?route=list");
        }
    }
    public function  update(){
        //params
        $id=$_POST["id"];
        $name=$_POST["name"];
        $category=$_POST["category"];
        $price=$_POST["price"];
        $quantity=$_POST["quantity"];

        $sql_text = "update product set 
                   name='$name',category='$category',quantity='$quantity',price='$price'
                    where id = $id";
        if(insertOrUpdateDB($sql_text)===true){
            header("location: ?route=list");
        }
        else{
            echo "ERROR";
        }
    }

    public function delete(){
        $id=$_GET["id"];
        $sql_text="delete from product where id = $id";
        $rs=queryDB($sql_text);
        if(insertOrUpdateDB($sql_text)===true){
            header("location: ?route=list");
        }
        else{
            echo "ERROR";
        }
    }

}