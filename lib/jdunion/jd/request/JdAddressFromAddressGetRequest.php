<?php
class JdAddressFromAddressGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.JdAddressFromAddress.get";
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
                                                        		                                    	                   			private $userid;
    	                        
	public function setUserid($userid){
		$this->userid = $userid;
         $this->apiParas["userid"] = $userid;
	}

	public function getUserid(){
	  return $this->userid;
	}

                        	                   			private $key;
    	                        
	public function setKey($key){
		$this->key = $key;
         $this->apiParas["key"] = $key;
	}

	public function getKey(){
	  return $this->key;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $countryId;
    	                        
	public function setCountryId($countryId){
		$this->countryId = $countryId;
         $this->apiParas["countryId"] = $countryId;
	}

	public function getCountryId(){
	  return $this->countryId;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $shipping;
    	                        
	public function setShipping($shipping){
		$this->shipping = $shipping;
         $this->apiParas["shipping"] = $shipping;
	}

	public function getShipping(){
	  return $this->shipping;
	}

                            }





        
 

