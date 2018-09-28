<?php
class JcloudWmsOrderCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.order.create";
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

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                        	                   			private $billType;
    	                        
	public function setBillType($billType){
		$this->billType = $billType;
         $this->apiParas["billType"] = $billType;
	}

	public function getBillType(){
	  return $this->billType;
	}

                        	                   			private $carrierNo;
    	                        
	public function setCarrierNo($carrierNo){
		$this->carrierNo = $carrierNo;
         $this->apiParas["carrierNo"] = $carrierNo;
	}

	public function getCarrierNo(){
	  return $this->carrierNo;
	}

                        	                   			private $waybillNo;
    	                        
	public function setWaybillNo($waybillNo){
		$this->waybillNo = $waybillNo;
         $this->apiParas["waybillNo"] = $waybillNo;
	}

	public function getWaybillNo(){
	  return $this->waybillNo;
	}

                        	                   			private $costTotal;
    	                        
	public function setCostTotal($costTotal){
		$this->costTotal = $costTotal;
         $this->apiParas["costTotal"] = $costTotal;
	}

	public function getCostTotal(){
	  return $this->costTotal;
	}

                        	                   			private $costPaid;
    	                        
	public function setCostPaid($costPaid){
		$this->costPaid = $costPaid;
         $this->apiParas["costPaid"] = $costPaid;
	}

	public function getCostPaid(){
	  return $this->costPaid;
	}

                        	                   			private $packageCenterCode;
    	                        
	public function setPackageCenterCode($packageCenterCode){
		$this->packageCenterCode = $packageCenterCode;
         $this->apiParas["packageCenterCode"] = $packageCenterCode;
	}

	public function getPackageCenterCode(){
	  return $this->packageCenterCode;
	}

                        	                   			private $packageCenterName;
    	                        
	public function setPackageCenterName($packageCenterName){
		$this->packageCenterName = $packageCenterName;
         $this->apiParas["packageCenterName"] = $packageCenterName;
	}

	public function getPackageCenterName(){
	  return $this->packageCenterName;
	}

                        	                   			private $shipBranchCode;
    	                        
	public function setShipBranchCode($shipBranchCode){
		$this->shipBranchCode = $shipBranchCode;
         $this->apiParas["shipBranchCode"] = $shipBranchCode;
	}

	public function getShipBranchCode(){
	  return $this->shipBranchCode;
	}

                        	                   			private $shortAddress;
    	                        
	public function setShortAddress($shortAddress){
		$this->shortAddress = $shortAddress;
         $this->apiParas["shortAddress"] = $shortAddress;
	}

	public function getShortAddress(){
	  return $this->shortAddress;
	}

                        	                   			private $distributeCode;
    	                        
	public function setDistributeCode($distributeCode){
		$this->distributeCode = $distributeCode;
         $this->apiParas["distributeCode"] = $distributeCode;
	}

	public function getDistributeCode(){
	  return $this->distributeCode;
	}

                        	                   			private $orderPrice;
    	                        
	public function setOrderPrice($orderPrice){
		$this->orderPrice = $orderPrice;
         $this->apiParas["orderPrice"] = $orderPrice;
	}

	public function getOrderPrice(){
	  return $this->orderPrice;
	}

                        	                   			private $discountPrice;
    	                        
	public function setDiscountPrice($discountPrice){
		$this->discountPrice = $discountPrice;
         $this->apiParas["discountPrice"] = $discountPrice;
	}

	public function getDiscountPrice(){
	  return $this->discountPrice;
	}

                        	                   			private $codFlag;
    	                        
	public function setCodFlag($codFlag){
		$this->codFlag = $codFlag;
         $this->apiParas["codFlag"] = $codFlag;
	}

	public function getCodFlag(){
	  return $this->codFlag;
	}

                        	                   			private $receivable;
    	                        
	public function setReceivable($receivable){
		$this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
	}

	public function getReceivable(){
	  return $this->receivable;
	}

                        	                   			private $notes;
    	                        
	public function setNotes($notes){
		$this->notes = $notes;
         $this->apiParas["notes"] = $notes;
	}

	public function getNotes(){
	  return $this->notes;
	}

                        	                   			private $sellerNotes;
    	                        
	public function setSellerNotes($sellerNotes){
		$this->sellerNotes = $sellerNotes;
         $this->apiParas["sellerNotes"] = $sellerNotes;
	}

	public function getSellerNotes(){
	  return $this->sellerNotes;
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

                        	                   			private $zipcode;
    	                        
	public function setZipcode($zipcode){
		$this->zipcode = $zipcode;
         $this->apiParas["zipcode"] = $zipcode;
	}

	public function getZipcode(){
	  return $this->zipcode;
	}

                        	                   			private $contact;
    	                        
	public function setContact($contact){
		$this->contact = $contact;
         $this->apiParas["contact"] = $contact;
	}

	public function getContact(){
	  return $this->contact;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $orderTime;
    	                        
	public function setOrderTime($orderTime){
		$this->orderTime = $orderTime;
         $this->apiParas["orderTime"] = $orderTime;
	}

	public function getOrderTime(){
	  return $this->orderTime;
	}

                        	                   			private $paymentTime;
    	                        
	public function setPaymentTime($paymentTime){
		$this->paymentTime = $paymentTime;
         $this->apiParas["paymentTime"] = $paymentTime;
	}

	public function getPaymentTime(){
	  return $this->paymentTime;
	}

                        	                   			private $planDeliveryTime;
    	                        
	public function setPlanDeliveryTime($planDeliveryTime){
		$this->planDeliveryTime = $planDeliveryTime;
         $this->apiParas["planDeliveryTime"] = $planDeliveryTime;
	}

	public function getPlanDeliveryTime(){
	  return $this->planDeliveryTime;
	}

                        	                   			private $deliverType;
    	                        
	public function setDeliverType($deliverType){
		$this->deliverType = $deliverType;
         $this->apiParas["deliverType"] = $deliverType;
	}

	public function getDeliverType(){
	  return $this->deliverType;
	}

                        	                   			private $sendCode;
    	                        
	public function setSendCode($sendCode){
		$this->sendCode = $sendCode;
         $this->apiParas["sendCode"] = $sendCode;
	}

	public function getSendCode(){
	  return $this->sendCode;
	}

                        	                   			private $arriveCode;
    	                        
	public function setArriveCode($arriveCode){
		$this->arriveCode = $arriveCode;
         $this->apiParas["arriveCode"] = $arriveCode;
	}

	public function getArriveCode(){
	  return $this->arriveCode;
	}

                        	                   			private $paymentType;
    	                        
	public function setPaymentType($paymentType){
		$this->paymentType = $paymentType;
         $this->apiParas["paymentType"] = $paymentType;
	}

	public function getPaymentType(){
	  return $this->paymentType;
	}

                        	                   			private $invoiceFlag;
    	                        
	public function setInvoiceFlag($invoiceFlag){
		$this->invoiceFlag = $invoiceFlag;
         $this->apiParas["invoiceFlag"] = $invoiceFlag;
	}

	public function getInvoiceFlag(){
	  return $this->invoiceFlag;
	}

                        	                   			private $invoiceIdentification;
    	                        
	public function setInvoiceIdentification($invoiceIdentification){
		$this->invoiceIdentification = $invoiceIdentification;
         $this->apiParas["invoiceIdentification"] = $invoiceIdentification;
	}

	public function getInvoiceIdentification(){
	  return $this->invoiceIdentification;
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

                        	                   			private $shopNo;
    	                        
	public function setShopNo($shopNo){
		$this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
	}

	public function getShopNo(){
	  return $this->shopNo;
	}

                        	                   			private $shop;
    	                        
	public function setShop($shop){
		$this->shop = $shop;
         $this->apiParas["shop"] = $shop;
	}

	public function getShop(){
	  return $this->shop;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuNo;
                              public function setSkuNo($skuNo ){
                 $this->skuNo=$skuNo;
                 $this->apiParas["skuNo"] = $skuNo;
              }

              public function getSkuNo(){
              	return $this->skuNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuName;
                              public function setSkuName($skuName ){
                 $this->skuName=$skuName;
                 $this->apiParas["skuName"] = $skuName;
              }

              public function getSkuName(){
              	return $this->skuName;
              }
                                                                                                                                                                                                                                                                                                                                              private $expectedQty;
                              public function setExpectedQty($expectedQty ){
                 $this->expectedQty=$expectedQty;
                 $this->apiParas["expectedQty"] = $expectedQty;
              }

              public function getExpectedQty(){
              	return $this->expectedQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                            }





        
 

