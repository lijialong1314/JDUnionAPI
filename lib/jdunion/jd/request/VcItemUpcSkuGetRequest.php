<?php
class VcItemUpcSkuGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.upc.sku.get";
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
                                    	                        	                   			private $upcCode;
    	                                                            
	public function setUpcCode($upcCode){
		$this->upcCode = $upcCode;
         $this->apiParas["upc_code"] = $upcCode;
	}

	public function getUpcCode(){
	  return $this->upcCode;
	}

                        	                   			private $salerCode;
    	                                                            
	public function setSalerCode($salerCode){
		$this->salerCode = $salerCode;
         $this->apiParas["saler_code"] = $salerCode;
	}

	public function getSalerCode(){
	  return $this->salerCode;
	}

}





        
 

