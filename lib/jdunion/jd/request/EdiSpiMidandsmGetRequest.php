<?php
class EdiSpiMidandsmGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.spi.midandsm.get";
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
                                                        		                                    	                   			private $orgId;
    	                        
	public function setOrgId($orgId){
		$this->orgId = $orgId;
         $this->apiParas["orgId"] = $orgId;
	}

	public function getOrgId(){
	  return $this->orgId;
	}

                        	                   			private $warehouseCode;
    	                        
	public function setWarehouseCode($warehouseCode){
		$this->warehouseCode = $warehouseCode;
         $this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode(){
	  return $this->warehouseCode;
	}

                        	                   			private $jdSku;
    	                        
	public function setJdSku($jdSku){
		$this->jdSku = $jdSku;
         $this->apiParas["jdSku"] = $jdSku;
	}

	public function getJdSku(){
	  return $this->jdSku;
	}

                        	                   			private $inTimeStart;
    	                        
	public function setInTimeStart($inTimeStart){
		$this->inTimeStart = $inTimeStart;
         $this->apiParas["inTimeStart"] = $inTimeStart;
	}

	public function getInTimeStart(){
	  return $this->inTimeStart;
	}

                        	                   			private $inTimeEnd;
    	                        
	public function setInTimeEnd($inTimeEnd){
		$this->inTimeEnd = $inTimeEnd;
         $this->apiParas["inTimeEnd"] = $inTimeEnd;
	}

	public function getInTimeEnd(){
	  return $this->inTimeEnd;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
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





        
 

