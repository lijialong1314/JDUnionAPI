<?php
class TeamVirtualGroupListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.virtual.group.list.get";
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
    }





        
 

