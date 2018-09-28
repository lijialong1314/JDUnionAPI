<?php
class JcloudWmsOrderQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.order.query";
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
                                    	                        	                                            		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
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

                        	                   			private $billType;
    	                        
	public function setBillType($billType){
		$this->billType = $billType;
         $this->apiParas["billType"] = $billType;
	}

	public function getBillType(){
	  return $this->billType;
	}

                            }





        
 

