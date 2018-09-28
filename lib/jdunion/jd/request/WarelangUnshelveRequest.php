<?php
class WarelangUnshelveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warelang.unshelve";
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
                                                        		                                    	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $langId;
    	                        
	public function setLangId($langId){
		$this->langId = $langId;
         $this->apiParas["langId"] = $langId;
	}

	public function getLangId(){
	  return $this->langId;
	}

                        	                            }





        
 

