<?php
class LogisticsOtherOutstoreQueryreturnbarcodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.otherOutstore.queryreturnbarcode";
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
                                    	                   			private $joslOutboundNo;
    	                                                                        
	public function setJoslOutboundNo($joslOutboundNo){
		$this->joslOutboundNo = $joslOutboundNo;
         $this->apiParas["josl_outbound_no"] = $joslOutboundNo;
	}

	public function getJoslOutboundNo(){
	  return $this->joslOutboundNo;
	}

                        	}





        
 

