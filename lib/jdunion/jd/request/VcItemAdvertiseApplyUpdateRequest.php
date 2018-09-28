<?php
class VcItemAdvertiseApplyUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.advertise.apply.update";
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
                                    	                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $adWord;
                              public function setAdWord($adWord ){
                 $this->adWord=$adWord;
                 $this->apiParas["ad_word"] = $adWord;
              }

              public function getAdWord(){
              	return $this->adWord;
              }
                                                                                                                                        	                   			private $applyId;
    	                                                            
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                        	}





        
 

