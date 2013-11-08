<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'=>TRUE,
	'TMPL_ENGINE_TYPE' =>'SMARTY',
	'TMPL_ENGINE_CONFIG' => array(
//		'debugging'=>true,
		'template_dir' => TMPL_PATH,  //模板目录
		'compile_dir' =>TEMP_PATH ,//编译目录
		'cache_dir' =>CACHE_PATH,  //缓存目录
		'caching' => false,  //是否启用缓存
		'cache_lifetime' =>60*60*24,//缓存时间s
		'left_delimiter'=>'<{',
		'right_delimiter' =>'}>',
      ),
);
?>