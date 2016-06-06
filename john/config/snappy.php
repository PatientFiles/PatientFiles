<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary' => 'C:\Program Files (x86)\wkhtmltopdf\bin\wkhtmltopdf',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary' => base_path('vendor\h4cc\wkhtmltoimage-i386\bin\wkhtmltopdf-i368'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
