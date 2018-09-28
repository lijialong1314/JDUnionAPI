<?php
class DspAdunitPriceUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adunit.price.update";
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
                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $inFee;
    	                        
	public function setInFee($inFee){
		$this->inFee = $inFee;
         $this->apiParas["inFee"] = $inFee;
	}

	public function getInFee(){
	  return $this->inFee;
	}

                        	                   			private $outFee;
    	                        
	public function setOutFee($outFee){
		$this->outFee = $outFee;
         $this->apiParas["outFee"] = $outFee;
	}

	public function getOutFee(){
	  return $this->outFee;
	}

                        	                   			private $adxFee;
    	                        
	public function setAdxFee($adxFee){
		$this->adxFee = $adxFee;
         $this->apiParas["adxFee"] = $adxFee;
	}

	public function getAdxFee(){
	  return $this->adxFee;
	}

                        	                        	}





        
 

