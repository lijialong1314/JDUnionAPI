<?php
class AscReceiveCountRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.receive.count";
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

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $applyTimeBegin;
    	                        
	public function setApplyTimeBegin($applyTimeBegin){
		$this->applyTimeBegin = $applyTimeBegin;
         $this->apiParas["applyTimeBegin"] = $applyTimeBegin;
	}

	public function getApplyTimeBegin(){
	  return $this->applyTimeBegin;
	}

                        	                   			private $applyTimeEnd;
    	                        
	public function setApplyTimeEnd($applyTimeEnd){
		$this->applyTimeEnd = $applyTimeEnd;
         $this->apiParas["applyTimeEnd"] = $applyTimeEnd;
	}

	public function getApplyTimeEnd(){
	  return $this->applyTimeEnd;
	}

                        	                   			private $expressCode;
    	                        
	public function setExpressCode($expressCode){
		$this->expressCode = $expressCode;
         $this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode(){
	  return $this->expressCode;
	}

                        	                   			private $timeoutFlag;
    	                        
	public function setTimeoutFlag($timeoutFlag){
		$this->timeoutFlag = $timeoutFlag;
         $this->apiParas["timeoutFlag"] = $timeoutFlag;
	}

	public function getTimeoutFlag(){
	  return $this->timeoutFlag;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $customerTel;
    	                        
	public function setCustomerTel($customerTel){
		$this->customerTel = $customerTel;
         $this->apiParas["customerTel"] = $customerTel;
	}

	public function getCustomerTel(){
	  return $this->customerTel;
	}

                        	                   			private $dealType;
    	                        
	public function setDealType($dealType){
		$this->dealType = $dealType;
         $this->apiParas["dealType"] = $dealType;
	}

	public function getDealType(){
	  return $this->dealType;
	}

                        	                   			private $customerExpect;
    	                        
	public function setCustomerExpect($customerExpect){
		$this->customerExpect = $customerExpect;
         $this->apiParas["customerExpect"] = $customerExpect;
	}

	public function getCustomerExpect(){
	  return $this->customerExpect;
	}

                        	                   			private $jdInterveneFlag;
    	                        
	public function setJdInterveneFlag($jdInterveneFlag){
		$this->jdInterveneFlag = $jdInterveneFlag;
         $this->apiParas["jdInterveneFlag"] = $jdInterveneFlag;
	}

	public function getJdInterveneFlag(){
	  return $this->jdInterveneFlag;
	}

                        	                   			private $approveResult;
    	                        
	public function setApproveResult($approveResult){
		$this->approveResult = $approveResult;
         $this->apiParas["approveResult"] = $approveResult;
	}

	public function getApproveResult(){
	  return $this->approveResult;
	}

                        	                   			private $approveReasonCid1;
    	                        
	public function setApproveReasonCid1($approveReasonCid1){
		$this->approveReasonCid1 = $approveReasonCid1;
         $this->apiParas["approveReasonCid1"] = $approveReasonCid1;
	}

	public function getApproveReasonCid1(){
	  return $this->approveReasonCid1;
	}

                        	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                            }





        
 

