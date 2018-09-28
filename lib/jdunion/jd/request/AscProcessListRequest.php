<?php
class AscProcessListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.process.list";
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

                        	                   			private $expressCode;
    	                        
	public function setExpressCode($expressCode){
		$this->expressCode = $expressCode;
         $this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode(){
	  return $this->expressCode;
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

                        	                   			private $serviceStatus;
    	                        
	public function setServiceStatus($serviceStatus){
		$this->serviceStatus = $serviceStatus;
         $this->apiParas["serviceStatus"] = $serviceStatus;
	}

	public function getServiceStatus(){
	  return $this->serviceStatus;
	}

                        	                   			private $customerExpect;
    	                        
	public function setCustomerExpect($customerExpect){
		$this->customerExpect = $customerExpect;
         $this->apiParas["customerExpect"] = $customerExpect;
	}

	public function getCustomerExpect(){
	  return $this->customerExpect;
	}

                        	                   			private $approveTimeBegin;
    	                        
	public function setApproveTimeBegin($approveTimeBegin){
		$this->approveTimeBegin = $approveTimeBegin;
         $this->apiParas["approveTimeBegin"] = $approveTimeBegin;
	}

	public function getApproveTimeBegin(){
	  return $this->approveTimeBegin;
	}

                        	                   			private $approveTimeEnd;
    	                        
	public function setApproveTimeEnd($approveTimeEnd){
		$this->approveTimeEnd = $approveTimeEnd;
         $this->apiParas["approveTimeEnd"] = $approveTimeEnd;
	}

	public function getApproveTimeEnd(){
	  return $this->approveTimeEnd;
	}

                        	                   			private $jdInterveneFlag;
    	                        
	public function setJdInterveneFlag($jdInterveneFlag){
		$this->jdInterveneFlag = $jdInterveneFlag;
         $this->apiParas["jdInterveneFlag"] = $jdInterveneFlag;
	}

	public function getJdInterveneFlag(){
	  return $this->jdInterveneFlag;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $timeoutFlag;
    	                        
	public function setTimeoutFlag($timeoutFlag){
		$this->timeoutFlag = $timeoutFlag;
         $this->apiParas["timeoutFlag"] = $timeoutFlag;
	}

	public function getTimeoutFlag(){
	  return $this->timeoutFlag;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                                            		                                    	                   			private $pageNumber;
    	                        
	public function setPageNumber($pageNumber){
		$this->pageNumber = $pageNumber;
         $this->apiParas["pageNumber"] = $pageNumber;
	}

	public function getPageNumber(){
	  return $this->pageNumber;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
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





        
 

