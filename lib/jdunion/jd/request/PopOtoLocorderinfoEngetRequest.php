<?php
class PopOtoLocorderinfoEngetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.oto.locorderinfo.enget";
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
                                    	                        	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $codeType;
    	                                                            
	public function setCodeType($codeType){
		$this->codeType = $codeType;
         $this->apiParas["code_type"] = $codeType;
	}

	public function getCodeType(){
	  return $this->codeType;
	}

}





        
 

