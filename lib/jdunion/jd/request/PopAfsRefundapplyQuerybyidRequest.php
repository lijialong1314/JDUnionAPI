<?php
class PopAfsRefundapplyQuerybyidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.refundapply.querybyid";
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
                                    	                        	                   			private $raId;
    	                                                            
	public function setRaId($raId){
		$this->raId = $raId;
         $this->apiParas["ra_id"] = $raId;
	}

	public function getRaId(){
	  return $this->raId;
	}

}





        
 

