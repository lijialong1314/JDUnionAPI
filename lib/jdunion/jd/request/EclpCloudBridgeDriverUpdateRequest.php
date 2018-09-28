<?php
class EclpCloudBridgeDriverUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.cloud.bridge.driver.update";
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

                        	                   			private $getTime;
    	                        
	public function setGetTime($getTime){
		$this->getTime = $getTime;
         $this->apiParas["getTime"] = $getTime;
	}

	public function getGetTime(){
	  return $this->getTime;
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

                        	                   			private $driverCarNo;
    	                        
	public function setDriverCarNo($driverCarNo){
		$this->driverCarNo = $driverCarNo;
         $this->apiParas["driverCarNo"] = $driverCarNo;
	}

	public function getDriverCarNo(){
	  return $this->driverCarNo;
	}

                        	                   			private $driverPhone;
    	                        
	public function setDriverPhone($driverPhone){
		$this->driverPhone = $driverPhone;
         $this->apiParas["driverPhone"] = $driverPhone;
	}

	public function getDriverPhone(){
	  return $this->driverPhone;
	}

                        	                   			private $driverName;
    	                        
	public function setDriverName($driverName){
		$this->driverName = $driverName;
         $this->apiParas["driverName"] = $driverName;
	}

	public function getDriverName(){
	  return $this->driverName;
	}

                        	                   			private $deliverySeqNo;
    	                        
	public function setDeliverySeqNo($deliverySeqNo){
		$this->deliverySeqNo = $deliverySeqNo;
         $this->apiParas["deliverySeqNo"] = $deliverySeqNo;
	}

	public function getDeliverySeqNo(){
	  return $this->deliverySeqNo;
	}

                                                    	}





        
 

