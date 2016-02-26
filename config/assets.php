<?php

return array(
	
	/**
	* Determine the base of URL used in asses
	*/	
	'base_uri'     => URL::to('/'),

	/**
	* Determines the folder of cache items for concatenator and image resize
	*/
	'compiled'     => '_compiled',
	
	/*
	* Determine the realpath for work with concatenations and resize
	*/
	'path'         => public_path(),
	
	/**
	* Create a alias (or namespaces) for paths
	*/
	'path_aliases' => array(
		/*'admin'  => '{folder}/admin',*/
		/* 'css.admin' => 'css/dist/complex_directory/admin'*/
	),
	
	/**
	* Determimes the version added in assets, to skip browser cache
	* Can be used a closure or string
	*/
	'version'  => null
);