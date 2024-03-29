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

namespace Bcs;
use Contao\DataContainer;
use Contao\ContentElement;

class AddNewsFieldTags extends \System
{
	public function replaceTags (string $insertTag)
	{
		// if this tag doesnt contain :: it doesn't have an id, so we can stop right here
		if (stristr($insertTag, "::") === FALSE) {
			return 'Your tag has no ID. Please add a news article ID or remove this tag from the template.';
		}

		// break our tag into an array
		$arrTag = explode("::", $insertTag);

		// lets make decisions based on the beginning of the tag
		switch($arrTag[0]) {
			case 'news_issue':
        $strIssue = 999;
        return "<span id='news_issue' class='news_issue id_" . $arrTag[1] . "'>, " . $strIssue . "</div>";
			break;
		}

		// return false so the next/other replace tag functions can run
		return false;
	}
}
