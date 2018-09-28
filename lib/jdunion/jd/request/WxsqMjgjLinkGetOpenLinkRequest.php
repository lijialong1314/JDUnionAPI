<?php
class WxsqMjgjLinkGetOpenLinkRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wxsq.mjgj.link.GetOpenLink";
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
                                    	                   			private $rurl;
    	                        
	public function setRurl($rurl){
		$this->rurl = $rurl;
         $this->apiParas["rurl"] = $rurl;
	}

	public function getRurl(){
	  return $this->rurl;
	}

                        	                   			private $jump;
    	                        
	public function setJump($jump){
		$this->jump = $jump;
         $this->apiParas["jump"] = $jump;
	}

	public function getJump(){
	  return $this->jump;
	}

                        	                        	}





        
 

