<?php
class LasSpareZerostockAssigninfoPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.assigninfo.push";
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
                                                        		                                    	                   			private $afsNo;
    	                                                            
	public function setAfsNo($afsNo){
		$this->afsNo = $afsNo;
         $this->apiParas["afs_no"] = $afsNo;
	}

	public function getAfsNo(){
	  return $this->afsNo;
	}

                        	                   			private $ordNo;
    	                                                            
	public function setOrdNo($ordNo){
		$this->ordNo = $ordNo;
         $this->apiParas["ord_no"] = $ordNo;
	}

	public function getOrdNo(){
	  return $this->ordNo;
	}

                        	                   			private $afsSerTasNo;
    	                                                                                    
	public function setAfsSerTasNo($afsSerTasNo){
		$this->afsSerTasNo = $afsSerTasNo;
         $this->apiParas["afs_ser_tas_no"] = $afsSerTasNo;
	}

	public function getAfsSerTasNo(){
	  return $this->afsSerTasNo;
	}

                        	                   			private $sitNo;
    	                                                            
	public function setSitNo($sitNo){
		$this->sitNo = $sitNo;
         $this->apiParas["sit_no"] = $sitNo;
	}

	public function getSitNo(){
	  return $this->sitNo;
	}

                        	                   			private $sitN;
    	                                                            
	public function setSitN($sitN){
		$this->sitN = $sitN;
         $this->apiParas["sit_n"] = $sitN;
	}

	public function getSitN(){
	  return $this->sitN;
	}

                        	                   			private $sitTel;
    	                                                            
	public function setSitTel($sitTel){
		$this->sitTel = $sitTel;
         $this->apiParas["sit_tel"] = $sitTel;
	}

	public function getSitTel(){
	  return $this->sitTel;
	}

                        	                   			private $actT;
    	                                                            
	public function setActT($actT){
		$this->actT = $actT;
         $this->apiParas["act_t"] = $actT;
	}

	public function getActT(){
	  return $this->actT;
	}

                            }





        
 

