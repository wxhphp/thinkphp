<?php
/**
 * 后台登录模块，提供登录、登出、用户验证等任务
 * @author wangxihe
 *
 */
class LoginAction extends Action {
	/**
	 * 后台登录入口
	 * @author wangxihe
	 */
	public function index() {
		$this->assign('test_name','这个是给的值');
		$this->display();
	}
	
	public function doLogin() {
		dump($_POST);
	}
	
}

//END OF LoginAction.class.php