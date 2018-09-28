<?php
class EdiRoGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.ro.get";
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
                                                        		                                    	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $createTimeStart;
    	                        
	public function setCreateTimeStart($createTimeStart){
		$this->createTimeStart = $createTimeStart;
         $this->apiParas["createTimeStart"] = $createTimeStart;
	}

	public function getCreateTimeStart(){
	  return $this->createTimeStart;
	}

                        	                   			private $createTimeEnd;
    	                        
	public function setCreateTimeEnd($createTimeEnd){
		$this->createTimeEnd = $createTimeEnd;
         $this->apiParas["createTimeEnd"] = $createTimeEnd;
	}

	public function getCreateTimeEnd(){
	  return $this->createTimeEnd;
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





        
 

