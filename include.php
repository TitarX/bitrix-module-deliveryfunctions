<?php

use Bitrix\Main\Loader;

// При правильном именовании, классы подключаются автоматически. Имена файлов классов должны быть в нижнем регистре.
Loader::registerAutoloadClasses(
    'perfcode.deliveryfunctions',
    array(
        'Perfcode\DeliveryFunctions\Events\MainEvents' => 'lib/events/MainEvents.php',
        'Perfcode\DeliveryFunctions\Helpers\MiscHelper' => 'lib/helpers/MiscHelper.php'
    )
);
