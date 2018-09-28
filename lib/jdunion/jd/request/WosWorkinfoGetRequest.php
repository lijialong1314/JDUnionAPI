<?php
class WosWorkinfoGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wos.workinfo.get";
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
                                    	                   			private $workId;
    	                                                            
	public function setWorkId($workId){
		$this->workId = $workId;
         $this->apiParas["work_id"] = $workId;
	}

	public function getWorkId(){
	  return $this->workId;
	}

                        	}





        
 

