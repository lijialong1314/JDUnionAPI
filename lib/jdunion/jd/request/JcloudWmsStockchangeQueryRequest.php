<?php
class JcloudWmsStockchangeQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.stockchange.query";
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





        
 

