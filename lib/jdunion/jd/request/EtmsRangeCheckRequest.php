<?php
class EtmsRangeCheckRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.etms.range.check";
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
                                                        		                                    	                        	                        	                   			private $salePlat;
    	                        
	public function setSalePlat($salePlat){
		$this->salePlat = $salePlat;
         $this->apiParas["salePlat"] = $salePlat;
	}

	public function getSalePlat(){
	  return $this->salePlat;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $goodsType;
    	                        
	public function setGoodsType($goodsType){
		$this->goodsType = $goodsType;
         $this->apiParas["goodsType"] = $goodsType;
	}

	public function getGoodsType(){
	  return $this->goodsType;
	}

                        	                   			private $wareHouseCode;
    	                        
	public function setWareHouseCode($wareHouseCode){
		$this->wareHouseCode = $wareHouseCode;
         $this->apiParas["wareHouseCode"] = $wareHouseCode;
	}

	public function getWareHouseCode(){
	  return $this->wareHouseCode;
	}

                        	                   			private $receiveAddress;
    	                        
	public function setReceiveAddress($receiveAddress){
		$this->receiveAddress = $receiveAddress;
         $this->apiParas["receiveAddress"] = $receiveAddress;
	}

	public function getReceiveAddress(){
	  return $this->receiveAddress;
	}

                        	                   			private $senderProvinceId;
    	                        
	public function setSenderProvinceId($senderProvinceId){
		$this->senderProvinceId = $senderProvinceId;
         $this->apiParas["senderProvinceId"] = $senderProvinceId;
	}

	public function getSenderProvinceId(){
	  return $this->senderProvinceId;
	}

                        	                   			private $senderCityId;
    	                        
	public function setSenderCityId($senderCityId){
		$this->senderCityId = $senderCityId;
         $this->apiParas["senderCityId"] = $senderCityId;
	}

	public function getSenderCityId(){
	  return $this->senderCityId;
	}

                        	                   			private $senderCountyId;
    	                        
	public function setSenderCountyId($senderCountyId){
		$this->senderCountyId = $senderCountyId;
         $this->apiParas["senderCountyId"] = $senderCountyId;
	}

	public function getSenderCountyId(){
	  return $this->senderCountyId;
	}

                        	                   			private $senderTownId;
    	                        
	public function setSenderTownId($senderTownId){
		$this->senderTownId = $senderTownId;
         $this->apiParas["senderTownId"] = $senderTownId;
	}

	public function getSenderTownId(){
	  return $this->senderTownId;
	}

                        	                   			private $receiverProvinceId;
    	                        
	public function setReceiverProvinceId($receiverProvinceId){
		$this->receiverProvinceId = $receiverProvinceId;
         $this->apiParas["receiverProvinceId"] = $receiverProvinceId;
	}

	public function getReceiverProvinceId(){
	  return $this->receiverProvinceId;
	}

                        	                   			private $receiverCityId;
    	                        
	public function setReceiverCityId($receiverCityId){
		$this->receiverCityId = $receiverCityId;
         $this->apiParas["receiverCityId"] = $receiverCityId;
	}

	public function getReceiverCityId(){
	  return $this->receiverCityId;
	}

                        	                   			private $receiverCountyId;
    	                        
	public function setReceiverCountyId($receiverCountyId){
		$this->receiverCountyId = $receiverCountyId;
         $this->apiParas["receiverCountyId"] = $receiverCountyId;
	}

	public function getReceiverCountyId(){
	  return $this->receiverCountyId;
	}

                        	                   			private $receiverTownId;
    	                        
	public function setReceiverTownId($receiverTownId){
		$this->receiverTownId = $receiverTownId;
         $this->apiParas["receiverTownId"] = $receiverTownId;
	}

	public function getReceiverTownId(){
	  return $this->receiverTownId;
	}

                        	                   			private $sendTime;
    	                        
	public function setSendTime($sendTime){
		$this->sendTime = $sendTime;
         $this->apiParas["sendTime"] = $sendTime;
	}

	public function getSendTime(){
	  return $this->sendTime;
	}

                        	                   			private $isCod;
    	                        
	public function setIsCod($isCod){
		$this->isCod = $isCod;
         $this->apiParas["isCod"] = $isCod;
	}

	public function getIsCod(){
	  return $this->isCod;
	}

                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $addedService;
    	                        
	public function setAddedService($addedService){
		$this->addedService = $addedService;
         $this->apiParas["addedService"] = $addedService;
	}

	public function getAddedService(){
	  return $this->addedService;
	}

                            }





        
 

