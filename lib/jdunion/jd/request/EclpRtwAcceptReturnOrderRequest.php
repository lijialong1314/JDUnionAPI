<?php
class EclpRtwAcceptReturnOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rtw.acceptReturnOrder";
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
                                                        		                                    	                   			private $deliveryNo;
    	                        
	public function setDeliveryNo($deliveryNo){
		$this->deliveryNo = $deliveryNo;
         $this->apiParas["deliveryNo"] = $deliveryNo;
	}

	public function getDeliveryNo(){
	  return $this->deliveryNo;
	}

                        	                   			private $receiptNo;
    	                        
	public function setReceiptNo($receiptNo){
		$this->receiptNo = $receiptNo;
         $this->apiParas["receiptNo"] = $receiptNo;
	}

	public function getReceiptNo(){
	  return $this->receiptNo;
	}

                        	                   			private $packageCodes;
    	                        
	public function setPackageCodes($packageCodes){
		$this->packageCodes = $packageCodes;
         $this->apiParas["packageCodes"] = $packageCodes;
	}

	public function getPackageCodes(){
	  return $this->packageCodes;
	}

                        	                   			private $sourceNo;
    	                        
	public function setSourceNo($sourceNo){
		$this->sourceNo = $sourceNo;
         $this->apiParas["sourceNo"] = $sourceNo;
	}

	public function getSourceNo(){
	  return $this->sourceNo;
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
                                                                                                                                                                    	}





        
 

