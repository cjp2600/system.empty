<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();

$arComponentDescription = array(
        'NAME' => GetMessage('COMPONENT_NAME'),
        'DESCRIPTION' => GetMessage('COMPONENT_DESCRIPTION'),
	'ICON' => '/images/icon.gif',
        'CACHE_PATH' => 'Y',
        'SORT' => 500,
        'PATH' => array(
                'ID' => '8il',
                'NAME' => GetMessage('COMPONENTS'),
                'CHILD' => array(
                        'SORT' => 10,
                        'ID' => 'system',
                        'NAME' => GetMessage('COMPONENTS_GROUP_NAME'),
		),
	),
);

