<?php
class PoListPageGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.po.list.page.get";
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
                                                        		                                    	                   			private $deliverCenterId;
    	                        
	public function setDeliverCenterId($deliverCenterId){
		$this->deliverCenterId = $deliverCenterId;
         $this->apiParas["deliverCenterId"] = $deliverCenterId;
	}

	public function getDeliverCenterId(){
	  return $this->deliverCenterId;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $createdDateStart;
    	                        
	public function setCreatedDateStart($createdDateStart){
		$this->createdDateStart = $createdDateStart;
         $this->apiParas["createdDateStart"] = $createdDateStart;
	}

	public function getCreatedDateStart(){
	  return $this->createdDateStart;
	}

                        	                   			private $createdDateEnd;
    	                        
	public function setCreatedDateEnd($createdDateEnd){
		$this->createdDateEnd = $createdDateEnd;
         $this->apiParas["createdDateEnd"] = $createdDateEnd;
	}

	public function getCreatedDateEnd(){
	  return $this->createdDateEnd;
	}

                        	                        	                   			private $isEptCustomized;
    	                        
	public function setIsEptCustomized($isEptCustomized){
		$this->isEptCustomized = $isEptCustomized;
         $this->apiParas["isEptCustomized"] = $isEptCustomized;
	}

	public function getIsEptCustomized(){
	  return $this->isEptCustomized;
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

                        	                   	                    		private $orderIds;
    	                        
	public function setOrderIds($orderIds){
		$this->orderIds = $orderIds;
         $this->apiParas["orderIds"] = $orderIds;
	}

	public function getOrderIds(){
	  return $this->orderIds;
	}

                        	                   	                    		private $wareIds;
    	                        
	public function setWareIds($wareIds){
		$this->wareIds = $wareIds;
         $this->apiParas["wareIds"] = $wareIds;
	}

	public function getWareIds(){
	  return $this->wareIds;
	}

                        	                   	                    		private $states;
    	                        
	public function setStates($states){
		$this->states = $states;
         $this->apiParas["states"] = $states;
	}

	public function getStates(){
	  return $this->states;
	}

                        	                   	                    		private $confirmStates;
    	                        
	public function setConfirmStates($confirmStates){
		$this->confirmStates = $confirmStates;
         $this->apiParas["confirmStates"] = $confirmStates;
	}

	public function getConfirmStates(){
	  return $this->confirmStates;
	}

                        	                   	                    		private $orderAttributes;
    	                        
	public function setOrderAttributes($orderAttributes){
		$this->orderAttributes = $orderAttributes;
         $this->apiParas["orderAttributes"] = $orderAttributes;
	}

	public function getOrderAttributes(){
	  return $this->orderAttributes;
	}

                            }





        
 

