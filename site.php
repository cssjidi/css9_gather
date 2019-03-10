<?php
/**
 * 便利店模块微站定义
 *
 * @author Gorden
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Css9_gatherModuleSite extends WeModuleSite {
	public function doWebHome(){
		global $_W,$_GPC;

		include $this->template('home');
	}
	public function doWebCollect(){
		global $_W,$_GPC;
		$json = array(
			'code'	=> 0,
			'uri'	=> $_GPC['uri']
		);
		if(isset($_GPC['uri'])){
			$result = ihttp_get($_GPC['uri']);
			$json['data'] = $result['content'];
			$json['code'] = 1;
		}
		die(json_encode($json));
	}
}