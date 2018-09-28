<?php
class ComXstoreMultichannelServiceSoaSkupincontrastOutPurchaseServiceFindPurchaseByIDRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.xstore.multichannel.service.soa.skupincontrast.OutPurchaseService.findPurchaseByID";
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
                                    	                   			private $paramStrin;
    	                        
	public function setParamStrin($paramStrin){
		$this->paramStrin = $paramStrin;
         $this->apiParas["paramStrin"] = $paramStrin;
	}

	public function getParamStrin(){
	  return $this->paramStrin;
	}

                        	                   			private $paramStrin1;
    	                        
	public function setParamStrin1($paramStrin1){
		$this->paramStrin1 = $paramStrin1;
         $this->apiParas["paramStrin1"] = $paramStrin1;
	}

	public function getParamStrin1(){
	  return $this->paramStrin1;
	}

}





        
 

