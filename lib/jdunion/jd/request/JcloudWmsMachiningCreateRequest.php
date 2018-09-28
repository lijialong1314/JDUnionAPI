<?php
class JcloudWmsMachiningCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.machining.create";
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
                                    	                        	                                            		                                    	                   			private $machiningNo;
    	                        
	public function setMachiningNo($machiningNo){
		$this->machiningNo = $machiningNo;
         $this->apiParas["machiningNo"] = $machiningNo;
	}

	public function getMachiningNo(){
	  return $this->machiningNo;
	}

                        	                   			private $machiningType;
    	                        
	public function setMachiningType($machiningType){
		$this->machiningType = $machiningType;
         $this->apiParas["machiningType"] = $machiningType;
	}

	public function getMachiningType(){
	  return $this->machiningType;
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
                                                                                                                                                                                                                                                                                                                                              private $qty;
                              public function setQty($qty ){
                 $this->qty=$qty;
                 $this->apiParas["qty"] = $qty;
              }

              public function getQty(){
              	return $this->qty;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $destOwnerNo;
                              public function setDestOwnerNo($destOwnerNo ){
                 $this->destOwnerNo=$destOwnerNo;
                 $this->apiParas["destOwnerNo"] = $destOwnerNo;
              }

              public function getDestOwnerNo(){
              	return $this->destOwnerNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $destSkuNo;
                              public function setDestSkuNo($destSkuNo ){
                 $this->destSkuNo=$destSkuNo;
                 $this->apiParas["destSkuNo"] = $destSkuNo;
              }

              public function getDestSkuNo(){
              	return $this->destSkuNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $destProductLevel;
                              public function setDestProductLevel($destProductLevel ){
                 $this->destProductLevel=$destProductLevel;
                 $this->apiParas["destProductLevel"] = $destProductLevel;
              }

              public function getDestProductLevel(){
              	return $this->destProductLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $destQty;
                              public function setDestQty($destQty ){
                 $this->destQty=$destQty;
                 $this->apiParas["destQty"] = $destQty;
              }

              public function getDestQty(){
              	return $this->destQty;
              }
                                                                                                                                            }





        
 

