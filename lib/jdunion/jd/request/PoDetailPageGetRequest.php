<?php
class PoDetailPageGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.po.detail.page.get";
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
                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $sortFiled;
    	                        
	public function setSortFiled($sortFiled){
		$this->sortFiled = $sortFiled;
         $this->apiParas["sortFiled"] = $sortFiled;
	}

	public function getSortFiled(){
	  return $this->sortFiled;
	}

                        	                   			private $sortMode;
    	                        
	public function setSortMode($sortMode){
		$this->sortMode = $sortMode;
         $this->apiParas["sortMode"] = $sortMode;
	}

	public function getSortMode(){
	  return $this->sortMode;
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





        
 

