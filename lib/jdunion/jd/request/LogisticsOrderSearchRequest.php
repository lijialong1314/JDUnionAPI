<?php
class LogisticsOrderSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.order.search";
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
                                    	                   			private $receiptNos;
    	                                                            
	public function setReceiptNos($receiptNos){
		$this->receiptNos = $receiptNos;
         $this->apiParas["receipt_nos"] = $receiptNos;
	}

	public function getReceiptNos(){
	  return $this->receiptNos;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	}





        
 

