<?php
class LogisticsPoGetreturnbacodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.po.getreturnbacode";
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
                                    	                   			private $inboundNo;
    	                                                            
	public function setInboundNo($inboundNo){
		$this->inboundNo = $inboundNo;
         $this->apiParas["inbound_no"] = $inboundNo;
	}

	public function getInboundNo(){
	  return $this->inboundNo;
	}

                        	                        	}





        
 

