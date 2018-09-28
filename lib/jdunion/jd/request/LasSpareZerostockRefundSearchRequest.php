<?php
class LasSpareZerostockRefundSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.refund.search";
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
                                    	                   			private $outNo;
    	                                                            
	public function setOutNo($outNo){
		$this->outNo = $outNo;
         $this->apiParas["out_no"] = $outNo;
	}

	public function getOutNo(){
	  return $this->outNo;
	}

}





        
 

