<?php
class AscFreightSaveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.freight.save";
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

                        	                   			private $expressCompany;
    	                        
	public function setExpressCompany($expressCompany){
		$this->expressCompany = $expressCompany;
         $this->apiParas["expressCompany"] = $expressCompany;
	}

	public function getExpressCompany(){
	  return $this->expressCompany;
	}

                        	                   			private $freightMoney;
    	                        
	public function setFreightMoney($freightMoney){
		$this->freightMoney = $freightMoney;
         $this->apiParas["freightMoney"] = $freightMoney;
	}

	public function getFreightMoney(){
	  return $this->freightMoney;
	}

                        	                   			private $shipWayId;
    	                        
	public function setShipWayId($shipWayId){
		$this->shipWayId = $shipWayId;
         $this->apiParas["shipWayId"] = $shipWayId;
	}

	public function getShipWayId(){
	  return $this->shipWayId;
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





        
 

