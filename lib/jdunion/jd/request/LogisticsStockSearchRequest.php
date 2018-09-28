<?php
class LogisticsStockSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.stock.search";
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
                                    	                   			private $warehouseNo;
    	                                                            
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $goodsNo;
    	                                                            
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goods_no"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                        	                   			private $currentPage;
    	                                                            
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                        	}





        
 

