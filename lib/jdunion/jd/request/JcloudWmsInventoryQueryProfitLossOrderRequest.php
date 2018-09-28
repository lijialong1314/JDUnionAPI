<?php
class JcloudWmsInventoryQueryProfitLossOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.inventory.queryProfitLossOrder";
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
                                    	                        	                                            		                                    	                   			private $inventoryNo;
    	                        
	public function setInventoryNo($inventoryNo){
		$this->inventoryNo = $inventoryNo;
         $this->apiParas["inventoryNo"] = $inventoryNo;
	}

	public function getInventoryNo(){
	  return $this->inventoryNo;
	}

                        	                   			private $surplusDeficitType;
    	                        
	public function setSurplusDeficitType($surplusDeficitType){
		$this->surplusDeficitType = $surplusDeficitType;
         $this->apiParas["surplusDeficitType"] = $surplusDeficitType;
	}

	public function getSurplusDeficitType(){
	  return $this->surplusDeficitType;
	}

                        	                   			private $TimeStart;
    	                        
	public function setTimeStart($TimeStart){
		$this->TimeStart = $TimeStart;
         $this->apiParas["TimeStart"] = $TimeStart;
	}

	public function getTimeStart(){
	  return $this->TimeStart;
	}

                        	                   			private $TimeEnd;
    	                        
	public function setTimeEnd($TimeEnd){
		$this->TimeEnd = $TimeEnd;
         $this->apiParas["TimeEnd"] = $TimeEnd;
	}

	public function getTimeEnd(){
	  return $this->TimeEnd;
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





        
 

