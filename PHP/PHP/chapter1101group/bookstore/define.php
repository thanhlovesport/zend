<?php
	
	// ====================== PATHS ===========================
	define ('DS'				, '/');
	define ('ROOT_PATH'			, dirname(__FILE__));						// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c gá»‘c
	define ('LIBRARY_PATH'		, ROOT_PATH . DS . 'libs' . DS);			// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c thÆ° viá»‡n
	define ('PUBLIC_PATH'		, ROOT_PATH . DS . 'public' . DS);			// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c public							
	define ('APPLICATION_PATH'	, ROOT_PATH . DS . 'application' . DS);		// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c application							
	define ('MODULE_PATH'		, APPLICATION_PATH . 'module' . DS);		// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c module							
	define ('TEMPLATE_PATH'		, PUBLIC_PATH . 'template' . DS);			// Ä�á»‹nh nghÄ©a Ä‘Æ°á»�ng dáº«n Ä‘áº¿n thÆ° má»¥c template							
	
	define	('ROOT_URL'			, DS . 'bookstore' . DS);
	define	('APPLICATION_URL'	, ROOT_URL . 'application' . DS);
	define	('PUBLIC_URL'		, ROOT_URL . 'public' . DS);
	define	('TEMPLATE_URL'		, PUBLIC_URL . 'template' . DS);
	
	
	define	('DEFAULT_MODULE'		, 'default');
	define	('DEFAULT_CONTROLLER'	, 'index');
	define	('DEFAULT_ACTION'		, 'index');

	// ====================== DATABASE ===========================
	define ('DB_HOST'			, 'localhost');
	define ('DB_USER'			, 'root');						
	define ('DB_PASS'			, '');						
	define ('DB_NAME'			, 'childrenworld');						
	define ('DB_TABLE'			, 'group');			

	// ====================== DATABASE TABLE===========================
	define ('TBL_GROUP'			, 'group');

