<?php
class CategoryReadFindAttrsByCategoryIdJosRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.read.findAttrsByCategoryIdJos";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $attributeType;
    	                        
	public function setAttributeType($attributeType){
		$this->attributeType = $attributeType;
         $this->apiParas["attributeType"] = $attributeType;
	}

	public function getAttributeType(){
	  return $this->attributeType;
	}

                        	                   	                    		private $field;
    	                        
	public function setField($field){
		$this->field = $field;
         $this->apiParas["field"] = $field;
	}

	public function getField(){
	  return $this->field;
	}

}





        
 

