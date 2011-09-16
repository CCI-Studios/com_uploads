<?php
defined('KOOWA') or die;

echo KFactory::get('admin::com.uploads.dispatcher')->dispatch();