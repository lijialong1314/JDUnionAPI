<?php
class VenderChildaccountPrivilegeQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.childaccount.privilege.query";
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
                                    	                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $accountNameS;
                              public function setAccountNameS($accountNameS ){
                 $this->accountNameS=$accountNameS;
                 $this->apiParas["account_name_s"] = $accountNameS;
              }

              public function getAccountNameS(){
              	return $this->accountNameS;
              }
                                                                                                                                        	}





        
 

