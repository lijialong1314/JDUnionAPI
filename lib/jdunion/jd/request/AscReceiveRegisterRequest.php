<?php
class AscReceiveRegisterRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.receive.register";
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
                                    	                        	                        	                                            		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $receivePin;
    	                        
	public function setReceivePin($receivePin){
		$this->receivePin = $receivePin;
         $this->apiParas["receivePin"] = $receivePin;
	}

	public function getReceivePin(){
	  return $this->receivePin;
	}

                        	                   			private $receiveName;
    	                        
	public function setReceiveName($receiveName){
		$this->receiveName = $receiveName;
         $this->apiParas["receiveName"] = $receiveName;
	}

	public function getReceiveName(){
	  return $this->receiveName;
	}

                        	                   			private $packingState;
    	                        
	public function setPackingState($packingState){
		$this->packingState = $packingState;
         $this->apiParas["packingState"] = $packingState;
	}

	public function getPackingState(){
	  return $this->packingState;
	}

                        	                   			private $qualityState;
    	                        
	public function setQualityState($qualityState){
		$this->qualityState = $qualityState;
         $this->apiParas["qualityState"] = $qualityState;
	}

	public function getQualityState(){
	  return $this->qualityState;
	}

                        	                   			private $invoiceRecord;
    	                        
	public function setInvoiceRecord($invoiceRecord){
		$this->invoiceRecord = $invoiceRecord;
         $this->apiParas["invoiceRecord"] = $invoiceRecord;
	}

	public function getInvoiceRecord(){
	  return $this->invoiceRecord;
	}

                        	                   			private $judgmentReason;
    	                        
	public function setJudgmentReason($judgmentReason){
		$this->judgmentReason = $judgmentReason;
         $this->apiParas["judgmentReason"] = $judgmentReason;
	}

	public function getJudgmentReason(){
	  return $this->judgmentReason;
	}

                        	                   			private $accessoryOrGift;
    	                        
	public function setAccessoryOrGift($accessoryOrGift){
		$this->accessoryOrGift = $accessoryOrGift;
         $this->apiParas["accessoryOrGift"] = $accessoryOrGift;
	}

	public function getAccessoryOrGift(){
	  return $this->accessoryOrGift;
	}

                        	                   			private $appearanceState;
    	                        
	public function setAppearanceState($appearanceState){
		$this->appearanceState = $appearanceState;
         $this->apiParas["appearanceState"] = $appearanceState;
	}

	public function getAppearanceState(){
	  return $this->appearanceState;
	}

                        	                   			private $receiveRemark;
    	                        
	public function setReceiveRemark($receiveRemark){
		$this->receiveRemark = $receiveRemark;
         $this->apiParas["receiveRemark"] = $receiveRemark;
	}

	public function getReceiveRemark(){
	  return $this->receiveRemark;
	}

                            }





        
 

