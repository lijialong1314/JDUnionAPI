<?php
class DspKcCampainDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.kc.campain.delete";
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
                                                        		                                    	                        	                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $compaignId;
                              public function setCompaignId($compaignId ){
                 $this->compaignId=$compaignId;
                 $this->apiParas["compaignId"] = $compaignId;
              }

              public function getCompaignId(){
              	return $this->compaignId;
              }
                                                                                                                                            }





        
 

