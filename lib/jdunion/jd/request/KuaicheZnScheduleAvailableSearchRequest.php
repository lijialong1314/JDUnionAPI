<?php
class KuaicheZnScheduleAvailableSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.schedule.available.search";
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
                                    	                   			private $spaceId;
    	                                                            
	public function setSpaceId($spaceId){
		$this->spaceId = $spaceId;
         $this->apiParas["space_id"] = $spaceId;
	}

	public function getSpaceId(){
	  return $this->spaceId;
	}

}





        
 

