<?php
class EdiSnSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.sn.send";
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
                                                        		                                    	                   			private $purchaseOrderCode;
    	                        
	public function setPurchaseOrderCode($purchaseOrderCode){
		$this->purchaseOrderCode = $purchaseOrderCode;
         $this->apiParas["purchaseOrderCode"] = $purchaseOrderCode;
	}

	public function getPurchaseOrderCode(){
	  return $this->purchaseOrderCode;
	}

                        	                   			private $orderCode;
    	                        
	public function setOrderCode($orderCode){
		$this->orderCode = $orderCode;
         $this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode(){
	  return $this->orderCode;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $vendorName;
    	                        
	public function setVendorName($vendorName){
		$this->vendorName = $vendorName;
         $this->apiParas["vendorName"] = $vendorName;
	}

	public function getVendorName(){
	  return $this->vendorName;
	}

                        	                   			private $recordCount;
    	                        
	public function setRecordCount($recordCount){
		$this->recordCount = $recordCount;
         $this->apiParas["recordCount"] = $recordCount;
	}

	public function getRecordCount(){
	  return $this->recordCount;
	}

                        	                   			private $categoryNumber;
    	                        
	public function setCategoryNumber($categoryNumber){
		$this->categoryNumber = $categoryNumber;
         $this->apiParas["categoryNumber"] = $categoryNumber;
	}

	public function getCategoryNumber(){
	  return $this->categoryNumber;
	}

                        	                   			private $totalNubmer;
    	                        
	public function setTotalNubmer($totalNubmer){
		$this->totalNubmer = $totalNubmer;
         $this->apiParas["totalNubmer"] = $totalNubmer;
	}

	public function getTotalNubmer(){
	  return $this->totalNubmer;
	}

                        	                   			private $totalAmount;
    	                        
	public function setTotalAmount($totalAmount){
		$this->totalAmount = $totalAmount;
         $this->apiParas["totalAmount"] = $totalAmount;
	}

	public function getTotalAmount(){
	  return $this->totalAmount;
	}

                        	                   			private $actualTotalAmount;
    	                        
	public function setActualTotalAmount($actualTotalAmount){
		$this->actualTotalAmount = $actualTotalAmount;
         $this->apiParas["actualTotalAmount"] = $actualTotalAmount;
	}

	public function getActualTotalAmount(){
	  return $this->actualTotalAmount;
	}

                        	                   			private $dispatchDate;
    	                        
	public function setDispatchDate($dispatchDate){
		$this->dispatchDate = $dispatchDate;
         $this->apiParas["dispatchDate"] = $dispatchDate;
	}

	public function getDispatchDate(){
	  return $this->dispatchDate;
	}

                        	                   			private $receivingAddress;
    	                        
	public function setReceivingAddress($receivingAddress){
		$this->receivingAddress = $receivingAddress;
         $this->apiParas["receivingAddress"] = $receivingAddress;
	}

	public function getReceivingAddress(){
	  return $this->receivingAddress;
	}

                        	                   			private $transportationMode;
    	                        
	public function setTransportationMode($transportationMode){
		$this->transportationMode = $transportationMode;
         $this->apiParas["transportationMode"] = $transportationMode;
	}

	public function getTransportationMode(){
	  return $this->transportationMode;
	}

                        	                   			private $station;
    	                        
	public function setStation($station){
		$this->station = $station;
         $this->apiParas["station"] = $station;
	}

	public function getStation(){
	  return $this->station;
	}

                        	                   			private $purchaseContact;
    	                        
	public function setPurchaseContact($purchaseContact){
		$this->purchaseContact = $purchaseContact;
         $this->apiParas["purchaseContact"] = $purchaseContact;
	}

	public function getPurchaseContact(){
	  return $this->purchaseContact;
	}

                        	                   			private $shipmentNumber;
    	                        
	public function setShipmentNumber($shipmentNumber){
		$this->shipmentNumber = $shipmentNumber;
         $this->apiParas["shipmentNumber"] = $shipmentNumber;
	}

	public function getShipmentNumber(){
	  return $this->shipmentNumber;
	}

                        	                   			private $shipmentPackageNumber;
    	                        
	public function setShipmentPackageNumber($shipmentPackageNumber){
		$this->shipmentPackageNumber = $shipmentPackageNumber;
         $this->apiParas["shipmentPackageNumber"] = $shipmentPackageNumber;
	}

	public function getShipmentPackageNumber(){
	  return $this->shipmentPackageNumber;
	}

                        	                   			private $paymentMode;
    	                        
	public function setPaymentMode($paymentMode){
		$this->paymentMode = $paymentMode;
         $this->apiParas["paymentMode"] = $paymentMode;
	}

	public function getPaymentMode(){
	  return $this->paymentMode;
	}

                        	                   			private $ransportationCostsPerson;
    	                        
	public function setRansportationCostsPerson($ransportationCostsPerson){
		$this->ransportationCostsPerson = $ransportationCostsPerson;
         $this->apiParas["ransportationCostsPerson"] = $ransportationCostsPerson;
	}

	public function getRansportationCostsPerson(){
	  return $this->ransportationCostsPerson;
	}

                        	                   			private $returnPeriod;
    	                        
	public function setReturnPeriod($returnPeriod){
		$this->returnPeriod = $returnPeriod;
         $this->apiParas["returnPeriod"] = $returnPeriod;
	}

	public function getReturnPeriod(){
	  return $this->returnPeriod;
	}

                        	                   			private $comments;
    	                        
	public function setComments($comments){
		$this->comments = $comments;
         $this->apiParas["comments"] = $comments;
	}

	public function getComments(){
	  return $this->comments;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $currentRecordCount;
                              public function setCurrentRecordCount($currentRecordCount ){
                 $this->currentRecordCount=$currentRecordCount;
                 $this->apiParas["currentRecordCount"] = $currentRecordCount;
              }

              public function getCurrentRecordCount(){
              	return $this->currentRecordCount;
              }
                                                                                                                                                                                                                                                                                                                                              private $vendorSku;
                              public function setVendorSku($vendorSku ){
                 $this->vendorSku=$vendorSku;
                 $this->apiParas["vendorSku"] = $vendorSku;
              }

              public function getVendorSku(){
              	return $this->vendorSku;
              }
                                                                                                                                                                                                                                                                                                                                              private $buyerProductId;
                              public function setBuyerProductId($buyerProductId ){
                 $this->buyerProductId=$buyerProductId;
                 $this->apiParas["buyerProductId"] = $buyerProductId;
              }

              public function getBuyerProductId(){
              	return $this->buyerProductId;
              }
                                                                                                                                                                                                                                                                                                                                              private $productCode;
                              public function setProductCode($productCode ){
                 $this->productCode=$productCode;
                 $this->apiParas["productCode"] = $productCode;
              }

              public function getProductCode(){
              	return $this->productCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $productName;
                              public function setProductName($productName ){
                 $this->productName=$productName;
                 $this->apiParas["productName"] = $productName;
              }

              public function getProductName(){
              	return $this->productName;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $salePrice;
                              public function setSalePrice($salePrice ){
                 $this->salePrice=$salePrice;
                 $this->apiParas["salePrice"] = $salePrice;
              }

              public function getSalePrice(){
              	return $this->salePrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $listPrice;
                              public function setListPrice($listPrice ){
                 $this->listPrice=$listPrice;
                 $this->apiParas["listPrice"] = $listPrice;
              }

              public function getListPrice(){
              	return $this->listPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $discountRate;
                              public function setDiscountRate($discountRate ){
                 $this->discountRate=$discountRate;
                 $this->apiParas["discountRate"] = $discountRate;
              }

              public function getDiscountRate(){
              	return $this->discountRate;
              }
                                                                                                                                                                                                                                                                                                                                              private $backOrderProcessing;
                              public function setBackOrderProcessing($backOrderProcessing ){
                 $this->backOrderProcessing=$backOrderProcessing;
                 $this->apiParas["backOrderProcessing"] = $backOrderProcessing;
              }

              public function getBackOrderProcessing(){
              	return $this->backOrderProcessing;
              }
                                                                                                                                                                                                                                                                                                                                              private $packageNumber;
                              public function setPackageNumber($packageNumber ){
                 $this->packageNumber=$packageNumber;
                 $this->apiParas["packageNumber"] = $packageNumber;
              }

              public function getPackageNumber(){
              	return $this->packageNumber;
              }
                                                                                                                                                                                                                                                                                                                                              private $lineComments;
                              public function setLineComments($lineComments ){
                 $this->lineComments=$lineComments;
                 $this->apiParas["lineComments"] = $lineComments;
              }

              public function getLineComments(){
              	return $this->lineComments;
              }
                                                                                                                }





        
 

