<?php
class StoreQueryStockInBillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.store.queryStockInBill";
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
                                                        		                                    	                        	                   			private $stockInStatus;
    	                                                                        
	public function setStockInStatus($stockInStatus){
		$this->stockInStatus = $stockInStatus;
         $this->apiParas["stock_in_status"] = $stockInStatus;
	}

	public function getStockInStatus(){
	  return $this->stockInStatus;
	}

                        	                   			private $stockInBillId;
    	                                                                                    
	public function setStockInBillId($stockInBillId){
		$this->stockInBillId = $stockInBillId;
         $this->apiParas["stock_in_bill_id"] = $stockInBillId;
	}

	public function getStockInBillId(){
	  return $this->stockInBillId;
	}

                        	                   			private $comId;
    	                                                            
	public function setComId($comId){
		$this->comId = $comId;
         $this->apiParas["com_id"] = $comId;
	}

	public function getComId(){
	  return $this->comId;
	}

                        	                   			private $orgId;
    	                                                            
	public function setOrgId($orgId){
		$this->orgId = $orgId;
         $this->apiParas["org_id"] = $orgId;
	}

	public function getOrgId(){
	  return $this->orgId;
	}

                        	                   			private $whId;
    	                                                            
	public function setWhId($whId){
		$this->whId = $whId;
         $this->apiParas["wh_id"] = $whId;
	}

	public function getWhId(){
	  return $this->whId;
	}

                        	                   			private $skuId;
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $beginTime;
    	                                                            
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
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





        
 

