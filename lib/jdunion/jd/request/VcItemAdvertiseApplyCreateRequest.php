<?php
class VcItemAdvertiseApplyCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.advertise.apply.create";
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
                                                                                                                                        	}





        
 

