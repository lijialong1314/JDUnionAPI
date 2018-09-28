<?php
class ArealimitWriteUpdateWareAreaLimitsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.arealimit.write.updateWareAreaLimits";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $areaId;
                              public function setAreaId($areaId ){
                 $this->areaId=$areaId;
                 $this->apiParas["areaId"] = $areaId;
              }

              public function getAreaId(){
              	return $this->areaId;
              }
                                                                                                                                        	                   			private $limitType;
    	                        
	public function setLimitType($limitType){
		$this->limitType = $limitType;
         $this->apiParas["limitType"] = $limitType;
	}

	public function getLimitType(){
	  return $this->limitType;
	}

}





        
 

