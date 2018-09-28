<?php
class SellerPromotionV2SkuListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.v2.sku.list";
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

                        	                                                                        		                                    	                   			private $promoId;
    	                                                            
	public function setPromoId($promoId){
		$this->promoId = $promoId;
         $this->apiParas["promo_id"] = $promoId;
	}

	public function getPromoId(){
	  return $this->promoId;
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
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $bindType;
    	                                                            
	public function setBindType($bindType){
		$this->bindType = $bindType;
         $this->apiParas["bind_type"] = $bindType;
	}

	public function getBindType(){
	  return $this->bindType;
	}

                        	                   			private $promoType;
    	                                                            
	public function setPromoType($promoType){
		$this->promoType = $promoType;
         $this->apiParas["promo_type"] = $promoType;
	}

	public function getPromoType(){
	  return $this->promoType;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSSize;
    	                                                            
	public function setPageSSize($pageSSize){
		$this->pageSSize = $pageSSize;
         $this->apiParas["pageS_size"] = $pageSSize;
	}

	public function getPageSSize(){
	  return $this->pageSSize;
	}

                            }





        
 

