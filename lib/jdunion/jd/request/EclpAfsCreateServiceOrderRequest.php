<?php
class EclpAfsCreateServiceOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.afs.createServiceOrder";
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
                                                        		                                    	                   			private $isvUUId;
    	                        
	public function setIsvUUId($isvUUId){
		$this->isvUUId = $isvUUId;
         $this->apiParas["isvUUId"] = $isvUUId;
	}

	public function getIsvUUId(){
	  return $this->isvUUId;
	}

                        	                   			private $isvSource;
    	                        
	public function setIsvSource($isvSource){
		$this->isvSource = $isvSource;
         $this->apiParas["isvSource"] = $isvSource;
	}

	public function getIsvSource(){
	  return $this->isvSource;
	}

                        	                   			private $shopNo;
    	                        
	public function setShopNo($shopNo){
		$this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
	}

	public function getShopNo(){
	  return $this->shopNo;
	}

                        	                   			private $departmentNo;
    	                        
	public function setDepartmentNo($departmentNo){
		$this->departmentNo = $departmentNo;
         $this->apiParas["departmentNo"] = $departmentNo;
	}

	public function getDepartmentNo(){
	  return $this->departmentNo;
	}

                        	                   			private $shipperNo;
    	                        
	public function setShipperNo($shipperNo){
		$this->shipperNo = $shipperNo;
         $this->apiParas["shipperNo"] = $shipperNo;
	}

	public function getShipperNo(){
	  return $this->shipperNo;
	}

                        	                   			private $eclpOrderId;
    	                        
	public function setEclpOrderId($eclpOrderId){
		$this->eclpOrderId = $eclpOrderId;
         $this->apiParas["eclpOrderId"] = $eclpOrderId;
	}

	public function getEclpOrderId(){
	  return $this->eclpOrderId;
	}

                        	                   			private $salePlatformSource;
    	                        
	public function setSalePlatformSource($salePlatformSource){
		$this->salePlatformSource = $salePlatformSource;
         $this->apiParas["salePlatformSource"] = $salePlatformSource;
	}

	public function getSalePlatformSource(){
	  return $this->salePlatformSource;
	}

                        	                   			private $salesPlatformCreateTime;
    	                        
	public function setSalesPlatformCreateTime($salesPlatformCreateTime){
		$this->salesPlatformCreateTime = $salesPlatformCreateTime;
         $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
	}

	public function getSalesPlatformCreateTime(){
	  return $this->salesPlatformCreateTime;
	}

                        	                   			private $sourceType;
    	                        
	public function setSourceType($sourceType){
		$this->sourceType = $sourceType;
         $this->apiParas["sourceType"] = $sourceType;
	}

	public function getSourceType(){
	  return $this->sourceType;
	}

                        	                   			private $pickupType;
    	                        
	public function setPickupType($pickupType){
		$this->pickupType = $pickupType;
         $this->apiParas["pickupType"] = $pickupType;
	}

	public function getPickupType(){
	  return $this->pickupType;
	}

                        	                   			private $isInvoice;
    	                        
	public function setIsInvoice($isInvoice){
		$this->isInvoice = $isInvoice;
         $this->apiParas["isInvoice"] = $isInvoice;
	}

	public function getIsInvoice(){
	  return $this->isInvoice;
	}

                        	                   			private $invoiceNo;
    	                        
	public function setInvoiceNo($invoiceNo){
		$this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
	}

	public function getInvoiceNo(){
	  return $this->invoiceNo;
	}

                        	                   			private $isPackage;
    	                        
	public function setIsPackage($isPackage){
		$this->isPackage = $isPackage;
         $this->apiParas["isPackage"] = $isPackage;
	}

	public function getIsPackage(){
	  return $this->isPackage;
	}

                        	                   			private $isTestReport;
    	                        
	public function setIsTestReport($isTestReport){
		$this->isTestReport = $isTestReport;
         $this->apiParas["isTestReport"] = $isTestReport;
	}

	public function getIsTestReport(){
	  return $this->isTestReport;
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

                        	                   			private $provinceNo;
    	                        
	public function setProvinceNo($provinceNo){
		$this->provinceNo = $provinceNo;
         $this->apiParas["provinceNo"] = $provinceNo;
	}

	public function getProvinceNo(){
	  return $this->provinceNo;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $cityNo;
    	                        
	public function setCityNo($cityNo){
		$this->cityNo = $cityNo;
         $this->apiParas["cityNo"] = $cityNo;
	}

	public function getCityNo(){
	  return $this->cityNo;
	}

                        	                   			private $countyName;
    	                        
	public function setCountyName($countyName){
		$this->countyName = $countyName;
         $this->apiParas["countyName"] = $countyName;
	}

	public function getCountyName(){
	  return $this->countyName;
	}

                        	                   			private $countyNo;
    	                        
	public function setCountyNo($countyNo){
		$this->countyNo = $countyNo;
         $this->apiParas["countyNo"] = $countyNo;
	}

	public function getCountyNo(){
	  return $this->countyNo;
	}

                        	                   			private $townName;
    	                        
	public function setTownName($townName){
		$this->townName = $townName;
         $this->apiParas["townName"] = $townName;
	}

	public function getTownName(){
	  return $this->townName;
	}

                        	                   			private $townNo;
    	                        
	public function setTownNo($townNo){
		$this->townNo = $townNo;
         $this->apiParas["townNo"] = $townNo;
	}

	public function getTownNo(){
	  return $this->townNo;
	}

                        	                   			private $customerAddress;
    	                        
	public function setCustomerAddress($customerAddress){
		$this->customerAddress = $customerAddress;
         $this->apiParas["customerAddress"] = $customerAddress;
	}

	public function getCustomerAddress(){
	  return $this->customerAddress;
	}

                        	                   			private $pickupAddress;
    	                        
	public function setPickupAddress($pickupAddress){
		$this->pickupAddress = $pickupAddress;
         $this->apiParas["pickupAddress"] = $pickupAddress;
	}

	public function getPickupAddress(){
	  return $this->pickupAddress;
	}

                        	                   			private $operatorId;
    	                        
	public function setOperatorId($operatorId){
		$this->operatorId = $operatorId;
         $this->apiParas["operatorId"] = $operatorId;
	}

	public function getOperatorId(){
	  return $this->operatorId;
	}

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                        	                   			private $pickupNo;
    	                        
	public function setPickupNo($pickupNo){
		$this->pickupNo = $pickupNo;
         $this->apiParas["pickupNo"] = $pickupNo;
	}

	public function getPickupNo(){
	  return $this->pickupNo;
	}

                        	                   			private $questionDesc;
    	                        
	public function setQuestionDesc($questionDesc){
		$this->questionDesc = $questionDesc;
         $this->apiParas["questionDesc"] = $questionDesc;
	}

	public function getQuestionDesc(){
	  return $this->questionDesc;
	}

                        	                   			private $applyReason;
    	                        
	public function setApplyReason($applyReason){
		$this->applyReason = $applyReason;
         $this->apiParas["applyReason"] = $applyReason;
	}

	public function getApplyReason(){
	  return $this->applyReason;
	}

                        	                   			private $amsAuditComment;
    	                        
	public function setAmsAuditComment($amsAuditComment){
		$this->amsAuditComment = $amsAuditComment;
         $this->apiParas["amsAuditComment"] = $amsAuditComment;
	}

	public function getAmsAuditComment(){
	  return $this->amsAuditComment;
	}

                        	                   			private $waybill;
    	                        
	public function setWaybill($waybill){
		$this->waybill = $waybill;
         $this->apiParas["waybill"] = $waybill;
	}

	public function getWaybill(){
	  return $this->waybill;
	}

                        	                   			private $pickwaretype;
    	                        
	public function setPickwaretype($pickwaretype){
		$this->pickwaretype = $pickwaretype;
         $this->apiParas["pickwaretype"] = $pickwaretype;
	}

	public function getPickwaretype(){
	  return $this->pickwaretype;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $weight;
                              public function setWeight($weight ){
                 $this->weight=$weight;
                 $this->apiParas["weight"] = $weight;
              }

              public function getWeight(){
              	return $this->weight;
              }
                                                                                                                                                                                                                                                                                                                                              private $sn;
                              public function setSn($sn ){
                 $this->sn=$sn;
                 $this->apiParas["sn"] = $sn;
              }

              public function getSn(){
              	return $this->sn;
              }
                                                                                                                                                                                                                                                                                                                                              private $attachmentDetails;
                              public function setAttachmentDetails($attachmentDetails ){
                 $this->attachmentDetails=$attachmentDetails;
                 $this->apiParas["attachmentDetails"] = $attachmentDetails;
              }

              public function getAttachmentDetails(){
              	return $this->attachmentDetails;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareType;
                              public function setWareType($wareType ){
                 $this->wareType=$wareType;
                 $this->apiParas["wareType"] = $wareType;
              }

              public function getWareType(){
              	return $this->wareType;
              }
                                                                                                                                        	                   			private $isCreatePickup;
    	                        
	public function setIsCreatePickup($isCreatePickup){
		$this->isCreatePickup = $isCreatePickup;
         $this->apiParas["isCreatePickup"] = $isCreatePickup;
	}

	public function getIsCreatePickup(){
	  return $this->isCreatePickup;
	}

                        	                   			private $businessPhone;
    	                        
	public function setBusinessPhone($businessPhone){
		$this->businessPhone = $businessPhone;
         $this->apiParas["businessPhone"] = $businessPhone;
	}

	public function getBusinessPhone(){
	  return $this->businessPhone;
	}

                        	                   			private $outPickupType;
    	                        
	public function setOutPickupType($outPickupType){
		$this->outPickupType = $outPickupType;
         $this->apiParas["outPickupType"] = $outPickupType;
	}

	public function getOutPickupType(){
	  return $this->outPickupType;
	}

                        	                   			private $afterSalesChangeNo;
    	                        
	public function setAfterSalesChangeNo($afterSalesChangeNo){
		$this->afterSalesChangeNo = $afterSalesChangeNo;
         $this->apiParas["afterSalesChangeNo"] = $afterSalesChangeNo;
	}

	public function getAfterSalesChangeNo(){
	  return $this->afterSalesChangeNo;
	}

                                                    	}





        
 

