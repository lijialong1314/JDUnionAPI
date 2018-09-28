<?php
class VcItemAdGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.ad.get";
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
                                    	                        	                   			private $wid;
    	                        
	public function setWid($wid){
		$this->wid = $wid;
         $this->apiParas["wid"] = $wid;
	}

	public function getWid(){
	  return $this->wid;
	}

}





        
 

