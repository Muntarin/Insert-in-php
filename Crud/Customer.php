<?php


namespace App\classes;


class Customer
{
    public function saveCustomerInfo(){
        //$data=(object)$_POST;
        extract($_POST);

      $link=mysqli_connect('localhost','root','','customer');
      //echo "<pre>";
      //print_r($link);
        $sql="INSERT INTO customers (name,email,mobile) VALUES ('$name','$email','$mobile') ";

       // $sql="INSERT INTO customers (name,email,mobile) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]') ";
       // $sql="INSERT INTO customers (name,email,mobile) VALUES ('$data->name','$data->email','$data->mobile') ";
        if(mysqli_query($link,$sql)){
            return" Student info save successfully";
        }else{
            die( "Query Problem".mysqli_error($link));
        }

    }
}