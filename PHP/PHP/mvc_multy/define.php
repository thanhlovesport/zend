<?php
	
	// ====================== PATHS ===========================
	define ('DS'				, DIRECTORY_SEPARATOR);
	define ('ROOT_PATH'			, dirname(__FILE__));						// Định nghĩa đường dẫn đến thư mục gốc
	define ('LIBRARY_PATH'		, ROOT_PATH . DS . 'libs' . DS);			// Định nghĩa đường dẫn đến thư mục thư viện
	define ('PUBLIC_PATH'		, ROOT_PATH . DS . 'public' . DS);			// Định nghĩa đường dẫn đến thư mục public							
	define ('APPLICATION_PATH'		, ROOT_PATH . DS . 'application' . DS);			// Định nghĩa đường dẫn đến thư mục application
	
	define	('ROOT_URL'			, DS . 'mvc-multy');
	define	('PUBLIC_URL'		, ROOT_URL . DS . 'public' . DS);
	
	define	('DEFAULT_MODULE'			, 'admin');
	define	('DEFAULT_CONTROLLER'		, 'index');
	define	('DEFAULT_ACTION'		, 'index');
	

	// ====================== DATABASE ===========================
	define ('DB_HOST'			, 'localhost');
	define ('DB_USER'			, 'root');						
	define ('DB_PASS'			, '');						
	define ('DB_NAME'			, 'manager_user');						
	define ('DB_TABLE'			, 'user');						
