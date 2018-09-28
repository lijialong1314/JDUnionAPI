<?php
class PopAfsRefundapplyQuerylistRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.refundapply.querylist";
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
                                    	                                            		                                    	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $buyerId;
    	                                                            
	public function setBuyerId($buyerId){
		$this->buyerId = $buyerId;
         $this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId(){
	  return $this->buyerId;
	}

                        	                   			private $buyerName;
    	                                                            
	public function setBuyerName($buyerName){
		$this->buyerName = $buyerName;
         $this->apiParas["buyer_name"] = $buyerName;
	}

	public function getBuyerName(){
	  return $this->buyerName;
	}

                        	                   			private $applyTimeStart;
    	                                                                        
	public function setApplyTimeStart($applyTimeStart){
		$this->applyTimeStart = $applyTimeStart;
         $this->apiParas["apply_time_start"] = $applyTimeStart;
	}

	public function getApplyTimeStart(){
	  return $this->applyTimeStart;
	}

                        	                   			private $applyTimeEnd;
    	                                                                        
	public function setApplyTimeEnd($applyTimeEnd){
		$this->applyTimeEnd = $applyTimeEnd;
         $this->apiParas["apply_time_end"] = $applyTimeEnd;
	}

	public function getApplyTimeEnd(){
	  return $this->applyTimeEnd;
	}

                        	                   			private $checkTimeStart;
    	                                                                        
	public function setCheckTimeStart($checkTimeStart){
		$this->checkTimeStart = $checkTimeStart;
         $this->apiParas["check_time_start"] = $checkTimeStart;
	}

	public function getCheckTimeStart(){
	  return $this->checkTimeStart;
	}

                        	                   			private $checkTimeEnd;
    	                                                                        
	public function setCheckTimeEnd($checkTimeEnd){
		$this->checkTimeEnd = $checkTimeEnd;
         $this->apiParas["check_time_end"] = $checkTimeEnd;
	}

	public function getCheckTimeEnd(){
	  return $this->checkTimeEnd;
	}

                                                    	                   			private $pageIndex;
    	                                                            
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

}





        
 

