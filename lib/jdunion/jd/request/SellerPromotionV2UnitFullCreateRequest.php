<?php
class SellerPromotionV2UnitFullCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.v2.unit.full.create";
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
                                                        		                                    	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $port;
    	                        
	public function setPort($port){
		$this->port = $port;
         $this->apiParas["port"] = $port;
	}

	public function getPort(){
	  return $this->port;
	}

                        	                   			private $requestId;
    	                                                            
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                                                                        		                                    	                        	                   			private $promoName;
    	                                                            
	public function setPromoName($promoName){
		$this->promoName = $promoName;
         $this->apiParas["promo_name"] = $promoName;
	}

	public function getPromoName(){
	  return $this->promoName;
	}

                        	                   			private $beginTime;
    	                                                            
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                        	                   			private $slogan;
    	                        
	public function setSlogan($slogan){
		$this->slogan = $slogan;
         $this->apiParas["slogan"] = $slogan;
	}

	public function getSlogan(){
	  return $this->slogan;
	}

                        	                   			private $comment;
    	                        
	public function setComment($comment){
		$this->comment = $comment;
         $this->apiParas["comment"] = $comment;
	}

	public function getComment(){
	  return $this->comment;
	}

                        	                   			private $link;
    	                        
	public function setLink($link){
		$this->link = $link;
         $this->apiParas["link"] = $link;
	}

	public function getLink(){
	  return $this->link;
	}

                        	                        	                   			private $plusMember;
    	                        
	public function setPlusMember($plusMember){
		$this->plusMember = $plusMember;
         $this->apiParas["plusMember"] = $plusMember;
	}

	public function getPlusMember(){
	  return $this->plusMember;
	}

                        	                   			private $allowOthersOperate;
    	                                                                        
	public function setAllowOthersOperate($allowOthersOperate){
		$this->allowOthersOperate = $allowOthersOperate;
         $this->apiParas["allow_others_operate"] = $allowOthersOperate;
	}

	public function getAllowOthersOperate(){
	  return $this->allowOthersOperate;
	}

                        	                   			private $allowOthersCheck;
    	                                                                        
	public function setAllowOthersCheck($allowOthersCheck){
		$this->allowOthersCheck = $allowOthersCheck;
         $this->apiParas["allow_others_check"] = $allowOthersCheck;
	}

	public function getAllowOthersCheck(){
	  return $this->allowOthersCheck;
	}

                        	                   			private $allowOtherUserOperate;
    	                                                                                    
	public function setAllowOtherUserOperate($allowOtherUserOperate){
		$this->allowOtherUserOperate = $allowOtherUserOperate;
         $this->apiParas["allow_other_user_operate"] = $allowOtherUserOperate;
	}

	public function getAllowOtherUserOperate(){
	  return $this->allowOtherUserOperate;
	}

                        	                   			private $allowOtherUserCheck;
    	                                                                                    
	public function setAllowOtherUserCheck($allowOtherUserCheck){
		$this->allowOtherUserCheck = $allowOtherUserCheck;
         $this->apiParas["allow_other_user_check"] = $allowOtherUserCheck;
	}

	public function getAllowOtherUserCheck(){
	  return $this->allowOtherUserCheck;
	}

                        	                   			private $needManualCheck;
    	                                                                        
	public function setNeedManualCheck($needManualCheck){
		$this->needManualCheck = $needManualCheck;
         $this->apiParas["need_manual_check"] = $needManualCheck;
	}

	public function getNeedManualCheck(){
	  return $this->needManualCheck;
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

                        	                   			private $propType;
    	                                                            
	public function setPropType($propType){
		$this->propType = $propType;
         $this->apiParas["prop_type"] = $propType;
	}

	public function getPropType(){
	  return $this->propType;
	}

                        	                   			private $propNum;
    	                                                            
	public function setPropNum($propNum){
		$this->propNum = $propNum;
         $this->apiParas["prop_num"] = $propNum;
	}

	public function getPropNum(){
	  return $this->propNum;
	}

                        	                   			private $propUsedWay;
    	                                                                        
	public function setPropUsedWay($propUsedWay){
		$this->propUsedWay = $propUsedWay;
         $this->apiParas["prop_used_way"] = $propUsedWay;
	}

	public function getPropUsedWay(){
	  return $this->propUsedWay;
	}

                        	                   			private $couponValidDays;
    	                                                                        
	public function setCouponValidDays($couponValidDays){
		$this->couponValidDays = $couponValidDays;
         $this->apiParas["coupon_valid_days"] = $couponValidDays;
	}

	public function getCouponValidDays(){
	  return $this->couponValidDays;
	}

                        	                   			private $tokenUseNum;
    	                                                                        
	public function setTokenUseNum($tokenUseNum){
		$this->tokenUseNum = $tokenUseNum;
         $this->apiParas["token_use_num"] = $tokenUseNum;
	}

	public function getTokenUseNum(){
	  return $this->tokenUseNum;
	}

                        	                   			private $userPins;
    	                                                            
	public function setUserPins($userPins){
		$this->userPins = $userPins;
         $this->apiParas["user_pins"] = $userPins;
	}

	public function getUserPins(){
	  return $this->userPins;
	}

                        	                   			private $promoAreaType;
    	                                                                        
	public function setPromoAreaType($promoAreaType){
		$this->promoAreaType = $promoAreaType;
         $this->apiParas["promo_area_type"] = $promoAreaType;
	}

	public function getPromoAreaType(){
	  return $this->promoAreaType;
	}

                        	                   			private $promoAreas;
    	                                                            
	public function setPromoAreas($promoAreas){
		$this->promoAreas = $promoAreas;
         $this->apiParas["promo_areas"] = $promoAreas;
	}

	public function getPromoAreas(){
	  return $this->promoAreas;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $promoPrice;
                              public function setPromoPrice($promoPrice ){
                 $this->promoPrice=$promoPrice;
                 $this->apiParas["promo_price"] = $promoPrice;
              }

              public function getPromoPrice(){
              	return $this->promoPrice;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $limitNum;
                              public function setLimitNum($limitNum ){
                 $this->limitNum=$limitNum;
                 $this->apiParas["limit_num"] = $limitNum;
              }

              public function getLimitNum(){
              	return $this->limitNum;
              }
                                                                                                                }





        
 

