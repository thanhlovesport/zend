<?php
	
	// ====================== PATHS ===========================
	define ('DS'				, DIRECTORY_SEPARATOR);
	define ('ROOT_PATH'			, dirname(__FILE__));						// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c gá»‘c
	define ('LIBRARY_PATH'		, ROOT_PATH . DS . 'libs' . DS);			// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c thÆ° viá»‡n
	define ('CONTROLLER_PATH'	, ROOT_PATH . DS . 'controllers' . DS);		// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c controllers
	define ('MODEL_PATH'		, ROOT_PATH . DS . 'models' . DS);			// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c models
	define ('VIEW_PATH'			, ROOT_PATH . DS . 'views' . DS);			// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c views
	define ('PUBLIC_PATH'		, ROOT_PATH . DS . 'public' . DS);			// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c public							
	
	define	('ROOT_URL'			, DS . 'mvc');
	define	('PUBLIC_URL'		, ROOT_URL . DS . 'public' . DS);
	define	('VIEW_URL'			, ROOT_URL . DS . 'views' . DS);

	// ====================== DATABASE ===========================
	define ('DB_HOST'			, 'localhost');
	define ('DB_USER'			, 'root');						
	define ('DB_PASS'			, '');						
	define ('DB_NAME'			, 'manager_user');						
	define ('DB_TABLE'			, 'user');						
