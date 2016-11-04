<?php
namespace App\Http\Controllers\taobao;
use App\Http\Controllers\Controller;
use App\Common\yar\tests\htdocs\rest;

class TaoController extends Controller{

	public function index(){
		// 函数调用
		//RPC api地址
		$api = "http://localhost/yar-master/tests/htdocs/testapi.php";
		//商品链接
		$url = "https://item.taobao.com/item.htm?spm=a219r.lm5059.14.13.J18sK1&id=22960536045&ns=1&abbucket=18#detail";
		$db = tao_kou($api,$url);
		echo $db;

	}

	public function ceshi(){
		// 类调用
		//RPC api地址
		$api = "http://localhost/yar-master/tests/htdocs/testapi.php";
		//商品链接
		$url = "https://item.taobao.com/item.htm?spm=a219r.lm5059.14.13.J18sK1&id=22960536045&ns=1&abbucket=18#detail";

		echo rest::tao($api,$url);
	}

}