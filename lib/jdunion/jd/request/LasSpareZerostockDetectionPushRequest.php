<?php
class LasSpareZerostockDetectionPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.detection.push";
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

                        	                   			private $afsNo;
    	                                                            
	public function setAfsNo($afsNo){
		$this->afsNo = $afsNo;
         $this->apiParas["afs_no"] = $afsNo;
	}

	public function getAfsNo(){
	  return $this->afsNo;
	}

                        	                   			private $afsSerTasNo;
    	                                                                                    
	public function setAfsSerTasNo($afsSerTasNo){
		$this->afsSerTasNo = $afsSerTasNo;
         $this->apiParas["afs_ser_tas_no"] = $afsSerTasNo;
	}

	public function getAfsSerTasNo(){
	  return $this->afsSerTasNo;
	}

                        	                   			private $engNo;
    	                                                            
	public function setEngNo($engNo){
		$this->engNo = $engNo;
         $this->apiParas["eng_no"] = $engNo;
	}

	public function getEngNo(){
	  return $this->engNo;
	}

                        	                   			private $engN;
    	                                                            
	public function setEngN($engN){
		$this->engN = $engN;
         $this->apiParas["eng_n"] = $engN;
	}

	public function getEngN(){
	  return $this->engN;
	}

                        	                   			private $engMp;
    	                                                            
	public function setEngMp($engMp){
		$this->engMp = $engMp;
         $this->apiParas["eng_mp"] = $engMp;
	}

	public function getEngMp(){
	  return $this->engMp;
	}

                        	                   			private $gooSku;
    	                                                            
	public function setGooSku($gooSku){
		$this->gooSku = $gooSku;
         $this->apiParas["goo_sku"] = $gooSku;
	}

	public function getGooSku(){
	  return $this->gooSku;
	}

                        	                   			private $actT;
    	                                                            
	public function setActT($actT){
		$this->actT = $actT;
         $this->apiParas["act_t"] = $actT;
	}

	public function getActT(){
	  return $this->actT;
	}

                        	                   			private $gooN;
    	                                                            
	public function setGooN($gooN){
		$this->gooN = $gooN;
         $this->apiParas["goo_n"] = $gooN;
	}

	public function getGooN(){
	  return $this->gooN;
	}

                        	                   			private $detRs;
    	                                                            
	public function setDetRs($detRs){
		$this->detRs = $detRs;
         $this->apiParas["det_rs"] = $detRs;
	}

	public function getDetRs(){
	  return $this->detRs;
	}

                        	                   			private $isInv;
    	                                                            
	public function setIsInv($isInv){
		$this->isInv = $isInv;
         $this->apiParas["is_inv"] = $isInv;
	}

	public function getIsInv(){
	  return $this->isInv;
	}

                        	                   			private $gooSn;
    	                                                            
	public function setGooSn($gooSn){
		$this->gooSn = $gooSn;
         $this->apiParas["goo_sn"] = $gooSn;
	}

	public function getGooSn(){
	  return $this->gooSn;
	}

                        	                   			private $notRefRea;
    	                                                                        
	public function setNotRefRea($notRefRea){
		$this->notRefRea = $notRefRea;
         $this->apiParas["not_ref_rea"] = $notRefRea;
	}

	public function getNotRefRea(){
	  return $this->notRefRea;
	}

                        	                   			private $refRea;
    	                                                            
	public function setRefRea($refRea){
		$this->refRea = $refRea;
         $this->apiParas["ref_rea"] = $refRea;
	}

	public function getRefRea(){
	  return $this->refRea;
	}

                        	                   			private $deaTyp;
    	                                                            
	public function setDeaTyp($deaTyp){
		$this->deaTyp = $deaTyp;
         $this->apiParas["dea_typ"] = $deaTyp;
	}

	public function getDeaTyp(){
	  return $this->deaTyp;
	}

                        	                   			private $gooPacN;
    	                                                                        
	public function setGooPacN($gooPacN){
		$this->gooPacN = $gooPacN;
         $this->apiParas["goo_pac_n"] = $gooPacN;
	}

	public function getGooPacN(){
	  return $this->gooPacN;
	}

                        	                   			private $gooExtN;
    	                                                                        
	public function setGooExtN($gooExtN){
		$this->gooExtN = $gooExtN;
         $this->apiParas["goo_ext_n"] = $gooExtN;
	}

	public function getGooExtN(){
	  return $this->gooExtN;
	}

                        	                   			private $gooFunN;
    	                                                                        
	public function setGooFunN($gooFunN){
		$this->gooFunN = $gooFunN;
         $this->apiParas["goo_fun_n"] = $gooFunN;
	}

	public function getGooFunN(){
	  return $this->gooFunN;
	}

                        	                   			private $attDesc;
    	                                                            
	public function setAttDesc($attDesc){
		$this->attDesc = $attDesc;
         $this->apiParas["att_desc"] = $attDesc;
	}

	public function getAttDesc(){
	  return $this->attDesc;
	}

                        	                   			private $isBroScr;
    	                                                                        
	public function setIsBroScr($isBroScr){
		$this->isBroScr = $isBroScr;
         $this->apiParas["is_bro_scr"] = $isBroScr;
	}

	public function getIsBroScr(){
	  return $this->isBroScr;
	}

                            }





        
 

