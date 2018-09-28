<?php
class JwMarketingStoreQueryStoresRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.marketing.store.queryStores";
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
                                                        		                                    	                        	                            }





        
 

