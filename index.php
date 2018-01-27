<?php

    require_once './vendor/autoload.php';

    echo UserFactory::Create(1)->getName();