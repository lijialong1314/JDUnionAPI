<?php
class DspAdkckeywordKeywordDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkckeyword.keyword.delete";
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
                                    	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $keyWordsName;
                              public function setKeyWordsName($keyWordsName ){
                 $this->keyWordsName=$keyWordsName;
                 $this->apiParas["keyWordsName"] = $keyWordsName;
              }

              public function getKeyWordsName(){
              	return $this->keyWordsName;
              }
                                                                                                                }





        
 

