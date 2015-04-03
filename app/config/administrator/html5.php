<?php 

/**
 * HTML Model Config for Administrator
 * For documentation on Model Config options visit: http://administrator.frozennode.com/docs/model-configuration
 */

return array(
'title' => 'HTML5',
'single' => 'html5',
'model' => 'Html5',
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
		'output' => '<img src="../../img/html/(:value)" border="0" alt="" class="work html-work" />',
	),
	'definition' => array(
		'title' => 'Definition', 
		'output' => '(:value)',
	),
	'screen1' => array(
		'title' => 'Screenshot 1',
		'output' => '<img src="../../img/html/screenshots/(:value)" border="0" alt="" class="screenshot html-screen screen1" />',
	),
	'screen2' => array(
		'title' => 'Screenshot 2',
		'output' => '<img src="../../img/html/screenshots/(:value)" border="0" alt="" class="screenshot html-screen screen2" />',
	),
	'screen3' => array(
		'title' => 'Screenshot 3',
		'output' => '<img src="../../img/html/screenshots/(:value)" border="0" alt="" class="screenshot html-screen screen3" />',
	),
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
		'location' => public_path() . 'img/html/',
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
		'location' => public_path() . 'img/html/screenshots/',
		'size_limit' => 3,
	),
	'screen2' => array(
		'title' => 'Screenshot 2',
		'type' => 'image',
		'naming' => 'keep', 
		'location' => public_path() . 'img/html/screenshots/',
		'size_limit' => 3,
	),
	'screen3' => array(
		'title' => 'Screenshot 3',
		'type' => 'image',
		'naming' => 'keep', 
		'location' => public_path() . 'img/html/screenshots/',
		'size_limit' => 3,
	),
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