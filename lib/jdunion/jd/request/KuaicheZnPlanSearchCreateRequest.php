<?php
class KuaicheZnPlanSearchCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.plan.search.create";
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
                                    	                        	                        	                   			private $planInfo;
    	                                                            
	public function setPlanInfo($planInfo){
		$this->planInfo = $planInfo;
         $this->apiParas["plan_info"] = $planInfo;
	}

	public function getPlanInfo(){
	  return $this->planInfo;
	}

}





        
 

