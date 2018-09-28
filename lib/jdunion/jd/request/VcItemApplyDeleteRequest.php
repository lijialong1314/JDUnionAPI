<?php
class VcItemApplyDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.apply.delete";
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
                                    	                        	                   			private $applyId;
    	                        
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["applyId"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

}





        
 

