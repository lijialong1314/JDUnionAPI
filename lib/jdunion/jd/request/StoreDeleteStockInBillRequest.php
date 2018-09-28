<?php
class StoreDeleteStockInBillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.store.deleteStockInBill";
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
                                    	                        	                   			private $stockInBillId;
    	                                                                                    
	public function setStockInBillId($stockInBillId){
		$this->stockInBillId = $stockInBillId;
         $this->apiParas["stock_in_bill_id"] = $stockInBillId;
	}

	public function getStockInBillId(){
	  return $this->stockInBillId;
	}

                        	}





        
 

