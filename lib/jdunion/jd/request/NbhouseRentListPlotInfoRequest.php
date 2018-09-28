<?php
class NbhouseRentListPlotInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.nbhouse.rent.listPlotInfo";
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
                                                        		                                    	                   			private $plotName;
    	                        
	public function setPlotName($plotName){
		$this->plotName = $plotName;
         $this->apiParas["plotName"] = $plotName;
	}

	public function getPlotName(){
	  return $this->plotName;
	}

                        	                   			private $firstCode;
    	                        
	public function setFirstCode($firstCode){
		$this->firstCode = $firstCode;
         $this->apiParas["firstCode"] = $firstCode;
	}

	public function getFirstCode(){
	  return $this->firstCode;
	}

                        	                   			private $secondCode;
    	                        
	public function setSecondCode($secondCode){
		$this->secondCode = $secondCode;
         $this->apiParas["secondCode"] = $secondCode;
	}

	public function getSecondCode(){
	  return $this->secondCode;
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





        
 

