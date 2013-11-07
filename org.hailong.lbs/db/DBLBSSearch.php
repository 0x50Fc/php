<?php

/**
 * 本地搜索
 * @author zhanghailong
 *
 */
class DBLBSSearch extends DBEntity{
	
	/**
	 * 源ID
	 * @var long
	 */
	public $ssid;
	/**
	 * 来源ID
	 * @var int
	 */
	public $sid;
	/**
	 * 附近来源ID
	 * @var int
	 */
	public $near_sid;
	/**
	 * 附近来源纬度
	 * @var double
	 */
	public $near_latitude;
	/**
	 * 附近来源经度
	 * @var double
	 */
	public $near_longitude;
	/**
	 * 附近距离范围 米
	 * @var int
	 */
	public $distance;
	/**
	 * 创建时间
	 * @var int
	 */
	public $createTime;
	
	public static function primaryKeys(){
		return array("ssid");
	}
	
	public static function autoIncrmentFields(){
		return array("ssid");
	}
	
	public static function tableName(){
		return "hl_lbs_search";
	}
	
	public static function tableField($field){
		return $field;
	}
	
	public static function tableFieldType($field){		
		if($field == "ssid"){
			return "BIGINT NOT NULL";
		}
		if($field == "sid"){
			return "BIGINT NULL";
		}
		if($field == "near_sid"){
			return "BIGINT NULL";
		}
		if($field == "near_latitude"){
			return "DOUBLE NULL";
		}
		if($field == "near_longitude"){
			return "DOUBLE NULL";
		}
		if($field == "distance"){
			return "DOUBLE NULL";
		}
		if($field == "createTime"){
			return "INT NULL";
		}
		return "VARCHAR(45) NULL";
	}
	
	public static function indexs(){
		return array(
			"sid"=>array(array("field"=>"sid","order"=>"asc"))
			,"distance"=>array(array("field"=>"distance","order"=>"asc"))
		);
	}
}

?>