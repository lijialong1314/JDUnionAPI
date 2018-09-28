<?php
class EclpOrderAddOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.addOrder";
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

                        	                   			private $shopNo;
    	                        
	public function setShopNo($shopNo){
		$this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
	}

	public function getShopNo(){
	  return $this->shopNo;
	}

                        	                   			private $bdOwnerNo;
    	                        
	public function setBdOwnerNo($bdOwnerNo){
		$this->bdOwnerNo = $bdOwnerNo;
         $this->apiParas["bdOwnerNo"] = $bdOwnerNo;
	}

	public function getBdOwnerNo(){
	  return $this->bdOwnerNo;
	}

                        	                   			private $departmentNo;
    	                        
	public function setDepartmentNo($departmentNo){
		$this->departmentNo = $departmentNo;
         $this->apiParas["departmentNo"] = $departmentNo;
	}

	public function getDepartmentNo(){
	  return $this->departmentNo;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $shipperNo;
    	                        
	public function setShipperNo($shipperNo){
		$this->shipperNo = $shipperNo;
         $this->apiParas["shipperNo"] = $shipperNo;
	}

	public function getShipperNo(){
	  return $this->shipperNo;
	}

                        	                   			private $salesPlatformOrderNo;
    	                        
	public function setSalesPlatformOrderNo($salesPlatformOrderNo){
		$this->salesPlatformOrderNo = $salesPlatformOrderNo;
         $this->apiParas["salesPlatformOrderNo"] = $salesPlatformOrderNo;
	}

	public function getSalesPlatformOrderNo(){
	  return $this->salesPlatformOrderNo;
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

                        	                   			private $soType;
    	                        
	public function setSoType($soType){
		$this->soType = $soType;
         $this->apiParas["soType"] = $soType;
	}

	public function getSoType(){
	  return $this->soType;
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

                        	                   			private $expectDate;
    	                        
	public function setExpectDate($expectDate){
		$this->expectDate = $expectDate;
         $this->apiParas["expectDate"] = $expectDate;
	}

	public function getExpectDate(){
	  return $this->expectDate;
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

                        	                   			private $orderMark;
    	                        
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["orderMark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                        	                   			private $thirdWayBill;
    	                        
	public function setThirdWayBill($thirdWayBill){
		$this->thirdWayBill = $thirdWayBill;
         $this->apiParas["thirdWayBill"] = $thirdWayBill;
	}

	public function getThirdWayBill(){
	  return $this->thirdWayBill;
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

                        	                   			private $gatherCenterName;
    	                        
	public function setGatherCenterName($gatherCenterName){
		$this->gatherCenterName = $gatherCenterName;
         $this->apiParas["gatherCenterName"] = $gatherCenterName;
	}

	public function getGatherCenterName(){
	  return $this->gatherCenterName;
	}

                        	                   			private $customsStatus;
    	                        
	public function setCustomsStatus($customsStatus){
		$this->customsStatus = $customsStatus;
         $this->apiParas["customsStatus"] = $customsStatus;
	}

	public function getCustomsStatus(){
	  return $this->customsStatus;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $invoiceTitle;
    	                        
	public function setInvoiceTitle($invoiceTitle){
		$this->invoiceTitle = $invoiceTitle;
         $this->apiParas["invoiceTitle"] = $invoiceTitle;
	}

	public function getInvoiceTitle(){
	  return $this->invoiceTitle;
	}

                        	                   			private $invoiceContent;
    	                        
	public function setInvoiceContent($invoiceContent){
		$this->invoiceContent = $invoiceContent;
         $this->apiParas["invoiceContent"] = $invoiceContent;
	}

	public function getInvoiceContent(){
	  return $this->invoiceContent;
	}

                        	                   			private $goodsType;
    	                        
	public function setGoodsType($goodsType){
		$this->goodsType = $goodsType;
         $this->apiParas["goodsType"] = $goodsType;
	}

	public function getGoodsType(){
	  return $this->goodsType;
	}

                        	                   			private $goodsLevel;
    	                        
	public function setGoodsLevel($goodsLevel){
		$this->goodsLevel = $goodsLevel;
         $this->apiParas["goodsLevel"] = $goodsLevel;
	}

	public function getGoodsLevel(){
	  return $this->goodsLevel;
	}

                        	                   			private $customsPort;
    	                        
	public function setCustomsPort($customsPort){
		$this->customsPort = $customsPort;
         $this->apiParas["customsPort"] = $customsPort;
	}

	public function getCustomsPort(){
	  return $this->customsPort;
	}

                        	                   			private $billType;
    	                        
	public function setBillType($billType){
		$this->billType = $billType;
         $this->apiParas["billType"] = $billType;
	}

	public function getBillType(){
	  return $this->billType;
	}

                        	                   			private $orderPrice;
    	                        
	public function setOrderPrice($orderPrice){
		$this->orderPrice = $orderPrice;
         $this->apiParas["orderPrice"] = $orderPrice;
	}

	public function getOrderPrice(){
	  return $this->orderPrice;
	}

                        	                   			private $wlyInfo;
    	                        
	public function setWlyInfo($wlyInfo){
		$this->wlyInfo = $wlyInfo;
         $this->apiParas["wlyInfo"] = $wlyInfo;
	}

	public function getWlyInfo(){
	  return $this->wlyInfo;
	}

                        	                   			private $customerId;
    	                        
	public function setCustomerId($customerId){
		$this->customerId = $customerId;
         $this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId(){
	  return $this->customerId;
	}

                        	                   			private $urgency;
    	                        
	public function setUrgency($urgency){
		$this->urgency = $urgency;
         $this->apiParas["urgency"] = $urgency;
	}

	public function getUrgency(){
	  return $this->urgency;
	}

                        	                   			private $customerNo;
    	                        
	public function setCustomerNo($customerNo){
		$this->customerNo = $customerNo;
         $this->apiParas["customerNo"] = $customerNo;
	}

	public function getCustomerNo(){
	  return $this->customerNo;
	}

                        	                   			private $storeName;
    	                        
	public function setStoreName($storeName){
		$this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
	}

	public function getStoreName(){
	  return $this->storeName;
	}

                        	                   			private $invoiceState;
    	                        
	public function setInvoiceState($invoiceState){
		$this->invoiceState = $invoiceState;
         $this->apiParas["invoiceState"] = $invoiceState;
	}

	public function getInvoiceState(){
	  return $this->invoiceState;
	}

                        	                   			private $invoiceType;
    	                        
	public function setInvoiceType($invoiceType){
		$this->invoiceType = $invoiceType;
         $this->apiParas["invoiceType"] = $invoiceType;
	}

	public function getInvoiceType(){
	  return $this->invoiceType;
	}

                        	                   			private $invoiceNo;
    	                        
	public function setInvoiceNo($invoiceNo){
		$this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
	}

	public function getInvoiceNo(){
	  return $this->invoiceNo;
	}

                        	                   			private $invoiceTax;
    	                        
	public function setInvoiceTax($invoiceTax){
		$this->invoiceTax = $invoiceTax;
         $this->apiParas["invoiceTax"] = $invoiceTax;
	}

	public function getInvoiceTax(){
	  return $this->invoiceTax;
	}

                        	                   			private $bankName;
    	                        
	public function setBankName($bankName){
		$this->bankName = $bankName;
         $this->apiParas["bankName"] = $bankName;
	}

	public function getBankName(){
	  return $this->bankName;
	}

                        	                   			private $bankAccount;
    	                        
	public function setBankAccount($bankAccount){
		$this->bankAccount = $bankAccount;
         $this->apiParas["bankAccount"] = $bankAccount;
	}

	public function getBankAccount(){
	  return $this->bankAccount;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $phoneNumber;
    	                        
	public function setPhoneNumber($phoneNumber){
		$this->phoneNumber = $phoneNumber;
         $this->apiParas["phoneNumber"] = $phoneNumber;
	}

	public function getPhoneNumber(){
	  return $this->phoneNumber;
	}

                        	                   			private $signType;
    	                        
	public function setSignType($signType){
		$this->signType = $signType;
         $this->apiParas["signType"] = $signType;
	}

	public function getSignType(){
	  return $this->signType;
	}

                        	                   			private $signIDCode;
    	                        
	public function setSignIDCode($signIDCode){
		$this->signIDCode = $signIDCode;
         $this->apiParas["signIDCode"] = $signIDCode;
	}

	public function getSignIDCode(){
	  return $this->signIDCode;
	}

                        	                   			private $supplierNo;
    	                        
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                        	                   			private $agingType;
    	                        
	public function setAgingType($agingType){
		$this->agingType = $agingType;
         $this->apiParas["agingType"] = $agingType;
	}

	public function getAgingType(){
	  return $this->agingType;
	}

                        	                   			private $sellerNote;
    	                        
	public function setSellerNote($sellerNote){
		$this->sellerNote = $sellerNote;
         $this->apiParas["sellerNote"] = $sellerNote;
	}

	public function getSellerNote(){
	  return $this->sellerNote;
	}

                        	                   			private $supervisionCode;
    	                        
	public function setSupervisionCode($supervisionCode){
		$this->supervisionCode = $supervisionCode;
         $this->apiParas["supervisionCode"] = $supervisionCode;
	}

	public function getSupervisionCode(){
	  return $this->supervisionCode;
	}

                        	                   			private $invoiceChecker;
    	                        
	public function setInvoiceChecker($invoiceChecker){
		$this->invoiceChecker = $invoiceChecker;
         $this->apiParas["invoiceChecker"] = $invoiceChecker;
	}

	public function getInvoiceChecker(){
	  return $this->invoiceChecker;
	}

                        	                   			private $paymentType;
    	                        
	public function setPaymentType($paymentType){
		$this->paymentType = $paymentType;
         $this->apiParas["paymentType"] = $paymentType;
	}

	public function getPaymentType(){
	  return $this->paymentType;
	}

                        	                   			private $saleType;
    	                        
	public function setSaleType($saleType){
		$this->saleType = $saleType;
         $this->apiParas["saleType"] = $saleType;
	}

	public function getSaleType(){
	  return $this->saleType;
	}

                        	                   			private $inStorageNo;
    	                        
	public function setInStorageNo($inStorageNo){
		$this->inStorageNo = $inStorageNo;
         $this->apiParas["inStorageNo"] = $inStorageNo;
	}

	public function getInStorageNo(){
	  return $this->inStorageNo;
	}

                        	                   			private $inStorageTime;
    	                        
	public function setInStorageTime($inStorageTime){
		$this->inStorageTime = $inStorageTime;
         $this->apiParas["inStorageTime"] = $inStorageTime;
	}

	public function getInStorageTime(){
	  return $this->inStorageTime;
	}

                        	                   			private $inStorageRemark;
    	                        
	public function setInStorageRemark($inStorageRemark){
		$this->inStorageRemark = $inStorageRemark;
         $this->apiParas["inStorageRemark"] = $inStorageRemark;
	}

	public function getInStorageRemark(){
	  return $this->inStorageRemark;
	}

                        	                   			private $grossReturnName;
    	                        
	public function setGrossReturnName($grossReturnName){
		$this->grossReturnName = $grossReturnName;
         $this->apiParas["grossReturnName"] = $grossReturnName;
	}

	public function getGrossReturnName(){
	  return $this->grossReturnName;
	}

                        	                   			private $grossReturnPhone;
    	                        
	public function setGrossReturnPhone($grossReturnPhone){
		$this->grossReturnPhone = $grossReturnPhone;
         $this->apiParas["grossReturnPhone"] = $grossReturnPhone;
	}

	public function getGrossReturnPhone(){
	  return $this->grossReturnPhone;
	}

                        	                   			private $grossReturnMobile;
    	                        
	public function setGrossReturnMobile($grossReturnMobile){
		$this->grossReturnMobile = $grossReturnMobile;
         $this->apiParas["grossReturnMobile"] = $grossReturnMobile;
	}

	public function getGrossReturnMobile(){
	  return $this->grossReturnMobile;
	}

                        	                   			private $grossReturnAddress;
    	                        
	public function setGrossReturnAddress($grossReturnAddress){
		$this->grossReturnAddress = $grossReturnAddress;
         $this->apiParas["grossReturnAddress"] = $grossReturnAddress;
	}

	public function getGrossReturnAddress(){
	  return $this->grossReturnAddress;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goodsNo"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsName;
                              public function setGoodsName($goodsName ){
                 $this->goodsName=$goodsName;
                 $this->apiParas["goodsName"] = $goodsName;
              }

              public function getGoodsName(){
              	return $this->goodsName;
              }
                                                                                                                                                                                                                                                                                                                                              private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $unit;
                              public function setUnit($unit ){
                 $this->unit=$unit;
                 $this->apiParas["unit"] = $unit;
              }

              public function getUnit(){
              	return $this->unit;
              }
                                                                                                                                                                                                                                                                                                                                              private $remark;
                              public function setRemark($remark ){
                 $this->remark=$remark;
                 $this->apiParas["remark"] = $remark;
              }

              public function getRemark(){
              	return $this->remark;
              }
                                                                                                                                                                                                                                                                                                                                              private $rate;
                              public function setRate($rate ){
                 $this->rate=$rate;
                 $this->apiParas["rate"] = $rate;
              }

              public function getRate(){
              	return $this->rate;
              }
                                                                                                                                                                                                                                                                                                                                              private $amount;
                              public function setAmount($amount ){
                 $this->amount=$amount;
                 $this->apiParas["amount"] = $amount;
              }

              public function getAmount(){
              	return $this->amount;
              }
                                                                                                                                                                                                                                                                                                                                              private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $pAttributes;
                              public function setPAttributes($pAttributes ){
                 $this->pAttributes=$pAttributes;
                 $this->apiParas["pAttributes"] = $pAttributes;
              }

              public function getPAttributes(){
              	return $this->pAttributes;
              }
                                                                                                                                                                                                                                                                                                                                              private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $installVenderId;
                              public function setInstallVenderId($installVenderId ){
                 $this->installVenderId=$installVenderId;
                 $this->apiParas["installVenderId"] = $installVenderId;
              }

              public function getInstallVenderId(){
              	return $this->installVenderId;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderLine;
                              public function setOrderLine($orderLine ){
                 $this->orderLine=$orderLine;
                 $this->apiParas["orderLine"] = $orderLine;
              }

              public function getOrderLine(){
              	return $this->orderLine;
              }
                                                                                                                                                                                                                                                                                                                                              private $batAttrs;
                              public function setBatAttrs($batAttrs ){
                 $this->batAttrs=$batAttrs;
                 $this->apiParas["batAttrs"] = $batAttrs;
              }

              public function getBatAttrs(){
              	return $this->batAttrs;
              }
                                                                                                                                        	}





        
 

