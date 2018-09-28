<?php
class LasImHfsUninstallPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.uninstall.push";
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

                        	                   			private $opeN;
    	                                                            
	public function setOpeN($opeN){
		$this->opeN = $opeN;
         $this->apiParas["ope_n"] = $opeN;
	}

	public function getOpeN(){
	  return $this->opeN;
	}

                        	                   			private $opeTel;
    	                                                            
	public function setOpeTel($opeTel){
		$this->opeTel = $opeTel;
         $this->apiParas["ope_tel"] = $opeTel;
	}

	public function getOpeTel(){
	  return $this->opeTel;
	}

                        	                   			private $uniDet;
    	                                                            
	public function setUniDet($uniDet){
		$this->uniDet = $uniDet;
         $this->apiParas["uni_det"] = $uniDet;
	}

	public function getUniDet(){
	  return $this->uniDet;
	}

                            }





        
 

