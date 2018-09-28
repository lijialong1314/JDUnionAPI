<?php
class EclpStockQueryAdventGoodsStockRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.queryAdventGoodsStock";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $warehouseNos;
    	                        
	public function setWarehouseNos($warehouseNos){
		$this->warehouseNos = $warehouseNos;
         $this->apiParas["warehouseNos"] = $warehouseNos;
	}

	public function getWarehouseNos(){
	  return $this->warehouseNos;
	}

                        	                   			private $goodsNos;
    	                        
	public function setGoodsNos($goodsNos){
		$this->goodsNos = $goodsNos;
         $this->apiParas["goodsNos"] = $goodsNos;
	}

	public function getGoodsNos(){
	  return $this->goodsNos;
	}

                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
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





        
 

