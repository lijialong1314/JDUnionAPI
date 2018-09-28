<?php
class SellerPromotionV2RejectRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.v2.reject";
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
                                                        		                                    	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $port;
    	                        
	public function setPort($port){
		$this->port = $port;
         $this->apiParas["port"] = $port;
	}

	public function getPort(){
	  return $this->port;
	}

                        	                   			private $requestId;
    	                                                            
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                                                    	                        	                   			private $promoId;
    	                                                            
	public function setPromoId($promoId){
		$this->promoId = $promoId;
         $this->apiParas["promo_id"] = $promoId;
	}

	public function getPromoId(){
	  return $this->promoId;
	}

                        	                   			private $promoType;
    	                                                            
	public function setPromoType($promoType){
		$this->promoType = $promoType;
         $this->apiParas["promo_type"] = $promoType;
	}

	public function getPromoType(){
	  return $this->promoType;
	}

}





        
 

