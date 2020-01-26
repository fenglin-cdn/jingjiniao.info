<?php echo ' ';exit;?>
<!--{if $_G['uid']}-->
	<div class="c1extra z cl">
		<!--{hook/global_usernav_extra4}-->
		<!--{hook/global_usernav_extra1}-->
	</div>
	<div class="c1user z">
		<a href="home.php?mod=space&uid=$_G[uid]" target="_blank" class="c1user_myavr"><!--{avatar($_G[uid],small)}--></a>
		<div class="c1user_menu cl">
			<div class="c1user_i cl">
				<p class="name">
					<a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}"><strong>{$_G[member][username]}</strong><a href="home.php?mod=spacecp&ac=usergroup">($_G[group][grouptitle])</a>
				</p>
				<p class="sub z">
					<a href="home.php?mod=spacecp&ac=credit&showcredit=1" class="i_ext" title="{$_G[member][credits]}{lang credits}"><i></i>$_G[member][credits]</a>
					<!--{eval $i_moy = DB::result(DB::query("SELECT extcredits2 FROM ".DB::table('common_member_count')." WHERE uid = '$_G[uid]'"));}-->
					<a href="home.php?mod=spacecp&ac=credit&showcredit=1" class="i_moy" title="{$i_moy}{$_G[setting][extcredits][2][title]}"><i></i>$i_moy</a>
				</p>
				<p class="bind y">
					<a href="home.php?mod=spacecp&ac=profile&op=password" class="c1email_{$_G['member'][emailstatus]}" title="{if $_G['member'][emailstatus]}{$c1lang[email_0]}{else}{$c1lang[email_0]}{/if}"></a>
					<a href="connect.php?mod=config" {if $_G['setting']['connect']['allow'] && $_G[member][conisbind]}class="c1qq_1" title="{$c1lang[bindqq_1]}"{else}class="c1qq_0" title="{$c1lang[bindqq_0]}"{/if}></a>
				</p>
			</div>
			<!--{if $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != '999999999'}-->
				<!--{eval}-->
						$c1_upgradecredit = $_G['group']['groupcreditslower'] - $_G['member']['credits'];
						$c1_upgradeprogress = 100 - ceil($c1_upgradecredit / ($_G['group']['groupcreditslower'] - $_G['group']['groupcreditshigher']) * 100);
						$c1_upgradeprogress = max($c1_upgradeprogress, 2);
				<!--{/eval}-->
				<div class="c1user_lv cl">
					<div class="lvs z">
						Lv{$_G['group']['stars']}
					</div>
					<div class="jdt y" title="{$c1_upgradeprogress}%">
						<p style="width:{$c1_upgradeprogress}%;"></p>
					</div>
					<i class=" cl"></i>
					<div class="jfb">{$_G['member']['credits']}/{$_G['group']['groupcreditslower']}</div>
				</div>
			<!--{/if}-->
			<div class="line_x"></div>
			<div class="c1user_cp cl">
				<a href="forum.php?mod=guide&view=my"><i class="mypost"></i>{$c1lang[mypost]}</a>
				<a href="home.php?mod=space&do=favorite&view=me"><i class="myfavorite"></i>{$c1lang[myfavorite]}</a>
				<a href="home.php?mod=space&do=friend"><i class="my_friends"></i>{$c1lang[my_friends]}</a>
				<a href="home.php?mod=spacecp&ac=avatar"><i class="upload_avatar"></i>{$c1lang[modify_avatar]}</a>
				<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><a href="home.php?mod=task&item=doing" id="task_ntc" class="new"><i class="task_doing"></i>{lang task_doing}</a><!--{/if}-->
				<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
				<a href="portal.php?mod=portalcp"><i class="portal_manage"></i><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
				<!--{/if}-->
				<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}--><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank"><i class="forum_manager"></i>{lang forum_manager}</a><!--{/if}-->
				<!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}--><a href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank"><i class="cloudcp"></i>{lang cloudcp}</a><!--{/if}-->
				<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}--><a href="admin.php" target="_blank"><i class="admincp"></i>{lang admincp}</a><!--{/if}-->
				<!--{hook/global_usernav_extra3}-->
				<!--{hook/global_usernav_extra2}-->
				
			</div>
			<div class="c1user_btm cl">
				<a href="home.php?mod=spacecp" class="modify_data">{$c1lang[modify_data]}</a>
				<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" class="logout">{$c1lang[logout]}</a>
			</div>
		</div>
	</div>
	<div class="a z">
		<a href="home.php?mod=space&do=notice" id="myprompt" class="{if $_G[member][newprompt]} new{/if}" onmouseover="showMenu({'ctrlid':'myprompt'});">{lang pm_center}
			<!--{if $_G[member][newprompt]}--><em>$_G[member][newprompt]</em><!--{/if}-->
		</a>
		<span id="myprompt_check"></span>
	</div>

<!--{elseif !empty($_G['cookie']['loginuser'])}-->
        <a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a>
        <a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
        <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
<!--{elseif !$_G[connectguest]}-->
	<div class="c1logsub z cl">
		<a href="member.php?mod=logging&action=login" class="c1login" ><i></i>{lang login}</a>
		<a href="member.php?mod={$_G[setting][regname]}" class="c1sign"><i></i>{$c1lang[register]}</a>
		<a href="connect.php?mod=login&op=init&referer=index.php&statfrom=login_simple" target="_blank" class="c1qq"><i></i>{$c1lang[qqlogin]}</a>
		<a href="plugin.php?id=wechat:login" target="_blank" class="c1wx"><i></i>{$c1lang[wxlogin]}</a>
	</div>
<!--{else}-->
		<!--{hook/global_usernav_extra1}-->
		<a class="vwmy qq">{$_G[member][username]}</a>
		<a>$_G[group][grouptitle]</a>
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
		<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
<!--{/if}-->