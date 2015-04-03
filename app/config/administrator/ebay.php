<?php 

/**
 * Ebay Model Config for Administrator
 * For documentation on Model Config options visit: http://administrator.frozennode.com/docs/model-configuration
 */

return array(
'title' => 'eBay',
'single' => 'ebay',
'model' => 'Ebay',
'columns' => array(
	'id',
	'active' => array(
		'title' => 'Active',
		'type' => 'bool',
	),
	'title' => array(
		'title' => 'Title',
		'output' => '(:value)',
	),
	'image' => array(
		'title' => 'Image',
		'output' => '<img src="../../img/ebay/main-images/(:value)" border="0" width="200" alt="" class="work ebay-work" />',
	),
	'definition' => array(
		'title' => 'Definition', 
		'output' => '(:value)',
	),
	'screen1' => array(
		'title' => 'Screenshot 1',
		'output' => '<img src="../../img/ebay/screenshots-1/(:value)" border="0" width="200" alt="" class="screenshot ebay-screen screen1" />',
	),
	'trigger' => array(
		'title' => 'Link Trigger', 
		'output' => '(:value)',
	),
	// 'screen2' => array(
	// 	'title' => 'Screenshot 2',
	// 	'output' => '<img src="../../img/ebay/screenshots-2/(:value)" border="0" width="200" alt="" class="screenshot ebay-screen screen2" />',
	// ),
	// 'screen3' => array(
	// 	'title' => 'Screenshot 3',
	// 	'output' => '<img src="../../img/ebay/screenshots-3/(:value)" border="0" width="200" alt="" class="screenshot ebay-screen screen3" />',
	// ),
),
'edit_fields' => array(
	'active' => array(
		'title' => 'Active',
		'type' => 'bool',
	),
	'title' => array(
		'title' => 'Title',
		'output' => '(:value)',
	),
	'image' => array(
		'title' => 'Image',
		'type' => 'image',
		'naming' => 'keep', 
		'location' => public_path() . 'img/ebay/main-images',
		'size_limit' => 3,
	),
	'definition' => array(
		'title' => 'Definition', 
		'type' => 'textarea',
		'output' => '(:value)',
	),
	'screen1' => array(
		'title' => 'Screenshot 1',
		'type' => 'image',
		'naming' => 'keep', 
		'location' => public_path() . 'img/ebay/screenshots-1/',
		'size_limit' => 3,
	),
	'trigger' => array(
		'title' => 'Link Trigger', 
		'output' => '(:value)',
	),
	// 'screen2' => array(
	// 	'title' => 'Screenshot 2',
	// 	'type' => 'image',
	// 	'naming' => 'keep', 
	// 	'location' => public_path() . 'img/ebay/screenshots-2/',
	// 	'size_limit' => 3,
	// ),
	// 'screen3' => array(
	// 	'title' => 'Screenshot 3',
	// 	'type' => 'image',
	// 	'naming' => 'keep', 
	// 	'location' => public_path() . 'img/ebay/screenshots-3/',
	// 	'size_limit' => 3,
	// ),
),
'filters' => array(
	'id',
	'title' => array(
		'title' => 'Title',
	),
),
'rules' => array(
	'title' => 'required',
	'image' => 'required',
	'definition' => 'required',
	'screen1' => 'required',
),

);