<?php
class DspAdkckeywordCategorypricesuggestQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkckeyword.categorypricesuggest.query";
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
                                    	                        	                   			private $key;
    	                        
	public function setKey($key){
		$this->key = $key;
         $this->apiParas["key"] = $key;
	}

	public function getKey(){
	  return $this->key;
	}

                        	                   			private $mobileType;
    	                        
	public function setMobileType($mobileType){
		$this->mobileType = $mobileType;
         $this->apiParas["mobileType"] = $mobileType;
	}

	public function getMobileType(){
	  return $this->mobileType;
	}

                        	}





        
 

