<?php
class TeamCountBykeywordGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.count.bykeyword.get";
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
                                                        		                                    	                   			private $keyWord;
    	                                                            
	public function setKeyWord($keyWord){
		$this->keyWord = $keyWord;
         $this->apiParas["key_word"] = $keyWord;
	}

	public function getKeyWord(){
	  return $this->keyWord;
	}

                        	                   			private $cityName;
    	                                                            
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["city_name"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
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





        
 

