<?php
class LasImHfsCollectPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.collect.push";
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

                        	                   			private $colNo;
    	                                                            
	public function setColNo($colNo){
		$this->colNo = $colNo;
         $this->apiParas["col_no"] = $colNo;
	}

	public function getColNo(){
	  return $this->colNo;
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

                        	                   			private $disPho;
    	                                                            
	public function setDisPho($disPho){
		$this->disPho = $disPho;
         $this->apiParas["dis_pho"] = $disPho;
	}

	public function getDisPho(){
	  return $this->disPho;
	}

                            }





        
 

