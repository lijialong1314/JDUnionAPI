<?php
class EclpStockCreateStockChangeTransferRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.createStockChangeTransfer";
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
                                                        		                                    	                   			private $changeNo;
    	                        
	public function setChangeNo($changeNo){
		$this->changeNo = $changeNo;
         $this->apiParas["changeNo"] = $changeNo;
	}

	public function getChangeNo(){
	  return $this->changeNo;
	}

                        	                   			private $changeType;
    	                        
	public function setChangeType($changeType){
		$this->changeType = $changeType;
         $this->apiParas["changeType"] = $changeType;
	}

	public function getChangeType(){
	  return $this->changeType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $ownerNo;
                              public function setOwnerNo($ownerNo ){
                 $this->ownerNo=$ownerNo;
                 $this->apiParas["ownerNo"] = $ownerNo;
              }

              public function getOwnerNo(){
              	return $this->ownerNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuNo;
                              public function setSkuNo($skuNo ){
                 $this->skuNo=$skuNo;
                 $this->apiParas["skuNo"] = $skuNo;
              }

              public function getSkuNo(){
              	return $this->skuNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $productLevel;
                              public function setProductLevel($productLevel ){
                 $this->productLevel=$productLevel;
                 $this->apiParas["productLevel"] = $productLevel;
              }

              public function getProductLevel(){
              	return $this->productLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $changeQty;
                              public function setChangeQty($changeQty ){
                 $this->changeQty=$changeQty;
                 $this->apiParas["changeQty"] = $changeQty;
              }

              public function getChangeQty(){
              	return $this->changeQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $toOwnerNo;
                              public function setToOwnerNo($toOwnerNo ){
                 $this->toOwnerNo=$toOwnerNo;
                 $this->apiParas["toOwnerNo"] = $toOwnerNo;
              }

              public function getToOwnerNo(){
              	return $this->toOwnerNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $toSkuNo;
                              public function setToSkuNo($toSkuNo ){
                 $this->toSkuNo=$toSkuNo;
                 $this->apiParas["toSkuNo"] = $toSkuNo;
              }

              public function getToSkuNo(){
              	return $this->toSkuNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $toProductLevel;
                              public function setToProductLevel($toProductLevel ){
                 $this->toProductLevel=$toProductLevel;
                 $this->apiParas["toProductLevel"] = $toProductLevel;
              }

              public function getToProductLevel(){
              	return $this->toProductLevel;
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





        
 

