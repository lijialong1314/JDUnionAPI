<?php
class TeamKeywordListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.keyword.list";
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
         $this->apiParas["keyWord"] = $keyWord;
	}

	public function getKeyWord(){
	  return $this->keyWord;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
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





        
 

