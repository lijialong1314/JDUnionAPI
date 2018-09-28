<?php
class EclpStockQueryStockChangeTransferRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.queryStockChangeTransfer";
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

                        	                   			private $timeStart;
    	                        
	public function setTimeStart($timeStart){
		$this->timeStart = $timeStart;
         $this->apiParas["timeStart"] = $timeStart;
	}

	public function getTimeStart(){
	  return $this->timeStart;
	}

                        	                   			private $timeEnd;
    	                        
	public function setTimeEnd($timeEnd){
		$this->timeEnd = $timeEnd;
         $this->apiParas["timeEnd"] = $timeEnd;
	}

	public function getTimeEnd(){
	  return $this->timeEnd;
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





        
 

