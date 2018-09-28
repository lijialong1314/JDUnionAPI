<?php
class AreasCountyGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.areas.county.get";
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
                                                        		                                    	                   			private $parentId;
    	                                                            
	public function setParentId($parentId){
		$this->parentId = $parentId;
         $this->apiParas["parent_id"] = $parentId;
	}

	public function getParentId(){
	  return $this->parentId;
	}

                        	                        	                            }





        
 

