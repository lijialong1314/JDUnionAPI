<?php
class VcItemAuditGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.audit.get";
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





        
 

