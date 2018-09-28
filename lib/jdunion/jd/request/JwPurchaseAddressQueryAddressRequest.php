<?php
class JwPurchaseAddressQueryAddressRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.purchase.address.queryAddress";
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
                                                        		                                    	                   			private $addressLevel;
    	                        
	public function setAddressLevel($addressLevel){
		$this->addressLevel = $addressLevel;
         $this->apiParas["addressLevel"] = $addressLevel;
	}

	public function getAddressLevel(){
	  return $this->addressLevel;
	}

                                            		                                    	                   			private $addressLevel1Id;
    	                        
	public function setAddressLevel1Id($addressLevel1Id){
		$this->addressLevel1Id = $addressLevel1Id;
         $this->apiParas["addressLevel1Id"] = $addressLevel1Id;
	}

	public function getAddressLevel1Id(){
	  return $this->addressLevel1Id;
	}

                        	                   			private $addressLevel2Id;
    	                        
	public function setAddressLevel2Id($addressLevel2Id){
		$this->addressLevel2Id = $addressLevel2Id;
         $this->apiParas["addressLevel2Id"] = $addressLevel2Id;
	}

	public function getAddressLevel2Id(){
	  return $this->addressLevel2Id;
	}

                        	                   			private $addressLevel3Id;
    	                        
	public function setAddressLevel3Id($addressLevel3Id){
		$this->addressLevel3Id = $addressLevel3Id;
         $this->apiParas["addressLevel3Id"] = $addressLevel3Id;
	}

	public function getAddressLevel3Id(){
	  return $this->addressLevel3Id;
	}

                                                    	                        	                            }





        
 

