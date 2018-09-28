<?php
class PopVideoSkuRelativeQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.sku.relative.query";
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
                                                        		                                    	                   			private $videoId;
    	                                                            
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                        	                        	                   			private $productId;
    	                                                            
	public function setProductId($productId){
		$this->productId = $productId;
         $this->apiParas["product_id"] = $productId;
	}

	public function getProductId(){
	  return $this->productId;
	}

                        	                   			private $skuId;
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   	                    		private $statuses;
    	                        
	public function setStatuses($statuses){
		$this->statuses = $statuses;
         $this->apiParas["statuses"] = $statuses;
	}

	public function getStatuses(){
	  return $this->statuses;
	}

                        	                   			private $videoType;
    	                        
	public function setVideoType($videoType){
		$this->videoType = $videoType;
         $this->apiParas["videoType"] = $videoType;
	}

	public function getVideoType(){
	  return $this->videoType;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

