<?php
class VcReturnOrderListPageGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.return.order.list.page.get";
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
                                                        		                                    	                   			private $returnId;
    	                        
	public function setReturnId($returnId){
		$this->returnId = $returnId;
         $this->apiParas["returnId"] = $returnId;
	}

	public function getReturnId(){
	  return $this->returnId;
	}

                        	                   			private $fromDeliverCenterId;
    	                        
	public function setFromDeliverCenterId($fromDeliverCenterId){
		$this->fromDeliverCenterId = $fromDeliverCenterId;
         $this->apiParas["fromDeliverCenterId"] = $fromDeliverCenterId;
	}

	public function getFromDeliverCenterId(){
	  return $this->fromDeliverCenterId;
	}

                        	                   			private $returnStates;
    	                        
	public function setReturnStates($returnStates){
		$this->returnStates = $returnStates;
         $this->apiParas["returnStates"] = $returnStates;
	}

	public function getReturnStates(){
	  return $this->returnStates;
	}

                        	                   			private $createDateBegin;
    	                        
	public function setCreateDateBegin($createDateBegin){
		$this->createDateBegin = $createDateBegin;
         $this->apiParas["createDateBegin"] = $createDateBegin;
	}

	public function getCreateDateBegin(){
	  return $this->createDateBegin;
	}

                        	                   			private $createDateEnd;
    	                        
	public function setCreateDateEnd($createDateEnd){
		$this->createDateEnd = $createDateEnd;
         $this->apiParas["createDateEnd"] = $createDateEnd;
	}

	public function getCreateDateEnd(){
	  return $this->createDateEnd;
	}

                        	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                            }





        
 

