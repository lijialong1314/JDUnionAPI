<?php
class EclpStockUpdateGoodsStockConfigRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.updateGoodsStockConfig";
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
                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goodsNo"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                       private $sellerGoodsSign;
                              public function setSellerGoodsSign($sellerGoodsSign ){
                 $this->sellerGoodsSign=$sellerGoodsSign;
                 $this->apiParas["sellerGoodsSign"] = $sellerGoodsSign;
              }

              public function getSellerGoodsSign(){
              	return $this->sellerGoodsSign;
              }
                                                                                                                                                                                                                                                                                                                       private $shopNo;
                              public function setShopNo($shopNo ){
                 $this->shopNo=$shopNo;
                 $this->apiParas["shopNo"] = $shopNo;
              }

              public function getShopNo(){
              	return $this->shopNo;
              }
                                                                                                                                                                                                                                                                                                                       private $stockWay;
                              public function setStockWay($stockWay ){
                 $this->stockWay=$stockWay;
                 $this->apiParas["stockWay"] = $stockWay;
              }

              public function getStockWay(){
              	return $this->stockWay;
              }
                                                                                                                                                                                                                                                                                                                       private $percent;
                              public function setPercent($percent ){
                 $this->percent=$percent;
                 $this->apiParas["percent"] = $percent;
              }

              public function getPercent(){
              	return $this->percent;
              }
                                                                                                                                                                                                                                                                                                                       private $fixedNum;
                              public function setFixedNum($fixedNum ){
                 $this->fixedNum=$fixedNum;
                 $this->apiParas["fixedNum"] = $fixedNum;
              }

              public function getFixedNum(){
              	return $this->fixedNum;
              }
                                                                                                                                                                                                                                                                                                                       private $warehouseNo;
                              public function setWarehouseNo($warehouseNo ){
                 $this->warehouseNo=$warehouseNo;
                 $this->apiParas["warehouseNo"] = $warehouseNo;
              }

              public function getWarehouseNo(){
              	return $this->warehouseNo;
              }
                                                                                                                                        	}





        
 

