<?php
class TeamIdsListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.ids.list";
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
                                    	                   			private $teamId;
    	                        
	public function setTeamId($teamId){
		$this->teamId = $teamId;
         $this->apiParas["teamId"] = $teamId;
	}

	public function getTeamId(){
	  return $this->teamId;
	}

                        	                   			private $IsDetail;
    	                        
	public function setIsDetail($IsDetail){
		$this->IsDetail = $IsDetail;
         $this->apiParas["IsDetail"] = $IsDetail;
	}

	public function getIsDetail(){
	  return $this->IsDetail;
	}

                        	                   			private $client;
    	                        
	public function setClient($client){
		$this->client = $client;
         $this->apiParas["client"] = $client;
	}

	public function getClient(){
	  return $this->client;
	}

}





        
 

