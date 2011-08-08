<?php
/*
Plugin Name: Amazon Item Shelf
Plugin URI: http://charity-japan.com/
Description: Amazonのアイテムを一覧表示するWordPressプラグイン
Version: 0.1
Author: djsas
Author URI: http://djlab.sakura.ne.jp/
*/

$dummyitems = array("4620320633");

class AmazonItemShelf{
	private $width;   //横に並べるアイテム数
	private $height;  //縦に並べるアイテム数
	
	function __construct(){
		$this->width = 5;
		$this->height = 4;
	}
	
	public function show(){
		print "OK!!";
	}
}

function getAmazonItemShelf(){
	$ais = new AmazonItemShelf();
	$ais->show();
}