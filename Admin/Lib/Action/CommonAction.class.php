<?php
/**
 * 后台公共控制器，默认所有需要权限验证的控制器都要继承本类
 * 但登录控制器或者说是公共控制器不需要继承本类
 * 
 * @author wangxihe
 *
 */

class CommonAction extends Action {
	/**
	 * 构造方法，在后台公共控制器中起权限验证作用。
	 */
	public function __construct() {
		//1.进行登录验证
        if(!empty($_SESSION['admin_login_flag'])){            
            parent::__construct();           //若成功登录，执行一次父类的构造方法 ? 为什么要这样？
        }else{            
            $this->redirect('Login/index'); //若未成功登录，跳转到登录页面
            return false;    
        }
	}
	
}

// End Of CommonAction.class.php