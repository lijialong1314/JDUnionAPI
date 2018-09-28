<?php
class AddressCompleteServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.AddressCompleteService";
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
                                    	                   			private $provinceid;
    	                        
	public function setProvinceid($provinceid){
		$this->provinceid = $provinceid;
         $this->apiParas["provinceid"] = $provinceid;
	}

	public function getProvinceid(){
	  return $this->provinceid;
	}

                        	                   			private $cityid;
    	                        
	public function setCityid($cityid){
		$this->cityid = $cityid;
         $this->apiParas["cityid"] = $cityid;
	}

	public function getCityid(){
	  return $this->cityid;
	}

                        	                   			private $countryid;
    	                        
	public function setCountryid($countryid){
		$this->countryid = $countryid;
         $this->apiParas["countryid"] = $countryid;
	}

	public function getCountryid(){
	  return $this->countryid;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

}





        
 

