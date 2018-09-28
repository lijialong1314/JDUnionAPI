<?php
class EdiPrepoGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.prepo.get";
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
                                                        		                                    	                   			private $prePurchaseOrderCode;
    	                        
	public function setPrePurchaseOrderCode($prePurchaseOrderCode){
		$this->prePurchaseOrderCode = $prePurchaseOrderCode;
         $this->apiParas["prePurchaseOrderCode"] = $prePurchaseOrderCode;
	}

	public function getPrePurchaseOrderCode(){
	  return $this->prePurchaseOrderCode;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $receiveTimeStart;
    	                        
	public function setReceiveTimeStart($receiveTimeStart){
		$this->receiveTimeStart = $receiveTimeStart;
         $this->apiParas["receiveTimeStart"] = $receiveTimeStart;
	}

	public function getReceiveTimeStart(){
	  return $this->receiveTimeStart;
	}

                        	                   			private $receiveTimeEnd;
    	                        
	public function setReceiveTimeEnd($receiveTimeEnd){
		$this->receiveTimeEnd = $receiveTimeEnd;
         $this->apiParas["receiveTimeEnd"] = $receiveTimeEnd;
	}

	public function getReceiveTimeEnd(){
	  return $this->receiveTimeEnd;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                            }





        
 

