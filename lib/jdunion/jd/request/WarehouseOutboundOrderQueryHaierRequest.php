<?php
class WarehouseOutboundOrderQueryHaierRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.outbound.order.query.haier";
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

                        	                   			private $stockOutNo;
    	                        
	public function setStockOutNo($stockOutNo){
		$this->stockOutNo = $stockOutNo;
         $this->apiParas["stockOutNo"] = $stockOutNo;
	}

	public function getStockOutNo(){
	  return $this->stockOutNo;
	}

                        	                   			private $createTimeBegin;
    	                        
	public function setCreateTimeBegin($createTimeBegin){
		$this->createTimeBegin = $createTimeBegin;
         $this->apiParas["createTimeBegin"] = $createTimeBegin;
	}

	public function getCreateTimeBegin(){
	  return $this->createTimeBegin;
	}

                        	                   			private $createTimeEnd;
    	                        
	public function setCreateTimeEnd($createTimeEnd){
		$this->createTimeEnd = $createTimeEnd;
         $this->apiParas["createTimeEnd"] = $createTimeEnd;
	}

	public function getCreateTimeEnd(){
	  return $this->createTimeEnd;
	}

                            }





        
 

