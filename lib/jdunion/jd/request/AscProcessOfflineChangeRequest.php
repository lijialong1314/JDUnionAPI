<?php
class AscProcessOfflineChangeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.process.offline.change";
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

                        	                   			private $operateRemark;
    	                        
	public function setOperateRemark($operateRemark){
		$this->operateRemark = $operateRemark;
         $this->apiParas["operateRemark"] = $operateRemark;
	}

	public function getOperateRemark(){
	  return $this->operateRemark;
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

                        	                   			private $sysVersion;
    	                        
	public function setSysVersion($sysVersion){
		$this->sysVersion = $sysVersion;
         $this->apiParas["sysVersion"] = $sysVersion;
	}

	public function getSysVersion(){
	  return $this->sysVersion;
	}

                        	                   			private $opFlag;
    	                        
	public function setOpFlag($opFlag){
		$this->opFlag = $opFlag;
         $this->apiParas["opFlag"] = $opFlag;
	}

	public function getOpFlag(){
	  return $this->opFlag;
	}

                        	                   			private $partExpressId;
    	                        
	public function setPartExpressId($partExpressId){
		$this->partExpressId = $partExpressId;
         $this->apiParas["partExpressId"] = $partExpressId;
	}

	public function getPartExpressId(){
	  return $this->partExpressId;
	}

                        	                   			private $shipWayId;
    	                        
	public function setShipWayId($shipWayId){
		$this->shipWayId = $shipWayId;
         $this->apiParas["shipWayId"] = $shipWayId;
	}

	public function getShipWayId(){
	  return $this->shipWayId;
	}

                        	                   			private $shipWayName;
    	                        
	public function setShipWayName($shipWayName){
		$this->shipWayName = $shipWayName;
         $this->apiParas["shipWayName"] = $shipWayName;
	}

	public function getShipWayName(){
	  return $this->shipWayName;
	}

                        	                   			private $expressCode;
    	                        
	public function setExpressCode($expressCode){
		$this->expressCode = $expressCode;
         $this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode(){
	  return $this->expressCode;
	}

                        	                   			private $relationBillId;
    	                        
	public function setRelationBillId($relationBillId){
		$this->relationBillId = $relationBillId;
         $this->apiParas["relationBillId"] = $relationBillId;
	}

	public function getRelationBillId(){
	  return $this->relationBillId;
	}

                        	                   			private $wareType;
    	                        
	public function setWareType($wareType){
		$this->wareType = $wareType;
         $this->apiParas["wareType"] = $wareType;
	}

	public function getWareType(){
	  return $this->wareType;
	}

                        	                   			private $partSrc;
    	                        
	public function setPartSrc($partSrc){
		$this->partSrc = $partSrc;
         $this->apiParas["partSrc"] = $partSrc;
	}

	public function getPartSrc(){
	  return $this->partSrc;
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





        
 

