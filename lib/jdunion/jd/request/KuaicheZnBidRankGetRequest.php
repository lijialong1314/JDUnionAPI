<?php
class KuaicheZnBidRankGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.bid.rank.get";
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
                                    	                        	                   			private $planJson;
    	                                                            
	public function setPlanJson($planJson){
		$this->planJson = $planJson;
         $this->apiParas["plan_json"] = $planJson;
	}

	public function getPlanJson(){
	  return $this->planJson;
	}

                                            		                                    	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $kwgId;
    	                                                            
	public function setKwgId($kwgId){
		$this->kwgId = $kwgId;
         $this->apiParas["kwg_id"] = $kwgId;
	}

	public function getKwgId(){
	  return $this->kwgId;
	}

                        	                   			private $planDate;
    	                                                            
	public function setPlanDate($planDate){
		$this->planDate = $planDate;
         $this->apiParas["plan_date"] = $planDate;
	}

	public function getPlanDate(){
	  return $this->planDate;
	}

                            }





        
 

