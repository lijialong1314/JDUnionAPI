<?php
class LdopDeliveryDeliveryPickupReceiveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.delivery.deliveryPickupReceive";
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
                                                        		                                    	                   			private $josPin;
    	                        
	public function setJosPin($josPin){
		$this->josPin = $josPin;
         $this->apiParas["josPin"] = $josPin;
	}

	public function getJosPin(){
	  return $this->josPin;
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

                        	                   			private $thrOrderId;
    	                        
	public function setThrOrderId($thrOrderId){
		$this->thrOrderId = $thrOrderId;
         $this->apiParas["thrOrderId"] = $thrOrderId;
	}

	public function getThrOrderId(){
	  return $this->thrOrderId;
	}

                        	                   			private $senderName;
    	                        
	public function setSenderName($senderName){
		$this->senderName = $senderName;
         $this->apiParas["senderName"] = $senderName;
	}

	public function getSenderName(){
	  return $this->senderName;
	}

                        	                   			private $senderAddress;
    	                        
	public function setSenderAddress($senderAddress){
		$this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
	}

	public function getSenderAddress(){
	  return $this->senderAddress;
	}

                        	                   			private $senderTel;
    	                        
	public function setSenderTel($senderTel){
		$this->senderTel = $senderTel;
         $this->apiParas["senderTel"] = $senderTel;
	}

	public function getSenderTel(){
	  return $this->senderTel;
	}

                        	                   			private $senderMobile;
    	                        
	public function setSenderMobile($senderMobile){
		$this->senderMobile = $senderMobile;
         $this->apiParas["senderMobile"] = $senderMobile;
	}

	public function getSenderMobile(){
	  return $this->senderMobile;
	}

                        	                   			private $receiveName;
    	                        
	public function setReceiveName($receiveName){
		$this->receiveName = $receiveName;
         $this->apiParas["receiveName"] = $receiveName;
	}

	public function getReceiveName(){
	  return $this->receiveName;
	}

                        	                   			private $receiveAddress;
    	                        
	public function setReceiveAddress($receiveAddress){
		$this->receiveAddress = $receiveAddress;
         $this->apiParas["receiveAddress"] = $receiveAddress;
	}

	public function getReceiveAddress(){
	  return $this->receiveAddress;
	}

                        	                   			private $receiveTel;
    	                        
	public function setReceiveTel($receiveTel){
		$this->receiveTel = $receiveTel;
         $this->apiParas["receiveTel"] = $receiveTel;
	}

	public function getReceiveTel(){
	  return $this->receiveTel;
	}

                        	                   			private $receiveMobile;
    	                        
	public function setReceiveMobile($receiveMobile){
		$this->receiveMobile = $receiveMobile;
         $this->apiParas["receiveMobile"] = $receiveMobile;
	}

	public function getReceiveMobile(){
	  return $this->receiveMobile;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $packageCount;
    	                        
	public function setPackageCount($packageCount){
		$this->packageCount = $packageCount;
         $this->apiParas["packageCount"] = $packageCount;
	}

	public function getPackageCount(){
	  return $this->packageCount;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $vloumLong;
    	                        
	public function setVloumLong($vloumLong){
		$this->vloumLong = $vloumLong;
         $this->apiParas["vloumLong"] = $vloumLong;
	}

	public function getVloumLong(){
	  return $this->vloumLong;
	}

                        	                   			private $vloumWidth;
    	                        
	public function setVloumWidth($vloumWidth){
		$this->vloumWidth = $vloumWidth;
         $this->apiParas["vloumWidth"] = $vloumWidth;
	}

	public function getVloumWidth(){
	  return $this->vloumWidth;
	}

                        	                   			private $vloumHeight;
    	                        
	public function setVloumHeight($vloumHeight){
		$this->vloumHeight = $vloumHeight;
         $this->apiParas["vloumHeight"] = $vloumHeight;
	}

	public function getVloumHeight(){
	  return $this->vloumHeight;
	}

                        	                   			private $vloumn;
    	                        
	public function setVloumn($vloumn){
		$this->vloumn = $vloumn;
         $this->apiParas["vloumn"] = $vloumn;
	}

	public function getVloumn(){
	  return $this->vloumn;
	}

                        	                   			private $description;
    	                        
	public function setDescription($description){
		$this->description = $description;
         $this->apiParas["description"] = $description;
	}

	public function getDescription(){
	  return $this->description;
	}

                        	                   			private $goodsMoney;
    	                        
	public function setGoodsMoney($goodsMoney){
		$this->goodsMoney = $goodsMoney;
         $this->apiParas["goodsMoney"] = $goodsMoney;
	}

	public function getGoodsMoney(){
	  return $this->goodsMoney;
	}

                        	                   			private $collectionValue;
    	                        
	public function setCollectionValue($collectionValue){
		$this->collectionValue = $collectionValue;
         $this->apiParas["collectionValue"] = $collectionValue;
	}

	public function getCollectionValue(){
	  return $this->collectionValue;
	}

                        	                   			private $collectionMoney;
    	                        
	public function setCollectionMoney($collectionMoney){
		$this->collectionMoney = $collectionMoney;
         $this->apiParas["collectionMoney"] = $collectionMoney;
	}

	public function getCollectionMoney(){
	  return $this->collectionMoney;
	}

                        	                   			private $guaranteeValue;
    	                        
	public function setGuaranteeValue($guaranteeValue){
		$this->guaranteeValue = $guaranteeValue;
         $this->apiParas["guaranteeValue"] = $guaranteeValue;
	}

	public function getGuaranteeValue(){
	  return $this->guaranteeValue;
	}

                        	                   			private $guaranteeValueAmount;
    	                        
	public function setGuaranteeValueAmount($guaranteeValueAmount){
		$this->guaranteeValueAmount = $guaranteeValueAmount;
         $this->apiParas["guaranteeValueAmount"] = $guaranteeValueAmount;
	}

	public function getGuaranteeValueAmount(){
	  return $this->guaranteeValueAmount;
	}

                        	                   			private $signReturn;
    	                        
	public function setSignReturn($signReturn){
		$this->signReturn = $signReturn;
         $this->apiParas["signReturn"] = $signReturn;
	}

	public function getSignReturn(){
	  return $this->signReturn;
	}

                        	                   			private $aging;
    	                        
	public function setAging($aging){
		$this->aging = $aging;
         $this->apiParas["aging"] = $aging;
	}

	public function getAging(){
	  return $this->aging;
	}

                        	                   			private $goodsType;
    	                        
	public function setGoodsType($goodsType){
		$this->goodsType = $goodsType;
         $this->apiParas["goodsType"] = $goodsType;
	}

	public function getGoodsType(){
	  return $this->goodsType;
	}

                        	                   			private $warehouseCode;
    	                        
	public function setWarehouseCode($warehouseCode){
		$this->warehouseCode = $warehouseCode;
         $this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode(){
	  return $this->warehouseCode;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $idNumber;
    	                        
	public function setIdNumber($idNumber){
		$this->idNumber = $idNumber;
         $this->apiParas["idNumber"] = $idNumber;
	}

	public function getIdNumber(){
	  return $this->idNumber;
	}

                        	                   			private $addedService;
    	                        
	public function setAddedService($addedService){
		$this->addedService = $addedService;
         $this->apiParas["addedService"] = $addedService;
	}

	public function getAddedService(){
	  return $this->addedService;
	}

                        	                   			private $senderCompany;
    	                        
	public function setSenderCompany($senderCompany){
		$this->senderCompany = $senderCompany;
         $this->apiParas["senderCompany"] = $senderCompany;
	}

	public function getSenderCompany(){
	  return $this->senderCompany;
	}

                        	                   			private $receiveCompany;
    	                        
	public function setReceiveCompany($receiveCompany){
		$this->receiveCompany = $receiveCompany;
         $this->apiParas["receiveCompany"] = $receiveCompany;
	}

	public function getReceiveCompany(){
	  return $this->receiveCompany;
	}

                        	                   			private $senderIdNumber;
    	                        
	public function setSenderIdNumber($senderIdNumber){
		$this->senderIdNumber = $senderIdNumber;
         $this->apiParas["senderIdNumber"] = $senderIdNumber;
	}

	public function getSenderIdNumber(){
	  return $this->senderIdNumber;
	}

                        	                   			private $senderIdType;
    	                        
	public function setSenderIdType($senderIdType){
		$this->senderIdType = $senderIdType;
         $this->apiParas["senderIdType"] = $senderIdType;
	}

	public function getSenderIdType(){
	  return $this->senderIdType;
	}

                                                                        		                                    	                   			private $customerTel;
    	                        
	public function setCustomerTel($customerTel){
		$this->customerTel = $customerTel;
         $this->apiParas["customerTel"] = $customerTel;
	}

	public function getCustomerTel(){
	  return $this->customerTel;
	}

                        	                   			private $backAddress;
    	                        
	public function setBackAddress($backAddress){
		$this->backAddress = $backAddress;
         $this->apiParas["backAddress"] = $backAddress;
	}

	public function getBackAddress(){
	  return $this->backAddress;
	}

                        	                   			private $customerContract;
    	                        
	public function setCustomerContract($customerContract){
		$this->customerContract = $customerContract;
         $this->apiParas["customerContract"] = $customerContract;
	}

	public function getCustomerContract(){
	  return $this->customerContract;
	}

                        	                   			private $pickupOrderId;
    	                        
	public function setPickupOrderId($pickupOrderId){
		$this->pickupOrderId = $pickupOrderId;
         $this->apiParas["pickupOrderId"] = $pickupOrderId;
	}

	public function getPickupOrderId(){
	  return $this->pickupOrderId;
	}

                        	                   			private $pickupWeight;
    	                        
	public function setPickupWeight($pickupWeight){
		$this->pickupWeight = $pickupWeight;
         $this->apiParas["pickupWeight"] = $pickupWeight;
	}

	public function getPickupWeight(){
	  return $this->pickupWeight;
	}

                        	                   			private $pickupRemark;
    	                        
	public function setPickupRemark($pickupRemark){
		$this->pickupRemark = $pickupRemark;
         $this->apiParas["pickupRemark"] = $pickupRemark;
	}

	public function getPickupRemark(){
	  return $this->pickupRemark;
	}

                        	                   			private $pickupVolume;
    	                        
	public function setPickupVolume($pickupVolume){
		$this->pickupVolume = $pickupVolume;
         $this->apiParas["pickupVolume"] = $pickupVolume;
	}

	public function getPickupVolume(){
	  return $this->pickupVolume;
	}

                        	                   			private $isGuaranteeValue;
    	                        
	public function setIsGuaranteeValue($isGuaranteeValue){
		$this->isGuaranteeValue = $isGuaranteeValue;
         $this->apiParas["isGuaranteeValue"] = $isGuaranteeValue;
	}

	public function getIsGuaranteeValue(){
	  return $this->isGuaranteeValue;
	}

                        	                   			private $pickupGuaranteeValueAmount;
    	                        
	public function setPickupGuaranteeValueAmount($pickupGuaranteeValueAmount){
		$this->pickupGuaranteeValueAmount = $pickupGuaranteeValueAmount;
         $this->apiParas["pickupGuaranteeValueAmount"] = $pickupGuaranteeValueAmount;
	}

	public function getPickupGuaranteeValueAmount(){
	  return $this->pickupGuaranteeValueAmount;
	}

                        	                   			private $pickupGoodsType;
    	                        
	public function setPickupGoodsType($pickupGoodsType){
		$this->pickupGoodsType = $pickupGoodsType;
         $this->apiParas["pickupGoodsType"] = $pickupGoodsType;
	}

	public function getPickupGoodsType(){
	  return $this->pickupGoodsType;
	}

                        	                   			private $pickupBizType;
    	                        
	public function setPickupBizType($pickupBizType){
		$this->pickupBizType = $pickupBizType;
         $this->apiParas["pickupBizType"] = $pickupBizType;
	}

	public function getPickupBizType(){
	  return $this->pickupBizType;
	}

                        	                   			private $valueAddService;
    	                        
	public function setValueAddService($valueAddService){
		$this->valueAddService = $valueAddService;
         $this->apiParas["valueAddService"] = $valueAddService;
	}

	public function getValueAddService(){
	  return $this->valueAddService;
	}

                        	                   			private $pickupSenderIdNumber;
    	                        
	public function setPickupSenderIdNumber($pickupSenderIdNumber){
		$this->pickupSenderIdNumber = $pickupSenderIdNumber;
         $this->apiParas["pickupSenderIdNumber"] = $pickupSenderIdNumber;
	}

	public function getPickupSenderIdNumber(){
	  return $this->pickupSenderIdNumber;
	}

                        	                   			private $pickupSenderIdType;
    	                        
	public function setPickupSenderIdType($pickupSenderIdType){
		$this->pickupSenderIdType = $pickupSenderIdType;
         $this->apiParas["pickupSenderIdType"] = $pickupSenderIdType;
	}

	public function getPickupSenderIdType(){
	  return $this->pickupSenderIdType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $productId;
                              public function setProductId($productId ){
                 $this->productId=$productId;
                 $this->apiParas["productId"] = $productId;
              }

              public function getProductId(){
              	return $this->productId;
              }
                                                                                                                                                                                                                                                                                                                                              private $snCode;
                              public function setSnCode($snCode ){
                 $this->snCode=$snCode;
                 $this->apiParas["snCode"] = $snCode;
              }

              public function getSnCode(){
              	return $this->snCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $productName;
                              public function setProductName($productName ){
                 $this->productName=$productName;
                 $this->apiParas["productName"] = $productName;
              }

              public function getProductName(){
              	return $this->productName;
              }
                                                                                                                                                                                                                                                                                                                                              private $productCount;
                              public function setProductCount($productCount ){
                 $this->productCount=$productCount;
                 $this->apiParas["productCount"] = $productCount;
              }

              public function getProductCount(){
              	return $this->productCount;
              }
                                                                                                                                                                                                                                                                                                                                              private $serialNo;
                              public function setSerialNo($serialNo ){
                 $this->serialNo=$serialNo;
                 $this->apiParas["serialNo"] = $serialNo;
              }

              public function getSerialNo(){
              	return $this->serialNo;
              }
                                                                                                                                            }





        
 

