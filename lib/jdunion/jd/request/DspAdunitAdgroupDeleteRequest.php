<?php
class DspAdunitAdgroupDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adunit.adgroup.delete";
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
                              public function setAdGroupId($adGroupId ){
                 $this->adGroupId=$adGroupId;
                 $this->apiParas["adGroupId"] = $adGroupId;
              }

              public function getAdGroupId(){
              	return $this->adGroupId;
              }
                                                                                                                                                                    	}





        
 

