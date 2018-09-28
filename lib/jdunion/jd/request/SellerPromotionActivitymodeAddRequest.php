<?php
class SellerPromotionActivitymodeAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.activitymode.add";
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
                                                        		                                    	                   			private $promoId;
    	                                                            
	public function setPromoId($promoId){
		$this->promoId = $promoId;
         $this->apiParas["promo_id"] = $promoId;
	}

	public function getPromoId(){
	  return $this->promoId;
	}

                        	                   			private $numBound;
    	                                                            
	public function setNumBound($numBound){
		$this->numBound = $numBound;
         $this->apiParas["num_bound"] = $numBound;
	}

	public function getNumBound(){
	  return $this->numBound;
	}

                        	                   			private $freqBound;
    	                                                            
	public function setFreqBound($freqBound){
		$this->freqBound = $freqBound;
         $this->apiParas["freq_bound"] = $freqBound;
	}

	public function getFreqBound(){
	  return $this->freqBound;
	}

                        	                   			private $perMaxNum;
    	                                                                        
	public function setPerMaxNum($perMaxNum){
		$this->perMaxNum = $perMaxNum;
         $this->apiParas["per_max_num"] = $perMaxNum;
	}

	public function getPerMaxNum(){
	  return $this->perMaxNum;
	}

                        	                   			private $perMinNum;
    	                                                                        
	public function setPerMinNum($perMinNum){
		$this->perMinNum = $perMinNum;
         $this->apiParas["per_min_num"] = $perMinNum;
	}

	public function getPerMinNum(){
	  return $this->perMinNum;
	}

                                                    	}





        
 

