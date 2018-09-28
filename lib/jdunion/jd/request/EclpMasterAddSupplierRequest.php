<?php
class EclpMasterAddSupplierRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.addSupplier";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $isvSupplierNo;
    	                        
	public function setIsvSupplierNo($isvSupplierNo){
		$this->isvSupplierNo = $isvSupplierNo;
         $this->apiParas["isvSupplierNo"] = $isvSupplierNo;
	}

	public function getIsvSupplierNo(){
	  return $this->isvSupplierNo;
	}

                        	                   			private $supplierName;
    	                        
	public function setSupplierName($supplierName){
		$this->supplierName = $supplierName;
         $this->apiParas["supplierName"] = $supplierName;
	}

	public function getSupplierName(){
	  return $this->supplierName;
	}

                        	                   			private $contacts;
    	                        
	public function setContacts($contacts){
		$this->contacts = $contacts;
         $this->apiParas["contacts"] = $contacts;
	}

	public function getContacts(){
	  return $this->contacts;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $fax;
    	                        
	public function setFax($fax){
		$this->fax = $fax;
         $this->apiParas["fax"] = $fax;
	}

	public function getFax(){
	  return $this->fax;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $ext1;
    	                        
	public function setExt1($ext1){
		$this->ext1 = $ext1;
         $this->apiParas["ext1"] = $ext1;
	}

	public function getExt1(){
	  return $this->ext1;
	}

                        	                   			private $ext2;
    	                        
	public function setExt2($ext2){
		$this->ext2 = $ext2;
         $this->apiParas["ext2"] = $ext2;
	}

	public function getExt2(){
	  return $this->ext2;
	}

                        	                   			private $ext3;
    	                        
	public function setExt3($ext3){
		$this->ext3 = $ext3;
         $this->apiParas["ext3"] = $ext3;
	}

	public function getExt3(){
	  return $this->ext3;
	}

                        	                   			private $ext4;
    	                        
	public function setExt4($ext4){
		$this->ext4 = $ext4;
         $this->apiParas["ext4"] = $ext4;
	}

	public function getExt4(){
	  return $this->ext4;
	}

                        	                   			private $ext5;
    	                        
	public function setExt5($ext5){
		$this->ext5 = $ext5;
         $this->apiParas["ext5"] = $ext5;
	}

	public function getExt5(){
	  return $this->ext5;
	}

                                                    	}





        
 

