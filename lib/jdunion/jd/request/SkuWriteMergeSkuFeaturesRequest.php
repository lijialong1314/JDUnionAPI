<?php
class SkuWriteMergeSkuFeaturesRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.sku.write.mergeSkuFeatures";
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
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $featureKey;
                              public function setFeatureKey($featureKey ){
                 $this->featureKey=$featureKey;
                 $this->apiParas["featureKey"] = $featureKey;
              }

              public function getFeatureKey(){
              	return $this->featureKey;
              }
                                                                                                                                                                                                                                                                                                                                              private $featureValue;
                              public function setFeatureValue($featureValue ){
                 $this->featureValue=$featureValue;
                 $this->apiParas["featureValue"] = $featureValue;
              }

              public function getFeatureValue(){
              	return $this->featureValue;
              }
                                                                                                                }





        
 

