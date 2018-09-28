<?php
class EdiRoDetailBatchGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.ro.detail.batch.get";
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
                                                        		                                    	                   			private $returnOrderCode;
    	                        
	public function setReturnOrderCode($returnOrderCode){
		$this->returnOrderCode = $returnOrderCode;
         $this->apiParas["returnOrderCode"] = $returnOrderCode;
	}

	public function getReturnOrderCode(){
	  return $this->returnOrderCode;
	}

                        	                   			private $jdSku;
    	                        
	public function setJdSku($jdSku){
		$this->jdSku = $jdSku;
         $this->apiParas["jdSku"] = $jdSku;
	}

	public function getJdSku(){
	  return $this->jdSku;
	}

                        	                            }





        
 

