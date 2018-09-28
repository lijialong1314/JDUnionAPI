<?php
class LasSpareZerostockAssignlogPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.assignlog.push";
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

                        	                   			private $traInf;
    	                                                            
	public function setTraInf($traInf){
		$this->traInf = $traInf;
         $this->apiParas["tra_inf"] = $traInf;
	}

	public function getTraInf(){
	  return $this->traInf;
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





        
 

