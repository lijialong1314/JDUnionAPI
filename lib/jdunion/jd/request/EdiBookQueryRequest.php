<?php
class EdiBookQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.book.query";
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
                                                        		                                    	                   			private $poNo;
    	                        
	public function setPoNo($poNo){
		$this->poNo = $poNo;
         $this->apiParas["poNo"] = $poNo;
	}

	public function getPoNo(){
	  return $this->poNo;
	}

                        	                            }





        
 

