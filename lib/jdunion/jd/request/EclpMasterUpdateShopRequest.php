<?php
class EclpMasterUpdateShopRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.updateShop";
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
                                                        		                                    	                   			private $shopNo;
    	                        
	public function setShopNo($shopNo){
		$this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
	}

	public function getShopNo(){
	  return $this->shopNo;
	}

                        	                   			private $spSourceNo;
    	                        
	public function setSpSourceNo($spSourceNo){
		$this->spSourceNo = $spSourceNo;
         $this->apiParas["spSourceNo"] = $spSourceNo;
	}

	public function getSpSourceNo(){
	  return $this->spSourceNo;
	}

                        	                   			private $spShopNo;
    	                        
	public function setSpShopNo($spShopNo){
		$this->spShopNo = $spShopNo;
         $this->apiParas["spShopNo"] = $spShopNo;
	}

	public function getSpShopNo(){
	  return $this->spShopNo;
	}

                        	                   			private $shopName;
    	                        
	public function setShopName($shopName){
		$this->shopName = $shopName;
         $this->apiParas["shopName"] = $shopName;
	}

	public function getShopName(){
	  return $this->shopName;
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

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $fax;
    	                        
	public function setFax($fax){
		$this->fax = $fax;
         $this->apiParas["fax"] = $fax;
	}

	public function getFax(){
	  return $this->fax;
	}

                        	                   			private $afterSaleContacts;
    	                        
	public function setAfterSaleContacts($afterSaleContacts){
		$this->afterSaleContacts = $afterSaleContacts;
         $this->apiParas["afterSaleContacts"] = $afterSaleContacts;
	}

	public function getAfterSaleContacts(){
	  return $this->afterSaleContacts;
	}

                        	                   			private $afterSaleAddress;
    	                        
	public function setAfterSaleAddress($afterSaleAddress){
		$this->afterSaleAddress = $afterSaleAddress;
         $this->apiParas["afterSaleAddress"] = $afterSaleAddress;
	}

	public function getAfterSaleAddress(){
	  return $this->afterSaleAddress;
	}

                        	                   			private $afterSalePhone;
    	                        
	public function setAfterSalePhone($afterSalePhone){
		$this->afterSalePhone = $afterSalePhone;
         $this->apiParas["afterSalePhone"] = $afterSalePhone;
	}

	public function getAfterSalePhone(){
	  return $this->afterSalePhone;
	}

                        	                   			private $bdOwnerNo;
    	                        
	public function setBdOwnerNo($bdOwnerNo){
		$this->bdOwnerNo = $bdOwnerNo;
         $this->apiParas["bdOwnerNo"] = $bdOwnerNo;
	}

	public function getBdOwnerNo(){
	  return $this->bdOwnerNo;
	}

                        	                   			private $reserve1;
    	                        
	public function setReserve1($reserve1){
		$this->reserve1 = $reserve1;
         $this->apiParas["reserve1"] = $reserve1;
	}

	public function getReserve1(){
	  return $this->reserve1;
	}

                        	                   			private $reserve2;
    	                        
	public function setReserve2($reserve2){
		$this->reserve2 = $reserve2;
         $this->apiParas["reserve2"] = $reserve2;
	}

	public function getReserve2(){
	  return $this->reserve2;
	}

                        	                   			private $reserve3;
    	                        
	public function setReserve3($reserve3){
		$this->reserve3 = $reserve3;
         $this->apiParas["reserve3"] = $reserve3;
	}

	public function getReserve3(){
	  return $this->reserve3;
	}

                        	                   			private $reserve4;
    	                        
	public function setReserve4($reserve4){
		$this->reserve4 = $reserve4;
         $this->apiParas["reserve4"] = $reserve4;
	}

	public function getReserve4(){
	  return $this->reserve4;
	}

                        	                   			private $reserve5;
    	                        
	public function setReserve5($reserve5){
		$this->reserve5 = $reserve5;
         $this->apiParas["reserve5"] = $reserve5;
	}

	public function getReserve5(){
	  return $this->reserve5;
	}

                        	                   			private $reserve6;
    	                        
	public function setReserve6($reserve6){
		$this->reserve6 = $reserve6;
         $this->apiParas["reserve6"] = $reserve6;
	}

	public function getReserve6(){
	  return $this->reserve6;
	}

                        	                   			private $reserve7;
    	                        
	public function setReserve7($reserve7){
		$this->reserve7 = $reserve7;
         $this->apiParas["reserve7"] = $reserve7;
	}

	public function getReserve7(){
	  return $this->reserve7;
	}

                        	                   			private $reserve8;
    	                        
	public function setReserve8($reserve8){
		$this->reserve8 = $reserve8;
         $this->apiParas["reserve8"] = $reserve8;
	}

	public function getReserve8(){
	  return $this->reserve8;
	}

                        	                   			private $reserve9;
    	                        
	public function setReserve9($reserve9){
		$this->reserve9 = $reserve9;
         $this->apiParas["reserve9"] = $reserve9;
	}

	public function getReserve9(){
	  return $this->reserve9;
	}

                        	                   			private $reserve10;
    	                        
	public function setReserve10($reserve10){
		$this->reserve10 = $reserve10;
         $this->apiParas["reserve10"] = $reserve10;
	}

	public function getReserve10(){
	  return $this->reserve10;
	}

                                                    	}





        
 

