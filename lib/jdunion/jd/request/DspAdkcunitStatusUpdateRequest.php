<?php
class DspAdkcunitStatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.status.update";
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
                                                        		                                    	                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
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





        
 

