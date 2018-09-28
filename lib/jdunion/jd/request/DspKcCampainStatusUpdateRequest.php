<?php
class DspKcCampainStatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.kc.campain.status.update";
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

                        	                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $compaignId;
                              public function setCompaignId($compaignId ){
                 $this->compaignId=$compaignId;
                 $this->apiParas["compaignId"] = $compaignId;
              }

              public function getCompaignId(){
              	return $this->compaignId;
              }
                                                                                                                                            }





        
 

