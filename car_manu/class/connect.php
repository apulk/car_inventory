<?php
//filename:class/connect.php
class connect{

    protected $hostname= "localhost";
    protected $username= "root"; 
    protected $password= "";
    protected $databasename="car_inventory"; 
    protected $conn="";

/*****************/
public function __construct()
{



//mysql() class from php.ini ->php_mysqli.dll file

//php_mysqli.dll file from php/ext folder

    $this->conn = new mysqli($this->hostname,$this->username,$this->password,$this->databasename);

    $this->conn->query("SET character_set_results=utf8");

    mb_language('uni');

    mb_internal_encoding('UTF-8');
    $this->conn->query("set names 'utf8'");
    $this->conn->query("SET CHARACTER SET utf8");
    $this->conn->query("SET NAMES utf8");


//    mysqli_query("SET character_set_results=utf8", $this->conn)or die(mysqli_error());



    if($this->conn->connect_errno!=0)
	{
	echo $this->conn->connect_error;
	exit;
	}


}
/***************/
public function __destruct()
{
//         echo "db disconnect";
//         echo $this->conn->close();
   $this->conn->close();
}
/**********************/
}
?>