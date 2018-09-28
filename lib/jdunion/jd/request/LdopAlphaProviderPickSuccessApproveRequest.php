<?php
class LdopAlphaProviderPickSuccessApproveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.provider.pick.success.approve";
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
                                                        		                                    	                   			private $pickupCode;
    	                        
	public function setPickupCode($pickupCode){
		$this->pickupCode = $pickupCode;
         $this->apiParas["pickupCode"] = $pickupCode;
	}

	public function getPickupCode(){
	  return $this->pickupCode;
	}

                        	                   			private $providerCode;
    	                        
	public function setProviderCode($providerCode){
		$this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
	}

	public function getProviderCode(){
	  return $this->providerCode;
	}

                        	                   			private $deliveryId;
    	                        
	public function setDeliveryId($deliveryId){
		$this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
	}

	public function getDeliveryId(){
	  return $this->deliveryId;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $volume;
    	                        
	public function setVolume($volume){
		$this->volume = $volume;
         $this->apiParas["volume"] = $volume;
	}

	public function getVolume(){
	  return $this->volume;
	}

                        	                   			private $money;
    	                        
	public function setMoney($money){
		$this->money = $money;
         $this->apiParas["money"] = $money;
	}

	public function getMoney(){
	  return $this->money;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                            }





        
 

