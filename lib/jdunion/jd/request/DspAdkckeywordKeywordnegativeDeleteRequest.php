<?php
class DspAdkckeywordKeywordnegativeDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkckeyword.keywordnegative.delete";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $id;
                              public function setId($id ){
                 $this->id=$id;
                 $this->apiParas["id"] = $id;
              }

              public function getId(){
              	return $this->id;
              }
                                                                                                                                                                                                                                                                                                                                              private $keywordName;
                              public function setKeywordName($keywordName ){
                 $this->keywordName=$keywordName;
                 $this->apiParas["keywordName"] = $keywordName;
              }

              public function getKeywordName(){
              	return $this->keywordName;
              }
                                                                                                                                        	                        	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

}





        
 

