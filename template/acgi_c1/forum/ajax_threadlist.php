<?php echo '';exit;?>
<!--{eval require DISCUZ_ROOT.'./template/acgi_c1/php/language.'.currentlang().'.php';}-->
<!--{template common/header_ajax}-->
	<script type="text/javascript">
		if(!isUndefined(checkForumnew_handle)) {
			clearTimeout(checkForumnew_handle);
		}
		<!--{if $threadlist}-->
			if($('separatorline')) {
				var table = $('separatorline').parentNode;
			} else {
				var table = $('forum_' + $fid);
			}
			var newthread = [];
			<!--{eval $i = 0;}-->
			<!--{loop $threadlist $thread}-->
				{block icon}<a href="forum.php?mod=viewthread&tid=$thread[icontid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" title="{if $thread['displayorder'] == 1}{lang thread_type1} - {/if}{if $thread['displayorder'] == 2}{lang thread_type2} - {/if}{if $thread['displayorder'] == 3}{lang thread_type3} - {/if}{if $thread['displayorder'] == 4}{lang thread_type4} - {/if}{if $thread[folder] == 'lock'}{lang closed_thread} - {/if}{if $thread['special'] == 1}{lang thread_poll} - {/if}{if $thread['special'] == 2}{lang thread_trade} - {/if}{if $thread['special'] == 3}{lang thread_reward} - {/if}{if $thread['special'] == 4}{lang thread_activity} - {/if}{if $thread['special'] == 5}{lang thread_debate} - {/if}{if $thread[folder] == "new"}{lang have_newreplies} - {/if}{lang target_blank}" target="_blank"></a>{/block}
				newthread[{$i}] = {'tid':$thread[tid], 'thread': {'icn':{'className':'icn','val':'<div class="threadavr"><!--{if $thread[authorid] && $thread[author]}--><a href="home.php?mod=space&uid=$thread[authorid]" c="1"><!--{avatar($thread[authorid],small)}--></a><!--{else}--><img src="$_G[style][styleimgdir]/noavatar_middle.gif" title="$_G[setting][anonymoustext]" alt="$_G[setting][anonymoustext]" /><!--{/if}--></div>'}<!--{if $_G['forum']['ismoderator']}-->, 'o':{'className':'o','val':'<input type="checkbox" value="{$thread[tid]}" name="moderate[]" onclick="tmodclick(this)">'}<!--{/if}--> ,'common':{'className':'new fn','val':'<div class="acgiflists"><div class="acgiflistname">{if !$_G['setting']['forumdisplaythreadpreview']}<a class="tdpre y" href="javascript:void(0);" onclick="javascript:previewThread(\'$thread[tid]\', \'$thread[id]\');">{lang preview}</a>{/if}<!--{if $thread[folder] == 'lock'}--><img src="{IMGDIR}/folder_lock.gif" />&nbsp;<!--{elseif $thread['special'] == 1}--><img src="{IMGDIR}/pollsmall.gif" alt="{lang thread_poll}" />&nbsp;<!--{elseif $thread['special'] == 2}--><img src="{IMGDIR}/tradesmall.gif" alt="{lang thread_trade}" />&nbsp;<!--{elseif $thread['special'] == 3}--><img src="{IMGDIR}/rewardsmall.gif" alt="{lang thread_reward}" />&nbsp;<!--{elseif $thread['special'] == 4}--><img src="{IMGDIR}/activitysmall.gif" alt="{lang thread_activity}" />&nbsp;<!--{elseif $thread['special'] == 5}--><img src="{IMGDIR}/debatesmall.gif" alt="{lang thread_debate}" />&nbsp;<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}--><img src="{IMGDIR}/pin_$thread[displayorder].gif" alt="$_G[setting][threadsticky][3-$thread[displayorder]]" />&nbsp;<!--{else}--><img src="{IMGDIR}/folder_new.gif" />&nbsp;<!--{/if}-->$thread[threadurl]&nbsp;<span class="tps"><img src="$_G[style][styleimgdir]/folder_new.gif" /></span></div><div class="clear"></div><div class="acgiflistinfo"><div class="acgifby1">{$c1lang[tz_author]}:&nbsp;$thread[authorurl]&nbsp;&nbsp;&nbsp;<span>{$thread[dateline]}</span></div><b class="acgib">|</b><div class="acgifby2">{$c1lang[tz_lastreply]}:&nbsp;$thread[lastposterurl] &nbsp;&nbsp;&nbsp;<span class="xi1">{$thread[lastpost]}</span></div><div class="clear"></div></div></div><div class="acgifnums"><a href="forum.php?mod=viewthread&tid={$thread[tid]}">{$thread[replies]}</a>&nbsp;/&nbsp;<span>{$thread[views]}</span></div><div class="clear"></div>'}}};
				<!--{eval $i++;}-->
			<!--{/loop}-->
			removetbodyrow(table, 'forumnewshow');
			for(var i = 0; i < newthread.length; i++) {
				if(newthread[i].tid) {
					addtbodyrow(table, ['tbody', 'newthread'], ['normalthread_', 'normalthread_'], 'separatorline', newthread[i]);
				}
			}
			function readthread(tid) {
				if($("checknewthread_"+tid)) {
					$("checknewthread_"+tid).className = "";
				}
			}
		<!--{elseif !$threadlist && $_GET['uncheck'] == 2}-->
			showDialog('{lang none_newthread}', 'notice', null, null, 0, null, null, null, null, 3);
		<!--{/if}-->
		checkForumnew_handle = setTimeout(function () {checkForumnew('{$fid}', '{$_G[timestamp]}');}, checkForumtimeout);
	</script>
<!--{template common/footer_ajax}-->

