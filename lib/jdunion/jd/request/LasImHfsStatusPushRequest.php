<?php
class LasImHfsStatusPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.status.push";
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
                                                        		                                    	                   			private $ordNo;
    	                                                            
	public function setOrdNo($ordNo){
		$this->ordNo = $ordNo;
         $this->apiParas["ord_no"] = $ordNo;
	}

	public function getOrdNo(){
	  return $this->ordNo;
	}

                        	                   			private $opeN;
    	                                                            
	public function setOpeN($opeN){
		$this->opeN = $opeN;
         $this->apiParas["ope_n"] = $opeN;
	}

	public function getOpeN(){
	  return $this->opeN;
	}

                        	                   			private $serProNo;
    	                                                                        
	public function setSerProNo($serProNo){
		$this->serProNo = $serProNo;
         $this->apiParas["ser_pro_no"] = $serProNo;
	}

	public function getSerProNo(){
	  return $this->serProNo;
	}

                        	                   			private $opeT;
    	                                                            
	public function setOpeT($opeT){
		$this->opeT = $opeT;
         $this->apiParas["ope_t"] = $opeT;
	}

	public function getOpeT(){
	  return $this->opeT;
	}

                        	                   			private $rem;
    	                        
	public function setRem($rem){
		$this->rem = $rem;
         $this->apiParas["rem"] = $rem;
	}

	public function getRem(){
	  return $this->rem;
	}

                        	                   			private $det;
    	                        
	public function setDet($det){
		$this->det = $det;
         $this->apiParas["det"] = $det;
	}

	public function getDet(){
	  return $this->det;
	}

                            }





        
 

