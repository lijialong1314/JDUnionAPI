<?php
class SellerPromotionSkuAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.sku.add";
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
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $skuIds;
                              public function setSkuIds($skuIds ){
                 $this->skuIds=$skuIds;
                 $this->apiParas["sku_ids"] = $skuIds;
              }

              public function getSkuIds(){
              	return $this->skuIds;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $jdPrices;
                              public function setJdPrices($jdPrices ){
                 $this->jdPrices=$jdPrices;
                 $this->apiParas["jd_prices"] = $jdPrices;
              }

              public function getJdPrices(){
              	return $this->jdPrices;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $promoPrices;
                              public function setPromoPrices($promoPrices ){
                 $this->promoPrices=$promoPrices;
                 $this->apiParas["promo_prices"] = $promoPrices;
              }

              public function getPromoPrices(){
              	return $this->promoPrices;
              }
                                                                                                                                                                                                                                                                                                                                              private $seq;
                              public function setSeq($seq ){
                 $this->seq=$seq;
                 $this->apiParas["seq"] = $seq;
              }

              public function getSeq(){
              	return $this->seq;
              }
                                                                                                                                                                                                                                                                                                                                              private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $bindType;
                              public function setBindType($bindType ){
                 $this->bindType=$bindType;
                 $this->apiParas["bind_type"] = $bindType;
              }

              public function getBindType(){
              	return $this->bindType;
              }
                                                                                                                                        	}





        
 

