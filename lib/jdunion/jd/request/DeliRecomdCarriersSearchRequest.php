<?php
class DeliRecomdCarriersSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.deliRecomdCarriers.search";
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
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                        	                   			private $sendProvinceId;
    	                        
	public function setSendProvinceId($sendProvinceId){
		$this->sendProvinceId = $sendProvinceId;
         $this->apiParas["sendProvinceId"] = $sendProvinceId;
	}

	public function getSendProvinceId(){
	  return $this->sendProvinceId;
	}

                        	                   			private $sendCityId;
    	                        
	public function setSendCityId($sendCityId){
		$this->sendCityId = $sendCityId;
         $this->apiParas["sendCityId"] = $sendCityId;
	}

	public function getSendCityId(){
	  return $this->sendCityId;
	}

                        	                   			private $sendCountyId;
    	                        
	public function setSendCountyId($sendCountyId){
		$this->sendCountyId = $sendCountyId;
         $this->apiParas["sendCountyId"] = $sendCountyId;
	}

	public function getSendCountyId(){
	  return $this->sendCountyId;
	}

                        	                   			private $sendTownId;
    	                        
	public function setSendTownId($sendTownId){
		$this->sendTownId = $sendTownId;
         $this->apiParas["sendTownId"] = $sendTownId;
	}

	public function getSendTownId(){
	  return $this->sendTownId;
	}

                        	                   			private $receiveProvinceId;
    	                        
	public function setReceiveProvinceId($receiveProvinceId){
		$this->receiveProvinceId = $receiveProvinceId;
         $this->apiParas["receiveProvinceId"] = $receiveProvinceId;
	}

	public function getReceiveProvinceId(){
	  return $this->receiveProvinceId;
	}

                        	                   			private $receiveCityId;
    	                        
	public function setReceiveCityId($receiveCityId){
		$this->receiveCityId = $receiveCityId;
         $this->apiParas["receiveCityId"] = $receiveCityId;
	}

	public function getReceiveCityId(){
	  return $this->receiveCityId;
	}

                        	                   			private $receiveCountyId;
    	                        
	public function setReceiveCountyId($receiveCountyId){
		$this->receiveCountyId = $receiveCountyId;
         $this->apiParas["receiveCountyId"] = $receiveCountyId;
	}

	public function getReceiveCountyId(){
	  return $this->receiveCountyId;
	}

                        	                   			private $receiveTownId;
    	                        
	public function setReceiveTownId($receiveTownId){
		$this->receiveTownId = $receiveTownId;
         $this->apiParas["receiveTownId"] = $receiveTownId;
	}

	public function getReceiveTownId(){
	  return $this->receiveTownId;
	}

                            }





        
 

