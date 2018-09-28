<?php
class TeamNearbycountGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.nearbycount.get";
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
                                                        		                                    	                   			private $longitude;
    	                        
	public function setLongitude($longitude){
		$this->longitude = $longitude;
         $this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude(){
	  return $this->longitude;
	}

                        	                   			private $latitude;
    	                        
	public function setLatitude($latitude){
		$this->latitude = $latitude;
         $this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude(){
	  return $this->latitude;
	}

                        	                   			private $radius;
    	                        
	public function setRadius($radius){
		$this->radius = $radius;
         $this->apiParas["radius"] = $radius;
	}

	public function getRadius(){
	  return $this->radius;
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





        
 

