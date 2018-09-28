<?php
class VcItemAttrGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.attr.get";
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
                                    	                        	                   			private $groupId;
    	                                                            
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

}





        
 

