<?php
class LasImHfsAppointmentPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.appointment.push";
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

                        	                   			private $serDet;
    	                                                            
	public function setSerDet($serDet){
		$this->serDet = $serDet;
         $this->apiParas["ser_det"] = $serDet;
	}

	public function getSerDet(){
	  return $this->serDet;
	}

                            }





        
 

