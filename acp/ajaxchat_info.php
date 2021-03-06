<?php

/**
*
* Ajax Chat extension for phpBB.
*
* @copyright (c) 2015 spaceace <http://www.livemembersonly.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace spaceace\ajaxchat\acp;

class ajaxchat_info
{

	function module()
	{
		return array(
			'filename'	=> '\spaceace\ajaxchat\acp\ajaxchat_module',
			'title'		=> 'ADMIN_AJAXCHAT',
			'modes'		=> array(
				'settings'	=> array(
					'title'		=> 'ADMIN_AJAXCHAT_SETTINGS',
					'auth'		=> 'ext_spaceace/ajaxchat && acl_a_board',
					'cat'		=> array('ADMIN_AJAXCHAT')
				),
			),
		);
	}
}
