<?php
class EclpStockQuerySumStockRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.querySumStock";
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

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $goodsNo;
    	                        
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                        	                   			private $date;
    	                        
	public function setDate($date){
		$this->date = $date;
         $this->apiParas["date"] = $date;
	}

	public function getDate(){
	  return $this->date;
	}

                        	                   			private $isvGoodsNo;
    	                        
	public function setIsvGoodsNo($isvGoodsNo){
		$this->isvGoodsNo = $isvGoodsNo;
         $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
	}

	public function getIsvGoodsNo(){
	  return $this->isvGoodsNo;
	}

                                                    	}





        
 

