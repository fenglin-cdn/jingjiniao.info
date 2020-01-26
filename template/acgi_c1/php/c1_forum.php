<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$fids='0,1';
$begin=($_G['page']-1)*10;$threadlists=array();require_once libfile('function/post');$threads=DB::query("SELECT t.*,p.message,p.pid,f.name FROM ".DB::table("forum_thread")." t LEFT JOIN ".DB::table("forum_post")." p on p.tid=t.tid LEFT JOIN ".DB::table("forum_forum")." f on f.fid=t.fid WHERE t.fid NOT in ($fids) and t.displayorder>=0 and p.first=1 group by t.tid ORDER BY t.dateline DESC LIMIT $begin , 10");
while ($smy=DB::fetch($threads)) {$threadlists[]=$smy;}
$alllines=DB::result_first("select count(*) from ".DB::table("forum_thread")." where fid NOT in ($fids) and displayorder>=0");
$pagenav=multi($alllines,10,$_G['page'],"forum.php#mn_news");

?>