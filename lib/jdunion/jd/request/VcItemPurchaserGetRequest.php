<?php
class VcItemPurchaserGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.purchaser.get";
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
                                    	                        	                   			private $erpCode;
    	                                                            
	public function setErpCode($erpCode){
		$this->erpCode = $erpCode;
         $this->apiParas["erp_code"] = $erpCode;
	}

	public function getErpCode(){
	  return $this->erpCode;
	}

}





        
 

