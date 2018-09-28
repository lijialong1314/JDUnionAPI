<?php
class EclpOrderEquatorOrderCustomsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.equatorOrderCustoms";
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
                                                        		                                    	                   			private $isvUUID;
    	                        
	public function setIsvUUID($isvUUID){
		$this->isvUUID = $isvUUID;
         $this->apiParas["isvUUID"] = $isvUUID;
	}

	public function getIsvUUID(){
	  return $this->isvUUID;
	}

                        	                   			private $isvSource;
    	                        
	public function setIsvSource($isvSource){
		$this->isvSource = $isvSource;
         $this->apiParas["isvSource"] = $isvSource;
	}

	public function getIsvSource(){
	  return $this->isvSource;
	}

                        	                   			private $platformId;
    	                        
	public function setPlatformId($platformId){
		$this->platformId = $platformId;
         $this->apiParas["platformId"] = $platformId;
	}

	public function getPlatformId(){
	  return $this->platformId;
	}

                        	                   			private $platformName;
    	                        
	public function setPlatformName($platformName){
		$this->platformName = $platformName;
         $this->apiParas["platformName"] = $platformName;
	}

	public function getPlatformName(){
	  return $this->platformName;
	}

                        	                   			private $platformType;
    	                        
	public function setPlatformType($platformType){
		$this->platformType = $platformType;
         $this->apiParas["platformType"] = $platformType;
	}

	public function getPlatformType(){
	  return $this->platformType;
	}

                        	                   			private $spSoNo;
    	                        
	public function setSpSoNo($spSoNo){
		$this->spSoNo = $spSoNo;
         $this->apiParas["spSoNo"] = $spSoNo;
	}

	public function getSpSoNo(){
	  return $this->spSoNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $inJdwms;
    	                        
	public function setInJdwms($inJdwms){
		$this->inJdwms = $inJdwms;
         $this->apiParas["inJdwms"] = $inJdwms;
	}

	public function getInJdwms(){
	  return $this->inJdwms;
	}

                        	                   			private $salesPlatformCreateTime;
    	                        
	public function setSalesPlatformCreateTime($salesPlatformCreateTime){
		$this->salesPlatformCreateTime = $salesPlatformCreateTime;
         $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
	}

	public function getSalesPlatformCreateTime(){
	  return $this->salesPlatformCreateTime;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $venderName;
    	                        
	public function setVenderName($venderName){
		$this->venderName = $venderName;
         $this->apiParas["venderName"] = $venderName;
	}

	public function getVenderName(){
	  return $this->venderName;
	}

                        	                   			private $consigneeName;
    	                        
	public function setConsigneeName($consigneeName){
		$this->consigneeName = $consigneeName;
         $this->apiParas["consigneeName"] = $consigneeName;
	}

	public function getConsigneeName(){
	  return $this->consigneeName;
	}

                        	                   			private $consigneeMobile;
    	                        
	public function setConsigneeMobile($consigneeMobile){
		$this->consigneeMobile = $consigneeMobile;
         $this->apiParas["consigneeMobile"] = $consigneeMobile;
	}

	public function getConsigneeMobile(){
	  return $this->consigneeMobile;
	}

                        	                   			private $consigneePhone;
    	                        
	public function setConsigneePhone($consigneePhone){
		$this->consigneePhone = $consigneePhone;
         $this->apiParas["consigneePhone"] = $consigneePhone;
	}

	public function getConsigneePhone(){
	  return $this->consigneePhone;
	}

                        	                   			private $consigneeEmail;
    	                        
	public function setConsigneeEmail($consigneeEmail){
		$this->consigneeEmail = $consigneeEmail;
         $this->apiParas["consigneeEmail"] = $consigneeEmail;
	}

	public function getConsigneeEmail(){
	  return $this->consigneeEmail;
	}

                        	                   			private $consigneeAddress;
    	                        
	public function setConsigneeAddress($consigneeAddress){
		$this->consigneeAddress = $consigneeAddress;
         $this->apiParas["consigneeAddress"] = $consigneeAddress;
	}

	public function getConsigneeAddress(){
	  return $this->consigneeAddress;
	}

                        	                   			private $consigneePostcode;
    	                        
	public function setConsigneePostcode($consigneePostcode){
		$this->consigneePostcode = $consigneePostcode;
         $this->apiParas["consigneePostcode"] = $consigneePostcode;
	}

	public function getConsigneePostcode(){
	  return $this->consigneePostcode;
	}

                        	                   			private $consigneeCountry;
    	                        
	public function setConsigneeCountry($consigneeCountry){
		$this->consigneeCountry = $consigneeCountry;
         $this->apiParas["consigneeCountry"] = $consigneeCountry;
	}

	public function getConsigneeCountry(){
	  return $this->consigneeCountry;
	}

                        	                   			private $addressProvince;
    	                        
	public function setAddressProvince($addressProvince){
		$this->addressProvince = $addressProvince;
         $this->apiParas["addressProvince"] = $addressProvince;
	}

	public function getAddressProvince(){
	  return $this->addressProvince;
	}

                        	                   			private $addressCity;
    	                        
	public function setAddressCity($addressCity){
		$this->addressCity = $addressCity;
         $this->apiParas["addressCity"] = $addressCity;
	}

	public function getAddressCity(){
	  return $this->addressCity;
	}

                        	                   			private $addressCounty;
    	                        
	public function setAddressCounty($addressCounty){
		$this->addressCounty = $addressCounty;
         $this->apiParas["addressCounty"] = $addressCounty;
	}

	public function getAddressCounty(){
	  return $this->addressCounty;
	}

                        	                   			private $addressTown;
    	                        
	public function setAddressTown($addressTown){
		$this->addressTown = $addressTown;
         $this->apiParas["addressTown"] = $addressTown;
	}

	public function getAddressTown(){
	  return $this->addressTown;
	}

                        	                   			private $declareOrder;
    	                        
	public function setDeclareOrder($declareOrder){
		$this->declareOrder = $declareOrder;
         $this->apiParas["declareOrder"] = $declareOrder;
	}

	public function getDeclareOrder(){
	  return $this->declareOrder;
	}

                        	                   			private $ccProvider;
    	                        
	public function setCcProvider($ccProvider){
		$this->ccProvider = $ccProvider;
         $this->apiParas["ccProvider"] = $ccProvider;
	}

	public function getCcProvider(){
	  return $this->ccProvider;
	}

                        	                   			private $ccProviderName;
    	                        
	public function setCcProviderName($ccProviderName){
		$this->ccProviderName = $ccProviderName;
         $this->apiParas["ccProviderName"] = $ccProviderName;
	}

	public function getCcProviderName(){
	  return $this->ccProviderName;
	}

                        	                   			private $postType;
    	                        
	public function setPostType($postType){
		$this->postType = $postType;
         $this->apiParas["postType"] = $postType;
	}

	public function getPostType(){
	  return $this->postType;
	}

                        	                   			private $pattern;
    	                        
	public function setPattern($pattern){
		$this->pattern = $pattern;
         $this->apiParas["pattern"] = $pattern;
	}

	public function getPattern(){
	  return $this->pattern;
	}

                        	                   			private $customs;
    	                        
	public function setCustoms($customs){
		$this->customs = $customs;
         $this->apiParas["customs"] = $customs;
	}

	public function getCustoms(){
	  return $this->customs;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $ebpCode;
    	                        
	public function setEbpCode($ebpCode){
		$this->ebpCode = $ebpCode;
         $this->apiParas["ebpCode"] = $ebpCode;
	}

	public function getEbpCode(){
	  return $this->ebpCode;
	}

                        	                   			private $ebpName;
    	                        
	public function setEbpName($ebpName){
		$this->ebpName = $ebpName;
         $this->apiParas["ebpName"] = $ebpName;
	}

	public function getEbpName(){
	  return $this->ebpName;
	}

                        	                   			private $ebcCode;
    	                        
	public function setEbcCode($ebcCode){
		$this->ebcCode = $ebcCode;
         $this->apiParas["ebcCode"] = $ebcCode;
	}

	public function getEbcCode(){
	  return $this->ebcCode;
	}

                        	                   			private $ebcName;
    	                        
	public function setEbcName($ebcName){
		$this->ebcName = $ebcName;
         $this->apiParas["ebcName"] = $ebcName;
	}

	public function getEbcName(){
	  return $this->ebcName;
	}

                        	                   			private $delivery;
    	                        
	public function setDelivery($delivery){
		$this->delivery = $delivery;
         $this->apiParas["delivery"] = $delivery;
	}

	public function getDelivery(){
	  return $this->delivery;
	}

                        	                   			private $discount;
    	                        
	public function setDiscount($discount){
		$this->discount = $discount;
         $this->apiParas["discount"] = $discount;
	}

	public function getDiscount(){
	  return $this->discount;
	}

                        	                   			private $discountNote;
    	                        
	public function setDiscountNote($discountNote){
		$this->discountNote = $discountNote;
         $this->apiParas["discountNote"] = $discountNote;
	}

	public function getDiscountNote(){
	  return $this->discountNote;
	}

                        	                   			private $istax;
    	                        
	public function setIstax($istax){
		$this->istax = $istax;
         $this->apiParas["istax"] = $istax;
	}

	public function getIstax(){
	  return $this->istax;
	}

                        	                   			private $taxTotal;
    	                        
	public function setTaxTotal($taxTotal){
		$this->taxTotal = $taxTotal;
         $this->apiParas["taxTotal"] = $taxTotal;
	}

	public function getTaxTotal(){
	  return $this->taxTotal;
	}

                        	                   			private $freight;
    	                        
	public function setFreight($freight){
		$this->freight = $freight;
         $this->apiParas["freight"] = $freight;
	}

	public function getFreight(){
	  return $this->freight;
	}

                        	                   			private $otherPrice;
    	                        
	public function setOtherPrice($otherPrice){
		$this->otherPrice = $otherPrice;
         $this->apiParas["otherPrice"] = $otherPrice;
	}

	public function getOtherPrice(){
	  return $this->otherPrice;
	}

                        	                   			private $goodsValue;
    	                        
	public function setGoodsValue($goodsValue){
		$this->goodsValue = $goodsValue;
         $this->apiParas["goodsValue"] = $goodsValue;
	}

	public function getGoodsValue(){
	  return $this->goodsValue;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $netWeight;
    	                        
	public function setNetWeight($netWeight){
		$this->netWeight = $netWeight;
         $this->apiParas["netWeight"] = $netWeight;
	}

	public function getNetWeight(){
	  return $this->netWeight;
	}

                        	                   			private $batchNumbers;
    	                        
	public function setBatchNumbers($batchNumbers){
		$this->batchNumbers = $batchNumbers;
         $this->apiParas["batchNumbers"] = $batchNumbers;
	}

	public function getBatchNumbers(){
	  return $this->batchNumbers;
	}

                        	                   			private $buyerRegNo;
    	                        
	public function setBuyerRegNo($buyerRegNo){
		$this->buyerRegNo = $buyerRegNo;
         $this->apiParas["buyerRegNo"] = $buyerRegNo;
	}

	public function getBuyerRegNo(){
	  return $this->buyerRegNo;
	}

                        	                   			private $buyerPhone;
    	                        
	public function setBuyerPhone($buyerPhone){
		$this->buyerPhone = $buyerPhone;
         $this->apiParas["buyerPhone"] = $buyerPhone;
	}

	public function getBuyerPhone(){
	  return $this->buyerPhone;
	}

                        	                   			private $buyerName;
    	                        
	public function setBuyerName($buyerName){
		$this->buyerName = $buyerName;
         $this->apiParas["buyerName"] = $buyerName;
	}

	public function getBuyerName(){
	  return $this->buyerName;
	}

                        	                   			private $buyerIdType;
    	                        
	public function setBuyerIdType($buyerIdType){
		$this->buyerIdType = $buyerIdType;
         $this->apiParas["buyerIdType"] = $buyerIdType;
	}

	public function getBuyerIdType(){
	  return $this->buyerIdType;
	}

                        	                   			private $buyerIdNumber;
    	                        
	public function setBuyerIdNumber($buyerIdNumber){
		$this->buyerIdNumber = $buyerIdNumber;
         $this->apiParas["buyerIdNumber"] = $buyerIdNumber;
	}

	public function getBuyerIdNumber(){
	  return $this->buyerIdNumber;
	}

                        	                   			private $senderName;
    	                        
	public function setSenderName($senderName){
		$this->senderName = $senderName;
         $this->apiParas["senderName"] = $senderName;
	}

	public function getSenderName(){
	  return $this->senderName;
	}

                        	                   			private $senderCompanyName;
    	                        
	public function setSenderCompanyName($senderCompanyName){
		$this->senderCompanyName = $senderCompanyName;
         $this->apiParas["senderCompanyName"] = $senderCompanyName;
	}

	public function getSenderCompanyName(){
	  return $this->senderCompanyName;
	}

                        	                   			private $senderCountry;
    	                        
	public function setSenderCountry($senderCountry){
		$this->senderCountry = $senderCountry;
         $this->apiParas["senderCountry"] = $senderCountry;
	}

	public function getSenderCountry(){
	  return $this->senderCountry;
	}

                        	                   			private $senderZip;
    	                        
	public function setSenderZip($senderZip){
		$this->senderZip = $senderZip;
         $this->apiParas["senderZip"] = $senderZip;
	}

	public function getSenderZip(){
	  return $this->senderZip;
	}

                        	                   			private $senderCity;
    	                        
	public function setSenderCity($senderCity){
		$this->senderCity = $senderCity;
         $this->apiParas["senderCity"] = $senderCity;
	}

	public function getSenderCity(){
	  return $this->senderCity;
	}

                        	                   			private $senderProvince;
    	                        
	public function setSenderProvince($senderProvince){
		$this->senderProvince = $senderProvince;
         $this->apiParas["senderProvince"] = $senderProvince;
	}

	public function getSenderProvince(){
	  return $this->senderProvince;
	}

                        	                   			private $senderTel;
    	                        
	public function setSenderTel($senderTel){
		$this->senderTel = $senderTel;
         $this->apiParas["senderTel"] = $senderTel;
	}

	public function getSenderTel(){
	  return $this->senderTel;
	}

                        	                   			private $senderAddr;
    	                        
	public function setSenderAddr($senderAddr){
		$this->senderAddr = $senderAddr;
         $this->apiParas["senderAddr"] = $senderAddr;
	}

	public function getSenderAddr(){
	  return $this->senderAddr;
	}

                        	                   			private $customsRemark;
    	                        
	public function setCustomsRemark($customsRemark){
		$this->customsRemark = $customsRemark;
         $this->apiParas["customsRemark"] = $customsRemark;
	}

	public function getCustomsRemark(){
	  return $this->customsRemark;
	}

                        	                   			private $declarePaymentList;
    	                        
	public function setDeclarePaymentList($declarePaymentList){
		$this->declarePaymentList = $declarePaymentList;
         $this->apiParas["declarePaymentList"] = $declarePaymentList;
	}

	public function getDeclarePaymentList(){
	  return $this->declarePaymentList;
	}

                        	                   			private $paymentType;
    	                        
	public function setPaymentType($paymentType){
		$this->paymentType = $paymentType;
         $this->apiParas["paymentType"] = $paymentType;
	}

	public function getPaymentType(){
	  return $this->paymentType;
	}

                        	                   			private $payCode;
    	                        
	public function setPayCode($payCode){
		$this->payCode = $payCode;
         $this->apiParas["payCode"] = $payCode;
	}

	public function getPayCode(){
	  return $this->payCode;
	}

                        	                   			private $payName;
    	                        
	public function setPayName($payName){
		$this->payName = $payName;
         $this->apiParas["payName"] = $payName;
	}

	public function getPayName(){
	  return $this->payName;
	}

                        	                   			private $payTransactionId;
    	                        
	public function setPayTransactionId($payTransactionId){
		$this->payTransactionId = $payTransactionId;
         $this->apiParas["payTransactionId"] = $payTransactionId;
	}

	public function getPayTransactionId(){
	  return $this->payTransactionId;
	}

                        	                   			private $currency;
    	                        
	public function setCurrency($currency){
		$this->currency = $currency;
         $this->apiParas["currency"] = $currency;
	}

	public function getCurrency(){
	  return $this->currency;
	}

                        	                   			private $paymentConfirmTime;
    	                        
	public function setPaymentConfirmTime($paymentConfirmTime){
		$this->paymentConfirmTime = $paymentConfirmTime;
         $this->apiParas["paymentConfirmTime"] = $paymentConfirmTime;
	}

	public function getPaymentConfirmTime(){
	  return $this->paymentConfirmTime;
	}

                        	                   			private $shouldPay;
    	                        
	public function setShouldPay($shouldPay){
		$this->shouldPay = $shouldPay;
         $this->apiParas["shouldPay"] = $shouldPay;
	}

	public function getShouldPay(){
	  return $this->shouldPay;
	}

                        	                   			private $receiveNo;
    	                        
	public function setReceiveNo($receiveNo){
		$this->receiveNo = $receiveNo;
         $this->apiParas["receiveNo"] = $receiveNo;
	}

	public function getReceiveNo(){
	  return $this->receiveNo;
	}

                        	                   			private $payRemark;
    	                        
	public function setPayRemark($payRemark){
		$this->payRemark = $payRemark;
         $this->apiParas["payRemark"] = $payRemark;
	}

	public function getPayRemark(){
	  return $this->payRemark;
	}

                        	                   			private $declareWaybill;
    	                        
	public function setDeclareWaybill($declareWaybill){
		$this->declareWaybill = $declareWaybill;
         $this->apiParas["declareWaybill"] = $declareWaybill;
	}

	public function getDeclareWaybill(){
	  return $this->declareWaybill;
	}

                        	                   			private $logisticsCode;
    	                        
	public function setLogisticsCode($logisticsCode){
		$this->logisticsCode = $logisticsCode;
         $this->apiParas["logisticsCode"] = $logisticsCode;
	}

	public function getLogisticsCode(){
	  return $this->logisticsCode;
	}

                        	                   			private $logisticsName;
    	                        
	public function setLogisticsName($logisticsName){
		$this->logisticsName = $logisticsName;
         $this->apiParas["logisticsName"] = $logisticsName;
	}

	public function getLogisticsName(){
	  return $this->logisticsName;
	}

                        	                   			private $bdOwnerNo;
    	                        
	public function setBdOwnerNo($bdOwnerNo){
		$this->bdOwnerNo = $bdOwnerNo;
         $this->apiParas["bdOwnerNo"] = $bdOwnerNo;
	}

	public function getBdOwnerNo(){
	  return $this->bdOwnerNo;
	}

                        	                   			private $logisticsNo;
    	                        
	public function setLogisticsNo($logisticsNo){
		$this->logisticsNo = $logisticsNo;
         $this->apiParas["logisticsNo"] = $logisticsNo;
	}

	public function getLogisticsNo(){
	  return $this->logisticsNo;
	}

                        	                   			private $packNo;
    	                        
	public function setPackNo($packNo){
		$this->packNo = $packNo;
         $this->apiParas["packNo"] = $packNo;
	}

	public function getPackNo(){
	  return $this->packNo;
	}

                        	                   			private $logisticsRemark;
    	                        
	public function setLogisticsRemark($logisticsRemark){
		$this->logisticsRemark = $logisticsRemark;
         $this->apiParas["logisticsRemark"] = $logisticsRemark;
	}

	public function getLogisticsRemark(){
	  return $this->logisticsRemark;
	}

                        	                   			private $isDelivery;
    	                        
	public function setIsDelivery($isDelivery){
		$this->isDelivery = $isDelivery;
         $this->apiParas["isDelivery"] = $isDelivery;
	}

	public function getIsDelivery(){
	  return $this->isDelivery;
	}

                        	                   			private $receivable;
    	                        
	public function setReceivable($receivable){
		$this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
	}

	public function getReceivable(){
	  return $this->receivable;
	}

                        	                   			private $consigneeRemark;
    	                        
	public function setConsigneeRemark($consigneeRemark){
		$this->consigneeRemark = $consigneeRemark;
         $this->apiParas["consigneeRemark"] = $consigneeRemark;
	}

	public function getConsigneeRemark(){
	  return $this->consigneeRemark;
	}

                        	                   			private $packageMark;
    	                        
	public function setPackageMark($packageMark){
		$this->packageMark = $packageMark;
         $this->apiParas["packageMark"] = $packageMark;
	}

	public function getPackageMark(){
	  return $this->packageMark;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                   			private $destinationCode;
    	                        
	public function setDestinationCode($destinationCode){
		$this->destinationCode = $destinationCode;
         $this->apiParas["destinationCode"] = $destinationCode;
	}

	public function getDestinationCode(){
	  return $this->destinationCode;
	}

                        	                   			private $destinationName;
    	                        
	public function setDestinationName($destinationName){
		$this->destinationName = $destinationName;
         $this->apiParas["destinationName"] = $destinationName;
	}

	public function getDestinationName(){
	  return $this->destinationName;
	}

                        	                   			private $sendWebsiteCode;
    	                        
	public function setSendWebsiteCode($sendWebsiteCode){
		$this->sendWebsiteCode = $sendWebsiteCode;
         $this->apiParas["sendWebsiteCode"] = $sendWebsiteCode;
	}

	public function getSendWebsiteCode(){
	  return $this->sendWebsiteCode;
	}

                        	                   			private $sendWebsiteName;
    	                        
	public function setSendWebsiteName($sendWebsiteName){
		$this->sendWebsiteName = $sendWebsiteName;
         $this->apiParas["sendWebsiteName"] = $sendWebsiteName;
	}

	public function getSendWebsiteName(){
	  return $this->sendWebsiteName;
	}

                        	                   			private $sendMode;
    	                        
	public function setSendMode($sendMode){
		$this->sendMode = $sendMode;
         $this->apiParas["sendMode"] = $sendMode;
	}

	public function getSendMode(){
	  return $this->sendMode;
	}

                        	                   			private $receiveMode;
    	                        
	public function setReceiveMode($receiveMode){
		$this->receiveMode = $receiveMode;
         $this->apiParas["receiveMode"] = $receiveMode;
	}

	public function getReceiveMode(){
	  return $this->receiveMode;
	}

                        	                   			private $appointDeliveryTime;
    	                        
	public function setAppointDeliveryTime($appointDeliveryTime){
		$this->appointDeliveryTime = $appointDeliveryTime;
         $this->apiParas["appointDeliveryTime"] = $appointDeliveryTime;
	}

	public function getAppointDeliveryTime(){
	  return $this->appointDeliveryTime;
	}

                        	                   			private $insuredPriceFlag;
    	                        
	public function setInsuredPriceFlag($insuredPriceFlag){
		$this->insuredPriceFlag = $insuredPriceFlag;
         $this->apiParas["insuredPriceFlag"] = $insuredPriceFlag;
	}

	public function getInsuredPriceFlag(){
	  return $this->insuredPriceFlag;
	}

                        	                   			private $insuredValue;
    	                        
	public function setInsuredValue($insuredValue){
		$this->insuredValue = $insuredValue;
         $this->apiParas["insuredValue"] = $insuredValue;
	}

	public function getInsuredValue(){
	  return $this->insuredValue;
	}

                        	                   			private $insuredFee;
    	                        
	public function setInsuredFee($insuredFee){
		$this->insuredFee = $insuredFee;
         $this->apiParas["insuredFee"] = $insuredFee;
	}

	public function getInsuredFee(){
	  return $this->insuredFee;
	}

                        	                   			private $thirdPayment;
    	                        
	public function setThirdPayment($thirdPayment){
		$this->thirdPayment = $thirdPayment;
         $this->apiParas["thirdPayment"] = $thirdPayment;
	}

	public function getThirdPayment(){
	  return $this->thirdPayment;
	}

                        	                   			private $monthlyAccount;
    	                        
	public function setMonthlyAccount($monthlyAccount){
		$this->monthlyAccount = $monthlyAccount;
         $this->apiParas["monthlyAccount"] = $monthlyAccount;
	}

	public function getMonthlyAccount(){
	  return $this->monthlyAccount;
	}

                        	                   			private $shipment;
    	                        
	public function setShipment($shipment){
		$this->shipment = $shipment;
         $this->apiParas["shipment"] = $shipment;
	}

	public function getShipment(){
	  return $this->shipment;
	}

                        	                   			private $sellerRemark;
    	                        
	public function setSellerRemark($sellerRemark){
		$this->sellerRemark = $sellerRemark;
         $this->apiParas["sellerRemark"] = $sellerRemark;
	}

	public function getSellerRemark(){
	  return $this->sellerRemark;
	}

                        	                   			private $thirdSite;
    	                        
	public function setThirdSite($thirdSite){
		$this->thirdSite = $thirdSite;
         $this->apiParas["thirdSite"] = $thirdSite;
	}

	public function getThirdSite(){
	  return $this->thirdSite;
	}

                        	                   			private $shopNo;
    	                        
	public function setShopNo($shopNo){
		$this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
	}

	public function getShopNo(){
	  return $this->shopNo;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $gnum;
                              public function setGnum($gnum ){
                 $this->gnum=$gnum;
                 $this->apiParas["gnum"] = $gnum;
              }

              public function getGnum(){
              	return $this->gnum;
              }
                                                                                                                                                                                                                                                                                                                                              private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $spGoodsNo;
                              public function setSpGoodsNo($spGoodsNo ){
                 $this->spGoodsNo=$spGoodsNo;
                 $this->apiParas["spGoodsNo"] = $spGoodsNo;
              }

              public function getSpGoodsNo(){
              	return $this->spGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsRemark;
                              public function setGoodsRemark($goodsRemark ){
                 $this->goodsRemark=$goodsRemark;
                 $this->apiParas["goodsRemark"] = $goodsRemark;
              }

              public function getGoodsRemark(){
              	return $this->goodsRemark;
              }
                                                                                                                                        	}





        
 

