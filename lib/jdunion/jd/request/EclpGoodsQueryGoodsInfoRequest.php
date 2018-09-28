<?php
class EclpGoodsQueryGoodsInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.goods.queryGoodsInfo";
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

                        	                   			private $isvGoodsNos;
    	                        
	public function setIsvGoodsNos($isvGoodsNos){
		$this->isvGoodsNos = $isvGoodsNos;
         $this->apiParas["isvGoodsNos"] = $isvGoodsNos;
	}

	public function getIsvGoodsNos(){
	  return $this->isvGoodsNos;
	}

                        	                   			private $goodsNos;
    	                        
	public function setGoodsNos($goodsNos){
		$this->goodsNos = $goodsNos;
         $this->apiParas["goodsNos"] = $goodsNos;
	}

	public function getGoodsNos(){
	  return $this->goodsNos;
	}

                        	                   			private $queryType;
    	                        
	public function setQueryType($queryType){
		$this->queryType = $queryType;
         $this->apiParas["queryType"] = $queryType;
	}

	public function getQueryType(){
	  return $this->queryType;
	}

                        	                   			private $barcodes;
    	                        
	public function setBarcodes($barcodes){
		$this->barcodes = $barcodes;
         $this->apiParas["barcodes"] = $barcodes;
	}

	public function getBarcodes(){
	  return $this->barcodes;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
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





        
 

