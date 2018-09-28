<?php
class GetRelationByJDUidGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getRelationByJDUid.get";
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
                                    	                   			private $uid;
    	                        
	public function setUid($uid){
		$this->uid = $uid;
         $this->apiParas["uid"] = $uid;
	}

	public function getUid(){
	  return $this->uid;
	}

                        	}





        
 

