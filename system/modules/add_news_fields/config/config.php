<?php

/**
 * Bright Cloud Studio's Add News Fields
 *
 * Copyright (C) 2022-2023 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/add-news-fields
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

/* Hooks */
if (\Config::getInstance()->isComplete()) {
  $GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('CustomTags\AddNewsFieldsTags', 'onReplaceTag');
}
