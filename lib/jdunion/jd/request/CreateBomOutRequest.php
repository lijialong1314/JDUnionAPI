<?php
class CreateBomOutRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.createBomOut";
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
                                                        		                                    	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $materialNum;
                              public function setMaterialNum($materialNum ){
                 $this->materialNum=$materialNum;
                 $this->apiParas["materialNum"] = $materialNum;
              }

              public function getMaterialNum(){
              	return $this->materialNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $materialCode;
                              public function setMaterialCode($materialCode ){
                 $this->materialCode=$materialCode;
                 $this->apiParas["materialCode"] = $materialCode;
              }

              public function getMaterialCode(){
              	return $this->materialCode;
              }
                                                                                                                                            }





        
 

