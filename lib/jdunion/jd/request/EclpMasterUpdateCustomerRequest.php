<?php
class EclpMasterUpdateCustomerRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.updateCustomer";
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
                                                        		                                    	                   			private $customerId;
    	                        
	public function setCustomerId($customerId){
		$this->customerId = $customerId;
         $this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId(){
	  return $this->customerId;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $level;
    	                        
	public function setLevel($level){
		$this->level = $level;
         $this->apiParas["level"] = $level;
	}

	public function getLevel(){
	  return $this->level;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $country;
    	                        
	public function setCountry($country){
		$this->country = $country;
         $this->apiParas["country"] = $country;
	}

	public function getCountry(){
	  return $this->country;
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

                        	                   			private $area;
    	                        
	public function setArea($area){
		$this->area = $area;
         $this->apiParas["area"] = $area;
	}

	public function getArea(){
	  return $this->area;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $zipCode;
    	                        
	public function setZipCode($zipCode){
		$this->zipCode = $zipCode;
         $this->apiParas["zipCode"] = $zipCode;
	}

	public function getZipCode(){
	  return $this->zipCode;
	}

                        	                   			private $consignee;
    	                        
	public function setConsignee($consignee){
		$this->consignee = $consignee;
         $this->apiParas["consignee"] = $consignee;
	}

	public function getConsignee(){
	  return $this->consignee;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $memo;
    	                        
	public function setMemo($memo){
		$this->memo = $memo;
         $this->apiParas["memo"] = $memo;
	}

	public function getMemo(){
	  return $this->memo;
	}

                        	                   			private $customerAlias;
    	                        
	public function setCustomerAlias($customerAlias){
		$this->customerAlias = $customerAlias;
         $this->apiParas["customerAlias"] = $customerAlias;
	}

	public function getCustomerAlias(){
	  return $this->customerAlias;
	}

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                                                    	}





        
 

