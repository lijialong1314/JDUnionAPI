<?php
class PopAfsSoaRefundapplyQueryPageListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.soa.refundapply.queryPageList";
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
                                                        		                                    	                        	                   			private $ids;
    	                        
	public function setIds($ids){
		$this->ids = $ids;
         $this->apiParas["ids"] = $ids;
	}

	public function getIds(){
	  return $this->ids;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $buyerId;
    	                        
	public function setBuyerId($buyerId){
		$this->buyerId = $buyerId;
         $this->apiParas["buyerId"] = $buyerId;
	}

	public function getBuyerId(){
	  return $this->buyerId;
	}

                        	                   			private $buyerName;
    	                        
	public function setBuyerName($buyerName){
		$this->buyerName = $buyerName;
         $this->apiParas["buyerName"] = $buyerName;
	}

	public function getBuyerName(){
	  return $this->buyerName;
	}

                        	                   			private $applyTimeStart;
    	                        
	public function setApplyTimeStart($applyTimeStart){
		$this->applyTimeStart = $applyTimeStart;
         $this->apiParas["applyTimeStart"] = $applyTimeStart;
	}

	public function getApplyTimeStart(){
	  return $this->applyTimeStart;
	}

                        	                   			private $applyTimeEnd;
    	                        
	public function setApplyTimeEnd($applyTimeEnd){
		$this->applyTimeEnd = $applyTimeEnd;
         $this->apiParas["applyTimeEnd"] = $applyTimeEnd;
	}

	public function getApplyTimeEnd(){
	  return $this->applyTimeEnd;
	}

                        	                   			private $checkTimeStart;
    	                        
	public function setCheckTimeStart($checkTimeStart){
		$this->checkTimeStart = $checkTimeStart;
         $this->apiParas["checkTimeStart"] = $checkTimeStart;
	}

	public function getCheckTimeStart(){
	  return $this->checkTimeStart;
	}

                        	                   			private $checkTimeEnd;
    	                        
	public function setCheckTimeEnd($checkTimeEnd){
		$this->checkTimeEnd = $checkTimeEnd;
         $this->apiParas["checkTimeEnd"] = $checkTimeEnd;
	}

	public function getCheckTimeEnd(){
	  return $this->checkTimeEnd;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
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





        
 

