<?php
class WarehouseInboundOrderQueryListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.inbound.order.query.list";
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

                        	                   			private $unpackingTimeBegin;
    	                        
	public function setUnpackingTimeBegin($unpackingTimeBegin){
		$this->unpackingTimeBegin = $unpackingTimeBegin;
         $this->apiParas["unpackingTimeBegin"] = $unpackingTimeBegin;
	}

	public function getUnpackingTimeBegin(){
	  return $this->unpackingTimeBegin;
	}

                        	                   			private $unpackingTimeEnd;
    	                        
	public function setUnpackingTimeEnd($unpackingTimeEnd){
		$this->unpackingTimeEnd = $unpackingTimeEnd;
         $this->apiParas["unpackingTimeEnd"] = $unpackingTimeEnd;
	}

	public function getUnpackingTimeEnd(){
	  return $this->unpackingTimeEnd;
	}

                        	                   			private $remark1;
    	                        
	public function setRemark1($remark1){
		$this->remark1 = $remark1;
         $this->apiParas["remark1"] = $remark1;
	}

	public function getRemark1(){
	  return $this->remark1;
	}

                        	                   			private $remark2;
    	                        
	public function setRemark2($remark2){
		$this->remark2 = $remark2;
         $this->apiParas["remark2"] = $remark2;
	}

	public function getRemark2(){
	  return $this->remark2;
	}

                        	                   			private $remark3;
    	                        
	public function setRemark3($remark3){
		$this->remark3 = $remark3;
         $this->apiParas["remark3"] = $remark3;
	}

	public function getRemark3(){
	  return $this->remark3;
	}

                        	                   			private $remark4;
    	                        
	public function setRemark4($remark4){
		$this->remark4 = $remark4;
         $this->apiParas["remark4"] = $remark4;
	}

	public function getRemark4(){
	  return $this->remark4;
	}

                        	                   			private $remark5;
    	                        
	public function setRemark5($remark5){
		$this->remark5 = $remark5;
         $this->apiParas["remark5"] = $remark5;
	}

	public function getRemark5(){
	  return $this->remark5;
	}

                            }





        
 

