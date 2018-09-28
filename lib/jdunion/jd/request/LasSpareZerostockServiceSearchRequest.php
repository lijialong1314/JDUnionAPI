<?php
class LasSpareZerostockServiceSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.service.search";
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
                                                        		                                    	                   			private $begin;
    	                        
	public function setBegin($begin){
		$this->begin = $begin;
         $this->apiParas["begin"] = $begin;
	}

	public function getBegin(){
	  return $this->begin;
	}

                        	                   			private $end;
    	                        
	public function setEnd($end){
		$this->end = $end;
         $this->apiParas["end"] = $end;
	}

	public function getEnd(){
	  return $this->end;
	}

                        	                   			private $index;
    	                        
	public function setIndex($index){
		$this->index = $index;
         $this->apiParas["index"] = $index;
	}

	public function getIndex(){
	  return $this->index;
	}

                        	                   			private $vc;
    	                        
	public function setVc($vc){
		$this->vc = $vc;
         $this->apiParas["vc"] = $vc;
	}

	public function getVc(){
	  return $this->vc;
	}

                        	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                            }





        
 

