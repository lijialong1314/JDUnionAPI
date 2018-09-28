<?php
class EclpCoQueryPackageTagByWaybillNosRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.queryPackageTagByWaybillNos";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $lwbNos;
                              public function setLwbNos($lwbNos ){
                 $this->lwbNos=$lwbNos;
                 $this->apiParas["lwbNos"] = $lwbNos;
              }

              public function getLwbNos(){
              	return $this->lwbNos;
              }
                                                                                                                                        	}





        
 

