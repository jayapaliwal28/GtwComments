<?php
Router::parseExtensions('rss');

Router::connect('/comments', array('plugin' => 'gtw_comments', 'controller' => 'comments'));
Router::connect('/comments/*', array('plugin' => 'gtw_comments', 'controller' => 'comments'));