<?php
class VcGetshippackagedetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.getshippackagedetail";
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
                                                        		                                    	                   			private $packageId;
    	                                                            
	public function setPackageId($packageId){
		$this->packageId = $packageId;
         $this->apiParas["package_id"] = $packageId;
	}

	public function getPackageId(){
	  return $this->packageId;
	}

                        	                            }





        
 

