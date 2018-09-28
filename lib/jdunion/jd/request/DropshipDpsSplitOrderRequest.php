<?php
class DropshipDpsSplitOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.splitOrder";
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
                                    	                        	                   			private $splitOrderJson;
    	                        
	public function setSplitOrderJson($splitOrderJson){
		$this->splitOrderJson = $splitOrderJson;
         $this->apiParas["splitOrderJson"] = $splitOrderJson;
	}

	public function getSplitOrderJson(){
	  return $this->splitOrderJson;
	}

}





        
 

