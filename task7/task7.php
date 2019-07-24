<?php
$_SERVER['DOCUMENT_ROOT'] = '/home/bitrix/www'; // --- $_SERVER['DOCUMENT_ROOT'] = Указывает  путь  до корня сайта, менять значение нельзя --- //

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$uid = CUser::GetByID(1)->Fetch()['ID']; // --- поле ['ID'] лишнее --- //
if ($uid->isAdmin()) {  // ---  у объекта  CDBResult нет метода  isAdmin()
    $status = ['12','13','14'];
    $el = new CIBlockElement;
    $st = explode($status);  // --- не указан параметр delimiter (Разделитель)
    $arFields = [
        'IBLOCK_ID' => 23,
        'PROPERTY_VALUES' => [
            'datetime' =>date('Y,d,m \ H:i:s',strtotime('-1 day'));  // ---  между элементами массива указывается "," а не ";"
    'status' => $st,
		]
	];
	echo $id = $el->Add($arFields); // --- Статический метод вызывается как не статическое  --- //
}
