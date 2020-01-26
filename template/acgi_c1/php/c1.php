<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$tagallnum=80;
$tagnum=40;
$tagCbegin=60;
$tagCend=200;
$tag_query=C::t('common_tag')->fetch_all_by_status($_GET[status], '', $tagallnum, 0, 0, 'DESC');
shuffle($tag_query);

$r_postsnum=20;
$r_posts=DB::fetch_all("select * FROM ".DB::table('forum_post')."   WHERE `subject`=  '' ORDER BY `dateline` DESC LIMIT 0,$r_postsnum");

?>