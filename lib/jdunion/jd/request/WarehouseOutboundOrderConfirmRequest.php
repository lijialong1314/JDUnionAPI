<?php
class WarehouseOutboundOrderConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.outbound.order.confirm";
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
                                                        		                                    	                        	                   	                    		private $stockOutNoList;
    	                        
	public function setStockOutNoList($stockOutNoList){
		$this->stockOutNoList = $stockOutNoList;
         $this->apiParas["stockOutNoList"] = $stockOutNoList;
	}

	public function getStockOutNoList(){
	  return $this->stockOutNoList;
	}

                            }





        
 

