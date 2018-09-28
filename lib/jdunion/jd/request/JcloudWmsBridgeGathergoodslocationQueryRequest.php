<?php
class JcloudWmsBridgeGathergoodslocationQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.bridge.gathergoodslocation.query";
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
                                                        		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $waybillNo;
    	                        
	public function setWaybillNo($waybillNo){
		$this->waybillNo = $waybillNo;
         $this->apiParas["waybillNo"] = $waybillNo;
	}

	public function getWaybillNo(){
	  return $this->waybillNo;
	}

                        	                   			private $carNumber;
    	                        
	public function setCarNumber($carNumber){
		$this->carNumber = $carNumber;
         $this->apiParas["carNumber"] = $carNumber;
	}

	public function getCarNumber(){
	  return $this->carNumber;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

}





        
 

