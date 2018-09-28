<?php
class LasImHfsArrivalPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.arrival.push";
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

                        	                   			private $proNo;
    	                                                            
	public function setProNo($proNo){
		$this->proNo = $proNo;
         $this->apiParas["pro_no"] = $proNo;
	}

	public function getProNo(){
	  return $this->proNo;
	}

                        	                   			private $proN;
    	                                                            
	public function setProN($proN){
		$this->proN = $proN;
         $this->apiParas["pro_n"] = $proN;
	}

	public function getProN(){
	  return $this->proN;
	}

                        	                   			private $citNo;
    	                                                            
	public function setCitNo($citNo){
		$this->citNo = $citNo;
         $this->apiParas["cit_no"] = $citNo;
	}

	public function getCitNo(){
	  return $this->citNo;
	}

                        	                   			private $citN;
    	                                                            
	public function setCitN($citN){
		$this->citN = $citN;
         $this->apiParas["cit_n"] = $citN;
	}

	public function getCitN(){
	  return $this->citN;
	}

                        	                   			private $couNo;
    	                                                            
	public function setCouNo($couNo){
		$this->couNo = $couNo;
         $this->apiParas["cou_no"] = $couNo;
	}

	public function getCouNo(){
	  return $this->couNo;
	}

                        	                   			private $couN;
    	                                                            
	public function setCouN($couN){
		$this->couN = $couN;
         $this->apiParas["cou_n"] = $couN;
	}

	public function getCouN(){
	  return $this->couN;
	}

                        	                   			private $add;
    	                        
	public function setAdd($add){
		$this->add = $add;
         $this->apiParas["add"] = $add;
	}

	public function getAdd(){
	  return $this->add;
	}

                        	                   			private $poiN;
    	                                                            
	public function setPoiN($poiN){
		$this->poiN = $poiN;
         $this->apiParas["poi_n"] = $poiN;
	}

	public function getPoiN(){
	  return $this->poiN;
	}

                        	                   			private $conTel;
    	                                                            
	public function setConTel($conTel){
		$this->conTel = $conTel;
         $this->apiParas["con_tel"] = $conTel;
	}

	public function getConTel(){
	  return $this->conTel;
	}

                        	                   			private $conN;
    	                                                            
	public function setConN($conN){
		$this->conN = $conN;
         $this->apiParas["con_n"] = $conN;
	}

	public function getConN(){
	  return $this->conN;
	}

                        	                   			private $colCod;
    	                                                            
	public function setColCod($colCod){
		$this->colCod = $colCod;
         $this->apiParas["col_cod"] = $colCod;
	}

	public function getColCod(){
	  return $this->colCod;
	}

                        	                   			private $serNos;
    	                                                            
	public function setSerNos($serNos){
		$this->serNos = $serNos;
         $this->apiParas["ser_nos"] = $serNos;
	}

	public function getSerNos(){
	  return $this->serNos;
	}

                            }





        
 

