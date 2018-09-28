<?php
class WarehouseOutboundOrderQueryDetailWareRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.outbound.order.query.detail.ware";
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
                                                        		                                    	                        	                   			private $stockOutNo;
    	                        
	public function setStockOutNo($stockOutNo){
		$this->stockOutNo = $stockOutNo;
         $this->apiParas["stockOutNo"] = $stockOutNo;
	}

	public function getStockOutNo(){
	  return $this->stockOutNo;
	}

                            }





        
 

