<?php

require_once __DIR__ . '/ui-service.php';

$ui = new UI_Service();

print $ui->render('pages/test-tmpl-inheritance', array(
    'title' => 'My Homepage',
    'sidebar' => array(
        $ui->render(
            'modules/test-module',
            array('title' => 'Hi From Data!')
        )
    )
));