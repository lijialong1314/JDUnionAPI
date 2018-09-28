<?php
class TeamTotalnumberGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.totalnumber.get";
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
         $this->apiParas["city_id"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $groupId;
    	                                                            
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                   			private $teamType;
    	                                                            
	public function setTeamType($teamType){
		$this->teamType = $teamType;
         $this->apiParas["team_type"] = $teamType;
	}

	public function getTeamType(){
	  return $this->teamType;
	}

                        	                   			private $districtId;
    	                                                            
	public function setDistrictId($districtId){
		$this->districtId = $districtId;
         $this->apiParas["district_id"] = $districtId;
	}

	public function getDistrictId(){
	  return $this->districtId;
	}

                        	                   			private $areaId;
    	                                                            
	public function setAreaId($areaId){
		$this->areaId = $areaId;
         $this->apiParas["area_id"] = $areaId;
	}

	public function getAreaId(){
	  return $this->areaId;
	}

                        	                   			private $group2Id;
    	                                                            
	public function setGroup2Id($group2Id){
		$this->group2Id = $group2Id;
         $this->apiParas["group2_id"] = $group2Id;
	}

	public function getGroup2Id(){
	  return $this->group2Id;
	}

                        	                   			private $isTeamExternalUrl;
    	                                                                                    
	public function setIsTeamExternalUrl($isTeamExternalUrl){
		$this->isTeamExternalUrl = $isTeamExternalUrl;
         $this->apiParas["is_team_external_url"] = $isTeamExternalUrl;
	}

	public function getIsTeamExternalUrl(){
	  return $this->isTeamExternalUrl;
	}

                            }





        
 

