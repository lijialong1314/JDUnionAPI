<?php
class TeamCurrentListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.current.list";
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
                                    	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $teamType;
    	                        
	public function setTeamType($teamType){
		$this->teamType = $teamType;
         $this->apiParas["teamType"] = $teamType;
	}

	public function getTeamType(){
	  return $this->teamType;
	}

                        	                   			private $areaId;
    	                        
	public function setAreaId($areaId){
		$this->areaId = $areaId;
         $this->apiParas["areaId"] = $areaId;
	}

	public function getAreaId(){
	  return $this->areaId;
	}

                        	                   			private $sqId;
    	                        
	public function setSqId($sqId){
		$this->sqId = $sqId;
         $this->apiParas["sqId"] = $sqId;
	}

	public function getSqId(){
	  return $this->sqId;
	}

                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                   			private $group2Id;
    	                        
	public function setGroup2Id($group2Id){
		$this->group2Id = $group2Id;
         $this->apiParas["group2Id"] = $group2Id;
	}

	public function getGroup2Id(){
	  return $this->group2Id;
	}

                        	                   			private $sort;
    	                        
	public function setSort($sort){
		$this->sort = $sort;
         $this->apiParas["sort"] = $sort;
	}

	public function getSort(){
	  return $this->sort;
	}

                        	                   			private $start;
    	                        
	public function setStart($start){
		$this->start = $start;
         $this->apiParas["start"] = $start;
	}

	public function getStart(){
	  return $this->start;
	}

                        	                   			private $limit;
    	                        
	public function setLimit($limit){
		$this->limit = $limit;
         $this->apiParas["limit"] = $limit;
	}

	public function getLimit(){
	  return $this->limit;
	}

                        	                   			private $isTeamExternalUrl;
    	                        
	public function setIsTeamExternalUrl($isTeamExternalUrl){
		$this->isTeamExternalUrl = $isTeamExternalUrl;
         $this->apiParas["isTeamExternalUrl"] = $isTeamExternalUrl;
	}

	public function getIsTeamExternalUrl(){
	  return $this->isTeamExternalUrl;
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





        
 

