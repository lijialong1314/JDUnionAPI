<?php
class VcItemPurchasernameGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.purchasername.get";
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
                                    	                        	                   			private $purchaserCode;
    	                                                            
	public function setPurchaserCode($purchaserCode){
		$this->purchaserCode = $purchaserCode;
         $this->apiParas["purchaser_code"] = $purchaserCode;
	}

	public function getPurchaserCode(){
	  return $this->purchaserCode;
	}

}





        
 

