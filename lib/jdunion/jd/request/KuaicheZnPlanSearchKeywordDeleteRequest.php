<?php
class KuaicheZnPlanSearchKeywordDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.plan.search.keyword.delete";
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
                                    	                        	                        	                   			private $planId;
    	                                                            
	public function setPlanId($planId){
		$this->planId = $planId;
         $this->apiParas["plan_id"] = $planId;
	}

	public function getPlanId(){
	  return $this->planId;
	}

                        	                   			private $keywordIds;
    	                                                            
	public function setKeywordIds($keywordIds){
		$this->keywordIds = $keywordIds;
         $this->apiParas["keyword_ids"] = $keywordIds;
	}

	public function getKeywordIds(){
	  return $this->keywordIds;
	}

}





        
 

