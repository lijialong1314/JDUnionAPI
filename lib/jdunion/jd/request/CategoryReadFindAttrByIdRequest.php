<?php
class CategoryReadFindAttrByIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.read.findAttrById";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $attrId;
    	                        
	public function setAttrId($attrId){
		$this->attrId = $attrId;
         $this->apiParas["attrId"] = $attrId;
	}

	public function getAttrId(){
	  return $this->attrId;
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





        
 

