<?php
class PopOtoCheckNumberConsumerRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.oto.CheckNumber.consumer";
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

                        	                   			private $cardNumber;
    	                                                            
	public function setCardNumber($cardNumber){
		$this->cardNumber = $cardNumber;
         $this->apiParas["card_number"] = $cardNumber;
	}

	public function getCardNumber(){
	  return $this->cardNumber;
	}

                        	                   			private $pwdUmber;
    	                                                            
	public function setPwdUmber($pwdUmber){
		$this->pwdUmber = $pwdUmber;
         $this->apiParas["pwd_umber"] = $pwdUmber;
	}

	public function getPwdUmber(){
	  return $this->pwdUmber;
	}

                        	                   			private $shopId;
    	                                                            
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $shopName;
    	                                                            
	public function setShopName($shopName){
		$this->shopName = $shopName;
         $this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName(){
	  return $this->shopName;
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





        
 

