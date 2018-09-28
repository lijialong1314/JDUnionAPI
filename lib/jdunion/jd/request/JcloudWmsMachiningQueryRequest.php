<?php
class JcloudWmsMachiningQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.machining.query";
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

                            }





        
 

