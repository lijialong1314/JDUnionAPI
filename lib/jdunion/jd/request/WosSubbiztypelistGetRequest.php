<?php
class WosSubbiztypelistGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wos.subbiztypelist.get";
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
                                    	                   			private $biztypeId;
    	                                                            
	public function setBiztypeId($biztypeId){
		$this->biztypeId = $biztypeId;
         $this->apiParas["biztype_id"] = $biztypeId;
	}

	public function getBiztypeId(){
	  return $this->biztypeId;
	}

}





        
 

