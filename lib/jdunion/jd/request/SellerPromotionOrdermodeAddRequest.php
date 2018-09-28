<?php
class SellerPromotionOrdermodeAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.ordermode.add";
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
                              public function setPromoId($promoId ){
                 $this->promoId=$promoId;
                 $this->apiParas["#promo_id"] = $#promoId;
              }

              public function getPromoId(){
              	return $this->promoId;
              }
                                                                                                                                                         private $favorMode;
                              public function setFavorMode($favorMode ){
                 $this->favorMode=$favorMode;
                 $this->apiParas["#favor_mode"] = $#favorMode;
              }

              public function getFavorMode(){
              	return $this->favorMode;
              }
                                                                                                                                                                                                                                                                                                                                              private $quota;
                              public function setQuota($quota ){
                 $this->quota=$quota;
                 $this->apiParas["quota"] = $quota;
              }

              public function getQuota(){
              	return $this->quota;
              }
                                                                                                                                                                                                                                                                                                                                              private $rate;
                              public function setRate($rate ){
                 $this->rate=$rate;
                 $this->apiParas["rate"] = $rate;
              }

              public function getRate(){
              	return $this->rate;
              }
                                                                                                                                                                                                                                                                                                                                              private $plus;
                              public function setPlus($plus ){
                 $this->plus=$plus;
                 $this->apiParas["plus"] = $plus;
              }

              public function getPlus(){
              	return $this->plus;
              }
                                                                                                                                                                                                                                                                                                                                              private $minus;
                              public function setMinus($minus ){
                 $this->minus=$minus;
                 $this->apiParas["minus"] = $minus;
              }

              public function getMinus(){
              	return $this->minus;
              }
                                                                                                                                                         private $link;
                              public function setLink($link ){
                 $this->link=$link;
                 $this->apiParas["#link"] = $#link;
              }

              public function getLink(){
              	return $this->link;
              }
                                                                                                                                        	}





        
 

