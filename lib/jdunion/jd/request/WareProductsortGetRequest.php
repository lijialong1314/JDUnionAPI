<?php
class WareProductsortGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.productsort.get";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $productSortIds;
                              public function setProductSortIds($productSortIds ){
                 $this->productSortIds=$productSortIds;
                 $this->apiParas["product_sort_ids"] = $productSortIds;
              }

              public function getProductSortIds(){
              	return $this->productSortIds;
              }
                                                                                                                }





        
 

