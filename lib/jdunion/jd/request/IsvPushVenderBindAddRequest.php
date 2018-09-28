<?php
class IsvPushVenderBindAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.isv.push.vender.bind.add";
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
                                    	                        	                   			private $dbId;
    	                        
	public function setDbId($dbId){
		$this->dbId = $dbId;
         $this->apiParas["dbId"] = $dbId;
	}

	public function getDbId(){
	  return $this->dbId;
	}

                        	                        	}





        
 

