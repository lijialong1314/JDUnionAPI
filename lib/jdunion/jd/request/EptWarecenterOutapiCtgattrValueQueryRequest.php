<?php
class EptWarecenterOutapiCtgattrValueQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.outapi.ctgattr.value.query";
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
                                                        		                                    	                        	                   			private $catId;
    	                        
	public function setCatId($catId){
		$this->catId = $catId;
         $this->apiParas["catId"] = $catId;
	}

	public function getCatId(){
	  return $this->catId;
	}

                        	                   			private $propertyId;
    	                        
	public function setPropertyId($propertyId){
		$this->propertyId = $propertyId;
         $this->apiParas["propertyId"] = $propertyId;
	}

	public function getPropertyId(){
	  return $this->propertyId;
	}

                            }





        
 

