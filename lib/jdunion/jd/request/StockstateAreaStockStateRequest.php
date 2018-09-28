<?php
class StockstateAreaStockStateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.stockstate.areaStockState";
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
                                    	                        	                   			private $ch;
    	                        
	public function setCh($ch){
		$this->ch = $ch;
         $this->apiParas["ch"] = $ch;
	}

	public function getCh(){
	  return $this->ch;
	}

                        	                        	                   			private $skuNum;
    	                        
	public function setSkuNum($skuNum){
		$this->skuNum = $skuNum;
         $this->apiParas["skuNum"] = $skuNum;
	}

	public function getSkuNum(){
	  return $this->skuNum;
	}

                        	                   			private $area;
    	                        
	public function setArea($area){
		$this->area = $area;
         $this->apiParas["area"] = $area;
	}

	public function getArea(){
	  return $this->area;
	}

                        	                   			private $coord;
    	                        
	public function setCoord($coord){
		$this->coord = $coord;
         $this->apiParas["coord"] = $coord;
	}

	public function getCoord(){
	  return $this->coord;
	}

}





        
 

