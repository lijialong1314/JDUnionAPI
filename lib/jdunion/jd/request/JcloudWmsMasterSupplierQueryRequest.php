<?php
class JcloudWmsMasterSupplierQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.master.supplier.query";
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
                                    	                        	                                            		                                    	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $supplierNo;
                              public function setSupplierNo($supplierNo ){
                 $this->supplierNo=$supplierNo;
                 $this->apiParas["supplierNo"] = $supplierNo;
              }

              public function getSupplierNo(){
              	return $this->supplierNo;
              }
                                                                                                                                            }





        
 

