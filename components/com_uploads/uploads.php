<?php
defined('KOOWA') or die;

KLoader::load('site::com.uploads.mappings');
echo KFactory::get('site::com.uploads.dispatcher')->dispatch();
