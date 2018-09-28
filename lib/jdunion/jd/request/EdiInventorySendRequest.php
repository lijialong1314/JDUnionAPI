<?php
class EdiInventorySendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.inventory.send";
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

                        	                   			private $vendorProductId;
    	                        
	public function setVendorProductId($vendorProductId){
		$this->vendorProductId = $vendorProductId;
         $this->apiParas["vendorProductId"] = $vendorProductId;
	}

	public function getVendorProductId(){
	  return $this->vendorProductId;
	}

                        	                   			private $inventoryDate;
    	                        
	public function setInventoryDate($inventoryDate){
		$this->inventoryDate = $inventoryDate;
         $this->apiParas["inventoryDate"] = $inventoryDate;
	}

	public function getInventoryDate(){
	  return $this->inventoryDate;
	}

                        	                   			private $totalQuantity;
    	                        
	public function setTotalQuantity($totalQuantity){
		$this->totalQuantity = $totalQuantity;
         $this->apiParas["totalQuantity"] = $totalQuantity;
	}

	public function getTotalQuantity(){
	  return $this->totalQuantity;
	}

                        	                   			private $estimateDate;
    	                        
	public function setEstimateDate($estimateDate){
		$this->estimateDate = $estimateDate;
         $this->apiParas["estimateDate"] = $estimateDate;
	}

	public function getEstimateDate(){
	  return $this->estimateDate;
	}

                        	                   			private $totalEstimateQuantity;
    	                        
	public function setTotalEstimateQuantity($totalEstimateQuantity){
		$this->totalEstimateQuantity = $totalEstimateQuantity;
         $this->apiParas["totalEstimateQuantity"] = $totalEstimateQuantity;
	}

	public function getTotalEstimateQuantity(){
	  return $this->totalEstimateQuantity;
	}

                        	                   			private $costPrice;
    	                        
	public function setCostPrice($costPrice){
		$this->costPrice = $costPrice;
         $this->apiParas["costPrice"] = $costPrice;
	}

	public function getCostPrice(){
	  return $this->costPrice;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                                                                                                                                                                                                                              private $storeName;
                              public function setStoreName($storeName ){
                 $this->storeName=$storeName;
                 $this->apiParas["storeName"] = $storeName;
              }

              public function getStoreName(){
              	return $this->storeName;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $estimateQuantity;
                              public function setEstimateQuantity($estimateQuantity ){
                 $this->estimateQuantity=$estimateQuantity;
                 $this->apiParas["estimateQuantity"] = $estimateQuantity;
              }

              public function getEstimateQuantity(){
              	return $this->estimateQuantity;
              }
                                                                                                                }





        
 

