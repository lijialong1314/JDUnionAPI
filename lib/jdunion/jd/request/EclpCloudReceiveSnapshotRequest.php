<?php
class EclpCloudReceiveSnapshotRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.cloud.receiveSnapshot";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $ownerNo;
                              public function setOwnerNo($ownerNo ){
                 $this->ownerNo=$ownerNo;
                 $this->apiParas["ownerNo"] = $ownerNo;
              }

              public function getOwnerNo(){
              	return $this->ownerNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuNo;
                              public function setSkuNo($skuNo ){
                 $this->skuNo=$skuNo;
                 $this->apiParas["skuNo"] = $skuNo;
              }

              public function getSkuNo(){
              	return $this->skuNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $erpQty;
                              public function setErpQty($erpQty ){
                 $this->erpQty=$erpQty;
                 $this->apiParas["erpQty"] = $erpQty;
              }

              public function getErpQty(){
              	return $this->erpQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $erpWmsQty;
                              public function setErpWmsQty($erpWmsQty ){
                 $this->erpWmsQty=$erpWmsQty;
                 $this->apiParas["erpWmsQty"] = $erpWmsQty;
              }

              public function getErpWmsQty(){
              	return $this->erpWmsQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $erpNotlessQty;
                              public function setErpNotlessQty($erpNotlessQty ){
                 $this->erpNotlessQty=$erpNotlessQty;
                 $this->apiParas["erpNotlessQty"] = $erpNotlessQty;
              }

              public function getErpNotlessQty(){
              	return $this->erpNotlessQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $erpNotplusQty;
                              public function setErpNotplusQty($erpNotplusQty ){
                 $this->erpNotplusQty=$erpNotplusQty;
                 $this->apiParas["erpNotplusQty"] = $erpNotplusQty;
              }

              public function getErpNotplusQty(){
              	return $this->erpNotplusQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $isvStockSnapshotInList;
                              public function setIsvStockSnapshotInList($isvStockSnapshotInList ){
                 $this->isvStockSnapshotInList=$isvStockSnapshotInList;
                 $this->apiParas["isvStockSnapshotInList"] = $isvStockSnapshotInList;
              }

              public function getIsvStockSnapshotInList(){
              	return $this->isvStockSnapshotInList;
              }
                                                                                                                                                                                                                                                                                                                                              private $isvStockSnapshotOutList;
                              public function setIsvStockSnapshotOutList($isvStockSnapshotOutList ){
                 $this->isvStockSnapshotOutList=$isvStockSnapshotOutList;
                 $this->apiParas["isvStockSnapshotOutList"] = $isvStockSnapshotOutList;
              }

              public function getIsvStockSnapshotOutList(){
              	return $this->isvStockSnapshotOutList;
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





        
 

