<?php
class SellerPromotionPropAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.prop.add";
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
                                                                                                                                                                                                                                                                                                                                              private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $usedWay;
                              public function setUsedWay($usedWay ){
                 $this->usedWay=$usedWay;
                 $this->apiParas["used_way"] = $usedWay;
              }

              public function getUsedWay(){
              	return $this->usedWay;
              }
                                                                                                                                        	}





        
 

