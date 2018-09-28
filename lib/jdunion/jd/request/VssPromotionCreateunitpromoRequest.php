<?php
class VssPromotionCreateunitpromoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vss.promotion.createunitpromo";
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
                                                        		                                    	                        	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $channels;
    	                        
	public function setChannels($channels){
		$this->channels = $channels;
         $this->apiParas["channels"] = $channels;
	}

	public function getChannels(){
	  return $this->channels;
	}

                        	                   			private $promoName;
    	                                                            
	public function setPromoName($promoName){
		$this->promoName = $promoName;
         $this->apiParas["promo_name"] = $promoName;
	}

	public function getPromoName(){
	  return $this->promoName;
	}

                        	                   			private $promoAdviceWord;
    	                                                                        
	public function setPromoAdviceWord($promoAdviceWord){
		$this->promoAdviceWord = $promoAdviceWord;
         $this->apiParas["promo_advice_word"] = $promoAdviceWord;
	}

	public function getPromoAdviceWord(){
	  return $this->promoAdviceWord;
	}

                        	                   			private $actLinkName;
    	                                                                        
	public function setActLinkName($actLinkName){
		$this->actLinkName = $actLinkName;
         $this->apiParas["act_link_name"] = $actLinkName;
	}

	public function getActLinkName(){
	  return $this->actLinkName;
	}

                        	                   			private $actLinkUrl;
    	                                                                        
	public function setActLinkUrl($actLinkUrl){
		$this->actLinkUrl = $actLinkUrl;
         $this->apiParas["act_link_url"] = $actLinkUrl;
	}

	public function getActLinkUrl(){
	  return $this->actLinkUrl;
	}

                        	                   			private $startTime;
    	                                                            
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $numAvailable;
    	                                                            
	public function setNumAvailable($numAvailable){
		$this->numAvailable = $numAvailable;
         $this->apiParas["num_available"] = $numAvailable;
	}

	public function getNumAvailable(){
	  return $this->numAvailable;
	}

                        	                   			private $phoneLogo;
    	                                                            
	public function setPhoneLogo($phoneLogo){
		$this->phoneLogo = $phoneLogo;
         $this->apiParas["phone_logo"] = $phoneLogo;
	}

	public function getPhoneLogo(){
	  return $this->phoneLogo;
	}

                        	                   			private $discountAmount;
    	                                                            
	public function setDiscountAmount($discountAmount){
		$this->discountAmount = $discountAmount;
         $this->apiParas["discount_amount"] = $discountAmount;
	}

	public function getDiscountAmount(){
	  return $this->discountAmount;
	}

                        	                   			private $discountPrice;
    	                                                            
	public function setDiscountPrice($discountPrice){
		$this->discountPrice = $discountPrice;
         $this->apiParas["discount_price"] = $discountPrice;
	}

	public function getDiscountPrice(){
	  return $this->discountPrice;
	}

                        	                   			private $discountType;
    	                                                            
	public function setDiscountType($discountType){
		$this->discountType = $discountType;
         $this->apiParas["discount_type"] = $discountType;
	}

	public function getDiscountType(){
	  return $this->discountType;
	}

                        	                   			private $rebateFile;
    	                                                            
	public function setRebateFile($rebateFile){
		$this->rebateFile = $rebateFile;
         $this->apiParas["rebate_file"] = $rebateFile;
	}

	public function getRebateFile(){
	  return $this->rebateFile;
	}

                        	                   			private $rebateName;
    	                                                            
	public function setRebateName($rebateName){
		$this->rebateName = $rebateName;
         $this->apiParas["rebate_name"] = $rebateName;
	}

	public function getRebateName(){
	  return $this->rebateName;
	}

                        	                   			private $overlyingSuit;
    	                                                            
	public function setOverlyingSuit($overlyingSuit){
		$this->overlyingSuit = $overlyingSuit;
         $this->apiParas["overlying_suit"] = $overlyingSuit;
	}

	public function getOverlyingSuit(){
	  return $this->overlyingSuit;
	}

                            }





        
 

