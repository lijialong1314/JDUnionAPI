<?php
class AscProcessBackRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.process.back";
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

                        	                   			private $consigneeName;
    	                        
	public function setConsigneeName($consigneeName){
		$this->consigneeName = $consigneeName;
         $this->apiParas["consigneeName"] = $consigneeName;
	}

	public function getConsigneeName(){
	  return $this->consigneeName;
	}

                        	                   			private $consigneeTel;
    	                        
	public function setConsigneeTel($consigneeTel){
		$this->consigneeTel = $consigneeTel;
         $this->apiParas["consigneeTel"] = $consigneeTel;
	}

	public function getConsigneeTel(){
	  return $this->consigneeTel;
	}

                                            		                                    	                   			private $provinceCode;
    	                        
	public function setProvinceCode($provinceCode){
		$this->provinceCode = $provinceCode;
         $this->apiParas["provinceCode"] = $provinceCode;
	}

	public function getProvinceCode(){
	  return $this->provinceCode;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $countyCode;
    	                        
	public function setCountyCode($countyCode){
		$this->countyCode = $countyCode;
         $this->apiParas["countyCode"] = $countyCode;
	}

	public function getCountyCode(){
	  return $this->countyCode;
	}

                        	                   			private $villageCode;
    	                        
	public function setVillageCode($villageCode){
		$this->villageCode = $villageCode;
         $this->apiParas["villageCode"] = $villageCode;
	}

	public function getVillageCode(){
	  return $this->villageCode;
	}

                        	                   			private $detailAddress;
    	                        
	public function setDetailAddress($detailAddress){
		$this->detailAddress = $detailAddress;
         $this->apiParas["detailAddress"] = $detailAddress;
	}

	public function getDetailAddress(){
	  return $this->detailAddress;
	}

                                                    	                   			private $repairState;
    	                        
	public function setRepairState($repairState){
		$this->repairState = $repairState;
         $this->apiParas["repairState"] = $repairState;
	}

	public function getRepairState(){
	  return $this->repairState;
	}

                        	                   			private $applyRemark;
    	                        
	public function setApplyRemark($applyRemark){
		$this->applyRemark = $applyRemark;
         $this->apiParas["applyRemark"] = $applyRemark;
	}

	public function getApplyRemark(){
	  return $this->applyRemark;
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

                        	                   			private $partCodes;
    	                        
	public function setPartCodes($partCodes){
		$this->partCodes = $partCodes;
         $this->apiParas["partCodes"] = $partCodes;
	}

	public function getPartCodes(){
	  return $this->partCodes;
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





        
 

