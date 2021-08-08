<?php

class DBOperation{
    private $con;

    function __construct()
    {
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db->connect();
    }

    public function addCategory($parent,$cat){
		$pre_stmt = $this->con->prepare("INSERT INTO `categories`(`parent_cat`, `category_name`, `status`)
		 VALUES (?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("isi",$parent,$cat,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "CATEGORY_ADDED";
		}else{
			return 0;
		}

	}

	public function addBrands($Brand_name){
		$pre_stmt = $this->con->prepare("INSERT INTO `brands`( `brand_name`, `status`)
		 VALUES (?,?)");
		$status = 1;
		$pre_stmt->bind_param("si",$Brand_name,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "BRAND_ADDED";
		}else{
			return 0;
		}

	}


	public function addProduct($cid,$bid,$pro_name,$price,$stock,$date){
		$pre_stmt = $this->con->prepare("INSERT INTO `products`( `cid`, `bid`,`product_name`,`product_price`,`product_stock`,`added_date`,`p_status`)
		 VALUES (?,?,?,?,?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("iisdisi",$cid,$bid,$pro_name,$price,$stock,$date,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "NEW_PRODUCT_ADDED";
		}else{
			return 0;
		}

	}

    public function getAllRecord($table){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}



}

// $opr = new DBOperation();
// echo $opr->addCategory(0,"Headset");
// echo $opr->addProduct(6,1,"Watch",1500,500,2021-08-04);
// echo "<pre>";
// print_r($opr->getAllRecord("categories"));
?>