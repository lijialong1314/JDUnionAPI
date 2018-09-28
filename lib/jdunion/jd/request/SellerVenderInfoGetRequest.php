<?php
class SellerVenderInfoGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.vender.info.get";
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
                                    	                                            		                                    	                   			private $extJsonParam;
    	                                                                        
	public function setExtJsonParam($extJsonParam){
		$this->extJsonParam = $extJsonParam;
         $this->apiParas["ext_json_param"] = $extJsonParam;
	}

	public function getExtJsonParam(){
	  return $this->extJsonParam;
	}

                            }





        
 

