<?php
class VenderChildAccountQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.childAccount.query";
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
                                    	                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $size;
    	                        
	public function setSize($size){
		$this->size = $size;
         $this->apiParas["size"] = $size;
	}

	public function getSize(){
	  return $this->size;
	}

                        	}





        
 

