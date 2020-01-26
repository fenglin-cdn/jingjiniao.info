<?php echo ' ';exit;?>
<!--{template common/header}-->

<div id="pt" class="bm cl">
	<!--{if empty($gid) && $announcements}-->
	<div class="y">
		<div id="an">
			<dl class="cl">
				<dd>
					<div id="anc"><ul id="ancl">$announcements</ul></div>
				</dd>
				<dt>{lang announcements}:&nbsp;</dt>
			</dl>
		</div>
		<script type="text/javascript">announcement();</script>
	</div>
	<!--{/if}-->
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><em>&raquo;</em><a href="forum.php">{$_G[setting][navs][2][navname]}</a>$navigation
	</div>
	<div class="z"><!--{hook/index_status_extra}--></div>
</div>


<!--{if empty($gid)}-->
	<!--{ad/text/wp a_t}-->
<!--{/if}-->


<!--{if in_array($_G[groupid], array(1,2,3,9,10,11,12,13,14,15,26,27,28,29,30,31,32,34))}-->
	<style id="diy_style" type="text/css"></style>
<!--{if empty($gid)}-->
	<div class="c1fmtop cl">
		<!--[diy=c1fmtop_slide]--><div id="c1fmtop_slide" class="area"></div><!--[/diy]-->
		<div class="c1fmtop_tab cl">
			<div class="tab_btn">
				<ul>
					<li class="cur" style="margin-bottom:13px;">1</li><li>2</li>
				</ul>
			</div>
			<div class="tab_list">
				<div id="tab_sub" style="display:block;">
					<div class="sub_list">
						<div class="sub_list_tab cl">
							<ul>
								<li class="cur">$c1lang[tz_reply]</li><li>$c1lang[tz_book]</li><li>$c1lang[tz_new]</li><li>$c1lang[tz_hot]</li><li>$c1lang[tz_digest]</li><li>$c1lang[tz_jinghua]</li><li><a href="https://www.jingjiniao.info/plugin.php?id=comeing_guide&type=newpost">更多</a></li>
							</ul>
						</div>
						<div class="sub_list_main">
							<!--[diy=new_list]--><div id="new_list" class="area"></div><!--[/diy]-->
                            <!--[diy=book_list]--><div id="book_list" class="area"></div><!--[/diy]-->
							<!--[diy=reply_list]--><div id="reply_list" class="area"></div><!--[/diy]-->
							<!--[diy=hot_list]--><div id="hot_list" class="area"></div><!--[/diy]-->
                            
							<!--[diy=digest_list]--><div id="digest_list" class="area"></div><!--[/diy]-->  
                            <!--[diy=tz_jinghua]--><div id="tz_jinghua" class="area"></div><!--[/diy]-->
						</div>
					</div>
				</div>
				<!--[diy=tuwen_list]--><div id="tuwen_list" class="area"></div><!--[/diy]-->
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		jq(".acmi").slide({ titCell:".num ul" , mainCell:".acmipic" , effect:"leftLoop", vis:"auto", autoPlay:true, trigger:"click", delayTime:500, autoPage:true, interTime:5000});
		jq('.tab_btn ul li').each(function(s){
			jq(this).hover(function(){
				jq(this).addClass('cur').siblings().removeClass('cur');
				jq('.tab_list > div').eq(s).show(0).siblings().hide();
			})
		})
		jq('.sub_list_tab ul li').each(function(s){
			jq(this).click(function(){
				jq(this).addClass('cur').siblings().removeClass('cur');
				jq('.sub_list_main > div').eq(s).show(0).siblings().hide();
			})
		})
	</script>
	<div class="wp">
		<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
	</div>

<!--{/if}-->


<!--{/if}-->
<div id="ct" class="wp cl{if $_G['setting']['forumallowside']} ct2{/if}">
   <!--{if in_array($_G[groupid], array(1,2,3,9,10,11,12,13,14,15,26,27,28,29,30,31,32,34))}-->
	<!--{if empty($gid)}-->
		<div id="chart" class="bm bw0 cl">
			<p class="chart z">
				{$c1lang[index_posts]}: <em>$posts</em><span class="pipe">|</span>
				{lang index_threads}: <em>$threads</em><span class="pipe">|</span>
				{$c1lang[index_replies]}: <em>{echo $posts-$threads}</em><span class="pipe">|</span>
				{lang index_today}: <em>$todayposts</em><span class="pipe">帖|</span>
				{lang index_yesterday}: <em>$postdata[0]</em><span class="pipe">帖|</span>
				<!--{if in_array($_G[groupid], array(1,2,11,12,13,14,15,26,27,28,29,30,31,32,34))}-->
				{lang index_members}: <em>$_G['cache']['userstats']['totalmembers']</em>
				<!--{/if}-->
			</p>
			<div class="y">
				<!--{hook/index_nav_extra}-->
				<!--{if $_G['uid']}--><a href="forum.php?mod=guide&view=my" title="{lang my_posts}" class="xi2">{lang my_posts}</a><!--{/if}--><!--{if !empty($_G['setting']['search']['forum']['status'])}--><!--{if $_G['uid']}--><span class="pipe">|</span><!--{/if}--><a href="https://www.jingjiniao.info/plugin.php?id=comeing_guide&type=newpost" title="{lang show_newthreads}" class="xi2">{lang show_newthreads}</a><!--{/if}-->
			</div>
		</div>
	<!--{/if}-->
    <!--{/if}-->
	<!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->
	<div class="mn">
	
		<div class="mn_btn cl">
			<ul class="z">
				<li id="mn_catlist"><i></i><span>{$c1lang[catlist]}</span></li>
				<li id="mn_news"><i></i><span>{$c1lang[mn_news]}</span></li>
				<li id="mn_pics"><i></i><span>{$c1lang[mn_pics]}</span></li>
			</ul>
			<!--{if $_G['cache']['userstats']['newsetuser']}-->
				<div class="mn_reg z">
					<i></i>
					<span class="txt_s">{$c1lang[mn_reg]}: <a href="home.php?mod=space&username={echo rawurlencode($_G['cache']['userstats']['newsetuser'])}" target="_blank">$_G['cache']['userstats']['newsetuser']</a></span>
				</div>
			<!--{/if}-->
			<div class="mn_post y"onclick="showWindow('nav', 'forum.php?mod=misc&action=nav', 'get', 0)">
				<i></i>
				<span>{$c1lang[mn_post]}</span>
			</div>
		</div>
		<div class="mn_list">
			<div id="Lmn_catlist">
				<!--{if !empty($_G['setting']['grid']['showgrid'])}-->
					<!-- index four grid -->
					<div class="fl bm">
						<div class="bm bmw cl">
							<div id="category_grid" class="bm_c" >
								<table cellspacing="0" cellpadding="0"><tr>
								<!--{if !$_G['setting']['grid']['gridtype']}-->
									<td valign="top" class="category_l1">
										<div class="newimgbox">
											<h4><span class="tit_newimg"></span>{lang latest_images}</h4>
											<div class="module cl slidebox_grid" style="width:218px">
												<script type="text/javascript">
												var slideSpeed = 5000;
												var slideImgsize = [218,200];
												var slideBorderColor = '{$_G['style']['specialborder']}';
												var slideBgColor = '{$_G['style']['commonbg']}';
												var slideImgs = new Array();
												var slideImgLinks = new Array();
												var slideImgTexts = new Array();
												var slideSwitchColor = '{$_G['style']['tabletext']}';
												var slideSwitchbgColor = '{$_G['style']['commonbg']}';
												var slideSwitchHiColor = '{$_G['style']['specialborder']}';
												{eval $k = 1;}
												<!--{loop $grids['slide'] $stid $svalue}-->
													slideImgs[<!--{echo $k}-->] = '$svalue[image]';
													slideImgLinks[<!--{echo $k}-->] = '{$svalue[url]}';
													slideImgTexts[<!--{echo $k}-->] = '$svalue[subject]';
													{eval $k++;}
												<!--{/loop}-->
												</script>
												<script language="javascript" type="text/javascript" src="{$_G[setting][jspath]}forum_slide.js?{VERHASH}"></script>
											</div>
										</div>
									</td>
								<!--{/if}-->
								<td valign="top" class="category_l2">
									<div class="subjectbox">
										<h4><span class="tit_subject"></span>{lang collection_lastthread}</h4>
										<ul class="category_newlist">
											<!--{loop $grids['newthread'] $thread}-->
											<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
											<!--{/if}-->
											<li><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']} tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
											<!--{/loop}-->
										 </ul>
									 </div>
								</td>
								<td valign="top" class="category_l3">
									<div class="replaybox">
										<h4><span class="tit_replay"></span>{lang show_newthreads}</h4>
										<ul class="category_newlist">
											<!--{loop $grids['newreply'] $thread}-->
											<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
											<!--{/if}-->
											<li><a href="forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost#lastpost"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']}tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
											<!--{/loop}-->
										 </ul>
									 </div>
								</td>
								<td valign="top" class="category_l3">
									<div class="hottiebox">
										<h4><span class="tit_hottie"></span>{lang hot_thread}</h4>
										<ul class="category_newlist">
											<!--{loop $grids['hot'] $thread}-->
											<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
											<!--{/if}-->
											<li><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']} tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
											<!--{/loop}-->
										 </ul>
									 </div>
								</td>
								<!--{if $_G['setting']['grid']['gridtype']}-->
									<td valign="top" class="category_l4">
										<div class="goodtiebox">
											<h4><span class="tit_goodtie"></span>{lang post_digest_thread}</h4>
											<ul class="category_newlist">
												<!--{loop $grids['digest'] $thread}-->
													<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
														<!--{eval $thread[tid]=$thread[closed];}-->
													<!--{/if}-->
													<li><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']} tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
												<!--{/loop}-->
											 </ul>
										</div>
									</td>
								<!--{/if}-->
								</table>
							</div>
						</div>
					</div>
					<!-- index four grid end -->
				<!--{/if}-->

				<!--{hook/index_top}-->
				<!--{if !empty($_G['cache']['heats']['message'])}-->
				

					<div class="bm">
						<div class="bm_h cl">
							<h2>{lang hotthreads_forum}(半月刊)</h2>
						</div>
						<div class="bm_c cl">
							<div class="heat z">
								<!--{loop $_G['cache']['heats']['message'] $data}-->
									<dl class="xld">
										<dt><!--{if $_G['adminid'] == 1}--><a href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()" class="d">delete</a><!--{/if}-->
										<a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></dt>
										<dd>$data[message]</dd>
									</dl>
								<!--{/loop}-->
							</div>
							<ul class="xl xl1 heatl">
							<!--{loop $_G['cache']['heats']['subject'] $data}-->
								<li><!--{if $_G['adminid'] == 1}--><a href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()" class="d">delete</a><!--{/if}-->&middot; <a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></li>
							<!--{/loop}-->
							</ul>
						</div>
					</div>
	
					
				<!--{/if}-->

				<!--{hook/index_catlist_top}-->
				<div class="fl bm">
					<!--{if !empty($collectiondata['follows'])}-->

						<!--{eval $forumscount = count($collectiondata['follows']);}-->
						<!--{eval $forumcolumns = 4;}-->

						<!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->

						<div class="bm bmw {if $forumcolumns} flg{/if} cl">
							<div class="bm_h cl">
								<span class="o">
									<img id="category_-1_img" src="$_G['style'][styleimgdir]/common/$collapse['collapseimg_-1']" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_-1');" />
								</span>
								<h2><a href="forum.php?mod=collection&op=my"{lang my_order_collection}</a></h2>
							</div>
							<div id="category_-1" class="bm_c" style="{echo $collapse['category_-1']}">
								<table cellspacing="0" cellpadding="0" class="fl_tb">
									<tr>
									<!--{eval $ctorderid = 0;}-->
									<!--{loop $collectiondata['follows'] $key $colletion}-->
										<!--{if $ctorderid && ($ctorderid % $forumcolumns == 0)}-->
											</tr>
											<!--{if $ctorderid < $forumscount}-->
												<tr class="fl_row">
											<!--{/if}-->
										<!--{/if}-->
										<td class="fl_g"{if $forumcolwidth} width="$forumcolwidth"{/if}>
											<div class="fl_icn_g">
											<a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}" target="_blank"><img src="$_G['style'][styleimgdir]/forum{if $followcollections[$key]['lastvisit'] < $colletion['lastupdate']}_new{/if}.png" alt="$colletion[name]" style="box-shadow:none;" /></a>
											</div>
											<dl>
												<dt><a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}">$colletion[name]</a></dt>
												<dd><em>{lang forum_threads}: <!--{echo dnumber($colletion[threadnum])}--></em>, <em>{lang collection_commentnum}: <!--{echo dnumber($colletion[commentnum])}--></em></dd>
												<dd>
												<!--{if $colletion['lastpost']}-->
													<!--{if $forumcolumns < 3}-->
														<a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost" class="c1xi2 lastpost"><!--{echo cutstr($colletion[lastsubject], 30)}--></a> 
														<cite class="lastposter"><!--{if $colletion['lastposter']}-->$colletion['lastposter']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--> <!--{date($colletion[lastposttime])}--></cite>
													<!--{else}-->
														<a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost">{lang forum_lastpost}: <!--{date($colletion[lastposttime])}--></a>
													<!--{/if}-->
												<!--{else}-->
													{lang never}
												<!--{/if}-->
												</dd>
												<!--{hook/index_followcollection_extra $colletion[ctid]}-->
											</dl>
										</td>
										<!--{eval $ctorderid++;}-->

									<!--{/loop}-->
									<!--{if ($columnspad = $ctorderid % $forumcolumns) > 0}--><!--{echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);}--><!--{/if}-->
									</tr>
								</table>

							</div>
						</div>

					<!--{/if}-->

					<!--{if empty($gid) && !empty($forum_favlist)}-->
						<!--{eval $forumscount = count($forum_favlist);}-->
						<!--{eval $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;}-->
						<!--{if $forumcolumns >4}-->
							<!--{eval $forumcolumns = 4}-->
						<!--{/if}-->

						<!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->

						<!--{ad/intercat/bm a_c/-1}-->
					<!--{/if}-->

					<!--{loop $catlist $key $cat}-->
						<!--{hook/index_catlist $cat[fid]}-->
						<div class="bm bmw {if $cat['forumcolumns']} flg{/if} cl">
							<div class="bm_h cl">
								<span class="o">
									<img id="category_$cat[fid]_img" src="$_G['style'][styleimgdir]/common/$cat[collapseimg]" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_$cat[fid]');" />
								</span>
								<!--{if $cat['moderators']}--><span class="y">{lang forum_category_modedby}: $cat[moderators]</span><!--{/if}-->
								<!--{eval $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';}-->
								<h2><a href="{if !empty($caturl)}$caturl{else}forum.php?gid=$cat[fid]{/if}" class="catname" style="{if $cat[extra][namecolor]}color: {$cat[extra][namecolor]};{/if}">$cat[name]</a></h2>
							</div>
							<div id="category_$cat[fid]" class="bm_c" style="{echo $collapse['category_'.$cat[fid]]}">
								<table cellspacing="0" cellpadding="0" class="fl_tb">
									<tr>
									<!--{loop $cat[forums] $forumid}-->
									<!--{eval $forum=$forumlist[$forumid];}-->
									<!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
									<!--{if $cat['forumcolumns'] > 4}--><!--{eval $cat['forumcolumns'] = 4}--><!--{/if}-->
									<!--{if $cat['forumcolumns']}-->
										<!--{if $forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)}-->
											</tr>
											<!--{if $forum['orderid'] < $cat['forumscount']}-->
												<tr class="fl_row">
											<!--{/if}-->
										<!--{/if}-->
										<td class="fl_g" width="$cat[forumcolwidth]">
											<!--{if $cat['forumcolumns'] > 2}-->
												<div class="fl_icn_g ex">
													<h3>
														<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if} id="c1fmpostscount_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmpostscount_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});">$forum[name]</a>
														<!--{if $forum[todayposts] && !$forum['redirect']}-->
															<em class="count" title="{lang forum_todayposts}">+{$forum[todayposts]}</em>
														<!--{/if}-->
														<div id="c1fmpostscount_{$cat[fid]}_{$forum[fid]}_menu" class="postscount p_pop" style=" display: none;"  ctrlid="c1fmshow_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
															<p>{$c1lang[index_posts]}: {$forum[posts]}</p>
															<p>{$c1lang[index_threads]}: {$forum[threads]}</p>
															<p>{$c1lang[index_replies]}: {echo $forum[posts]-$forum[threads]}</p>
														</div>
														<em class="mod_c{if !$forum['moderators']} ex{/if}" id="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmmoderlist_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});" title="{lang forum_moderators}">&nbsp;</em>
														<div id="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}_menu" class="mod_pop p_pop" style=" display: none;"  ctrlid="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
															<!--{if $forum['moderators']}-->
																<!--{echo str_replace(array('',' c="1"'),'',$forum[moderators]);}-->
															<!--{else}-->
																{$c1lang[join_moderator]}
															<!--{/if}-->
														</div>
													</h3>
													<span class="desc"{if !empty($forum[description])} id="c1fmshow_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmshow_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});"{/if}>
														<!--{if $forum[icon]}-->
															$forum[icon]
														<!--{else}-->
															<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.png" alt="$forum[name]" style="box-shadow:none;" /></a>
														<!--{/if}-->
													</span>
													<!--{if !empty($forum[description])}-->
														<div id="c1fmshow_{$cat[fid]}_{$forum[fid]}_menu" class="des p_pop" style=" display: none;"  ctrlid="c1fmshow_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
															<!--{echo dnumber($forum[description])}-->
														</div>
													<!--{/if}-->
													<dd class="fl_info">
														<!--{if empty($forum[redirect])}-->
															{lang forum_threads}: <!--{echo dnumber($forum[threads])}-->, {lang forum_posts}: <!--{echo dnumber($forum[posts])}-->
														<!--{/if}-->
														<dd>
															<!--{if $forum['permission'] == 1}-->
																{lang private_forum}
															<!--{else}-->
																<!--{if $forum['redirect']}-->
																	<a href="$forumurl" class="c1xi2">{lang url_link}</a>
																<!--{elseif is_array($forum['lastpost'])}-->
																	<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="c1xi2 lastpost"><!--{echo cutstr($forum[lastpost][subject], 26)}--></a><br/>
																	<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="lastpost_t">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
																<!--{else}-->
																	{lang never}
																<!--{/if}-->
															<!--{/if}-->
														</dd>
														<!--{hook/index_forum_extra $forum[fid]}-->
													</dd>
												</div>
											<!--{else}-->
												<div class="fl_icn_g"{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}{if !empty($forum[description])} id="c1fmshow_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmshow_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});"{/if}>
													<!--{if $forum[icon]}-->
														$forum[icon]
													<!--{else}-->
														<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.png" alt="$forum[name]" style="box-shadow:none;" /></a>
													<!--{/if}-->
													<!--{if !empty($forum[description])}-->
														<div id="c1fmshow_{$cat[fid]}_{$forum[fid]}_menu" class="des p_pop" style=" display: none;"  ctrlid="c1fmshow_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
															<!--{echo dnumber($forum[description])}-->
														</div>
													<!--{/if}-->
												</div>
												<dl{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="margin-left: {$forum[extra][iconwidth]}px;"{/if}>
													<dt>
														<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if} id="c1fmpostscount_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmpostscount_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});">$forum[name]</a>
														<!--{if $forum[todayposts] && !$forum['redirect']}-->
															<em class="count" title="{lang forum_todayposts}">+{$forum[todayposts]}</em>
														<!--{/if}-->
														<div id="c1fmpostscount_{$cat[fid]}_{$forum[fid]}_menu" class="postscount p_pop" style=" display: none;"  ctrlid="c1fmshow_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
															<p>{$c1lang[index_posts]}: {$forum[posts]}</p>
															<p>{$c1lang[index_threads]}: {$forum[threads]}</p>
															<p>{$c1lang[index_replies]}: {echo $forum[posts]-$forum[threads]}</p>
														</div>
														<em class="mod_c{if !$forum['moderators']} ex{/if}" id="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmmoderlist_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});" title="{lang forum_moderators}">&nbsp;</em>
														<div id="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}_menu" class="mod_pop p_pop" style=" display: none;"  ctrlid="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
															<!--{if $forum['moderators']}-->
																<!--{echo str_replace(array('',' c="1"'),'',$forum[moderators]);}-->
															<!--{else}-->
																{$c1lang[join_moderator]}
															<!--{/if}-->
														</div>
													</dt>
													<!--{if empty($forum[redirect])}--><dd><em>{lang forum_threads}: <!--{echo dnumber($forum[threads])}--></em>, <em>{lang forum_posts}: <!--{echo dnumber($forum[posts])}--></em></dd><!--{/if}-->
													<dd>
													<!--{if $forum['permission'] == 1}-->
														{lang private_forum}
													<!--{else}-->
														<!--{if $forum['redirect']}-->
															<a href="$forumurl" class="c1xi2">{lang url_link}</a>
														<!--{elseif is_array($forum['lastpost'])}-->
															<!--{if $cat['forumcolumns'] < 3}-->
																<p><a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="c1xi2 lastpost"><!--{echo cutstr($forum[lastpost][subject], 36)}--></a></p>
																<cite class="lastposter"><!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--> $forum[lastpost][dateline]</cite>
															<!--{else}-->
																<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
															<!--{/if}-->
														<!--{else}-->
															{lang never}
														<!--{/if}-->
													<!--{/if}-->
													</dd>
													<!--{hook/index_forum_extra $forum[fid]}-->
												</dl>
											<!--{/if}-->
										</td>
									<!--{else}-->
										<td class="fl_icn" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}{if !empty($forum[description])} id="c1fmshow_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmshow_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});"{/if}>
											<!--{if $forum[icon]}-->
												$forum[icon]
											<!--{else}-->
												<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.png" alt="$forum[name]" style="box-shadow:none;" /></a>
											<!--{/if}-->
											<!--{if !empty($forum[description])}-->
												<div id="c1fmshow_{$cat[fid]}_{$forum[fid]}_menu" class="des p_pop" style=" display: none;"  ctrlid="c1fmshow_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
													<!--{echo dnumber($forum[description])}-->
												</div>
											<!--{/if}-->
										</td>
										<td>
											<h2>
												<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if} id="c1fmpostscount_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmpostscount_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});">$forum[name]</a>
												<!--{if $forum[todayposts] && !$forum['redirect']}-->
													<em class="count">{lang forum_todayposts}: {$forum[todayposts]}</em>
												<!--{/if}-->
												<div id="c1fmpostscount_{$cat[fid]}_{$forum[fid]}_menu" class="postscount p_pop" style=" display: none;"  ctrlid="c1fmshow_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
													<p>{$c1lang[index_posts]}: {$forum[posts]}</p>
													<p>{$c1lang[index_threads]}: {$forum[threads]}</p>
													<p>{$c1lang[index_replies]}: {echo $forum[posts]-$forum[threads]}</p>
												</div>
												<em class="mod_c{if !$forum['moderators']} ex{/if}" id="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}" onmouseover="showMenu({'ctrlid':'c1fmmoderlist_{$cat[fid]}_{$forum[fid]}','ctrlclass':'hover','duration':2});" title="{lang forum_moderators}">&nbsp;</em>
												<div id="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}_menu" class="mod_pop p_pop" style=" display: none;"  ctrlid="c1fmmoderlist_{$cat[fid]}_{$forum[fid]}" ctrlclass="hover">
													<!--{if $forum['moderators']}-->
														<!--{echo str_replace(array('',' c="1"'),'',$forum[moderators]);}-->
													<!--{else}-->
														{$c1lang[join_moderator]}
													<!--{/if}-->
												</div>
											</h2>
											<!--{if empty($forum[redirect])}--><dd><em>{lang forum_threads}: <!--{echo dnumber($forum[threads])}--></em>, <em>{lang forum_posts}: <!--{echo dnumber($forum[posts])}--></em></dd><!--{/if}-->
											<!--{if $forum['subforums']}--><dd class="subforum">{$c1lang[forum_subforums]}: $forum['subforums']</dd><!--{/if}-->
											
											<!--{if !empty($forum[description])}-->
												<dd class="description c1hide">{$c1lang[description]}: <!--{echo dnumber($forum[description])}--></dd>
											<!--{/if}-->
											<!--{hook/index_forum_extra $forum[fid]}-->
										</td>

										<td class="fl_i">
											<!--{if empty($forum[redirect])}--><span class="c1xi2"><!--{echo dnumber($forum[threads])}--></span><span class="xg1"> / <!--{echo dnumber($forum[posts])}--></span><!--{/if}-->
										</td>
										<td class="fl_by">
											<dd>
											<!--{if $forum['permission'] == 1}-->
												{lang private_forum}
											<!--{else}-->
												<!--{if $forum['redirect']}-->
													<a href="$forumurl" class="c1xi2">{lang url_link}</a>
												<!--{elseif is_array($forum['lastpost'])}-->
													<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="c1xi2 lastpost"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a>
													<cite class="lastposter"><!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--> $forum[lastpost][dateline]</cite>
												<!--{else}-->
													{lang never}
												<!--{/if}-->
											<!--{/if}-->
											</dd>
										</td>
									</tr>
									<tr class="fl_row">
									<!--{/if}-->
									<!--{/loop}-->
									$cat['endrows']
									</tr>
								</table>
							</div>
						</div>
						<!--{ad/intercat/bm a_c/$cat[fid]}-->
					<!--{/loop}-->

					<!--{if !empty($collectiondata['data'])}-->

						<!--{eval $forumscount = count($collectiondata['data']);}-->
						<!--{eval $forumcolumns = 4;}-->

						<!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->

						<div class="bm bmw {if $forumcolumns} flg{/if} cl">
							<div class="bm_h cl">
								<span class="o">
									<img id="category_-2_img" src="$_G['style'][styleimgdir]/common/$collapse['collapseimg_-2']" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_-2');" />
								</span>
								<h2><a href="forum.php?mod=collection"{lang recommend_collection}</a></h2>
							</div>
							<div id="category_-2" class="bm_c" style="{echo $collapse['category_-2']}">
								<table cellspacing="0" cellpadding="0" class="fl_tb">
									<tr>
									<!--{eval $ctorderid = 0;}-->
									<!--{loop $collectiondata['data'] $key $colletion}-->
										<!--{if $ctorderid && ($ctorderid % $forumcolumns == 0)}-->
											</tr>
											<!--{if $ctorderid < $forumscount}-->
												<tr class="fl_row">
											<!--{/if}-->
										<!--{/if}-->
										<td class="fl_g"{if $forumcolwidth} width="$forumcolwidth"{/if}>
											<div class="fl_icn_g">
											<a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}" target="_blank"><img src="$_G['style'][styleimgdir]/forum.png" alt="$colletion[name]" style="box-shadow:none;" /></a>
											</div>
											<dl>
												<dt><a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}">$colletion[name]</a></dt>
												<dd><em>{lang forum_threads}: <!--{echo dnumber($colletion[threadnum])}--></em>, <em>{lang collection_commentnum}: <!--{echo dnumber($colletion[commentnum])}--></em></dd>
												<dd>
												<!--{if $colletion['lastpost']}-->
													<!--{if $forumcolumns < 3}-->
														<a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost" class="c1xi2 lastpost"><!--{echo cutstr($colletion[lastsubject], 30)}--></a> 
														<cite class="lastposter"> <!--{if $colletion['lastposter']}-->$colletion['lastposter']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--> <!--{date($colletion[lastposttime])}--></cite>
													<!--{else}-->
														<a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost">{lang forum_lastpost}: <!--{date($colletion[lastposttime])}--></a>
													<!--{/if}-->
												<!--{else}-->
													{lang never}
												<!--{/if}-->
												</dd>
												<!--{hook/index_datacollection_extra $colletion[ctid]}-->
											</dl>
										</td>
										<!--{eval $ctorderid++;}-->

									<!--{/loop}-->
									<!--{if ($columnspad = $ctorderid % $forumcolumns) > 0}--><!--{echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);}--><!--{/if}-->
									</tr>
								</table>

							</div>
						</div>
					<!--{/if}-->
				</div>
			</div>
			<div id="Lmn_news">
				<div class="fl bm">
					<div class="bm bmw cl">
						<div class="bm_h cl">
							<span class="o">
								<img id="Lmn_newsin_img" src="$_G['style'][styleimgdir]/common/collapsed_no.gif"  title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('Lmn_newsin');">
							</span>
							<h2>{$c1lang[mn_news]}</h2>
						</div>
						<div id="Lmn_newsin" style="{echo $collapse['Lmn_newsin']}">
							<!--{eval include DISCUZ_ROOT.'./template/acgi_c1/php/c1_forum.php';}-->
							<!--{eval $news_count=0;}-->
							<!--{loop $threadlists $thread}-->
								<!--{eval $news_count+=1;}-->
								<div id="news_$news_count" class="news_thread">
									<div class="tit_box cl">
										<div class="tit z">
											<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
												<i class="top t{$thread[displayorder]}" title="{$c1lang[tz_icon_zdes]}({$_G[setting][threadsticky][3-$thread[displayorder]]})">{$c1lang[tz_icon_zd]}</i>
												<!--<img src="{IMGDIR}/pin_$thread[displayorder].gif" alt="$_G[setting][threadsticky][3-$thread[displayorder]]" />-->
											<!--{/if}-->
											<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
												<i class="digest d{$thread[digest]}" title="{$c1lang[tz_icon_jhes]}{$thread[digest]}">{$c1lang[tz_icon_jh]}</i>
												<!--<img src="{IMGDIR}/digest_$thread[digest].gif" align="absmiddle" alt="digest" title="{lang thread_digest} $thread[digest]" />-->
											<!--{/if}-->
											<!--{if $thread['attachment'] == 2}-->
												<i class="pici" title="{$c1lang[tz_icon_tpes]}">{$c1lang[tz_icon_tp]}</i>
												<!--<img src="{STATICURL}image/filetype/image_s.gif" alt="attach_img" title="{lang attach_img}" align="absmiddle" />-->
											<!--{elseif $thread['attachment'] == 1}-->
												<i class="file" title="{$c1lang[tz_icon_fjes]}">{$c1lang[tz_icon_fj]}</i>
												<!--<img src="{STATICURL}image/filetype/common.gif" alt="attachment" title="{lang attachment}" align="absmiddle" />-->
											<!--{/if}-->
											<a href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank">$thread[subject]</a>
											<!--{if $thread['mobile']}-->
												<img src="{IMGDIR}/mobile-attach-$thread['mobile'].png" alt="{lang post_mobile}" align="absmiddle" />
											<!--{/if}-->
										</div>
										<div class="tj y">
											<em class="vie">$thread[views]</em><em class="rep">$thread[replies]</em>
										</div>
									</div>
									<!--{if $thread['message']}-->
										<!--{eval}-->
											$thread['message']=messagecutstr($thread['message'],$summarylength,'');
											$thread['message']=dhtmlspecialchars($thread['message']);
										<!--{/eval}-->
										<div class="smy"><!--{echo cutstr($thread['message'],500)}--></div>
									<!--{/if}-->
									<!--{if $thread['attachment'] == 2}-->
										<!--{eval}-->
											$table='forum_attachment_'.substr($thread['tid'], -1);
											$query = DB::fetch_all("SELECT aid,tid,description,filename,remote FROM ".DB::table($table)." WHERE tid='$thread[tid]' AND isimage=1 ORDER BY `dateline` DESC LIMIT 0,12");
											$thread['pics']=count($query);
										<!--{/eval}-->
										<div class="pic" id="gallery_$thread[tid]" style="height:100px;overflow:hidden;">
											<!--{eval $i=0;}-->
											<!--{loop $query $pic}-->
												<!--{eval}-->
													$pics = DB::fetch_all('SELECT * FROM '.DB::table($table).' WHERE isimage=1 && aid = '.$pic['aid']);
													if ($pic['remote']){$attachment['url'] = $_G['setting']['ftp']['attachurl'].'forum';}else{$attachment['url'] = $_G['setting']['attachurl'].'forum';}
												<!--{/eval}-->
												<!--{loop $pics $v}-->
													<!--{if $i<5}-->
														<a id="aimg_$pic['aid']" aid="$pic['aid']" href="$attachment['url']/$pics[0][attachment]" target="_blank">
															<img originalels="{echo getforumimg($pic['aid'], 0, 154, 100);}" alt="$pic['filename']" style="max-height:100px" {if $pic['description']}title="{$pic['description']}"{/if} width="154" height="100"/>
														</a>
													<!--{/if}-->
												<!--{/loop}-->
												<!--{eval $i++}-->
											<!--{/loop}-->
											<script language="javascript">
												jq(document).ready(function() {
												jq("#gallery_$thread['tid'] img").fsgallery()
												})
											</script>
										</div>
									<!--{/if}-->
									<div class="sub">
										<em class="aor"><a href="home.php?mod=space&uid=$thread[authorid]" c="1" target="_blank">$thread[author]</a></em>
										<em class="date" title="{echo date('Y-m-d', $thread['dateline']);}"><!--{echo dgmdate($thread['dateline'], 'u', '9999', getglobal('setting/dateformat'))}--></em>
										<em class="cat"><a href="forum.php?mod=forumdisplay&fid=$thread[fid]" target="_blank">$thread[name]</a></em>
										<em class="tag">
											<!--{eval $mn_tags =  DB::fetch_all('SELECT * FROM '.DB::table('forum_post').' WHERE tid = '. $thread['tid'].' AND first = 1 LIMIT  0 ,'. 3 );}-->
											<!--{loop $mn_tags $v}-->
												<!--{eval  $tag = explode("	", $v['tags']);}-->
												<!--{eval  $tag1 = explode(",", $tag[0]);$tag2 = explode(",", $tag[1]);$tag3 = explode(",", $tag[2]);}-->
												<!--{if $tag1[1] || $tag2[1] || $tag3[1]}--><!--{/if}-->
												<!--{if $tag1[1]}--><a href="misc.php?mod=tag&id=$tag1[0]" target="_blank">$tag1[1]</a><!--{/if}-->
												<!--{if $tag1[1] && $tag2[1]}-->, <!--{/if}-->
												<!--{if $tag2[1]}--><a href="misc.php?mod=tag&id=$tag2[0]" target="_blank">$tag2[1]</a><!--{/if}-->
												<!--{if $tag2[1] && $tag3[1]}-->, <!--{/if}-->
												<!--{if $tag3[1]}--><a href="misc.php?mod=tag&id=$tag3[0]" target="_blank">$tag3[1]</a><!--{/if}-->
											<!--{/loop}-->
											<!--{if !$tag1[1] && !$tag2[1] && !$tag3[1]}-->{$c1lang[no_tag]}<!--{/if}-->
										</em>
										<em class="lastreply y">
											<!--{if $thread['lastpost'] == $thread['dateline']}-->
											{$c1lang[no_reply]}
											<!--{else}-->
												<a href="forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost#lastpost" target="_blank">$thread[lastposter] @ <!--{echo dgmdate($thread['lastpost'], 'u', '9999', getglobal('setting/dateformat'))}-->
												</a>
											<!--{/if}-->
										</em>
									</div>
								</div>
							<!--{/loop}-->
							<!--{if $alllines>$lines}--><!--<div class="nextpage"><a href="portal.php?acgi=$_GET['acgi']&page={echo ($_G['page']+1)}#threadsbody">下一页</a></div>--><!--{/if}-->
							<div class="news_pagenav cl">$pagenav</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Lmn_pics">
				<div class="fl bm">
					<div class="bm bmw cl">
						<div class="bm_h cl">
							<span class="o">
								<img id="Lmn_picsin_img" src="$_G['style'][styleimgdir]/common/collapsed_no.gif"  title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('Lmn_picsin');">
							</span>
							<h2>{$c1lang[mn_pics]}</h2>
						</div>
						<div id="Lmn_picsin" style="{echo $collapse['Lmn_picsin']}">
							<!--[diy=diy_mn_pics]--><div id="diy_mn_pics" class="area"></div><!--[/diy]-->
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			var lazy_news='news';
			var lazy_pics='pics';
			function lazyloadForPart(container,s) {
				jq(container).find('img').each(function () {
					var original = jq(this).attr('originalels');
					if (original) {
						//jq(this).hide().attr('original', original).removeAttr('originalels').fadeIn(300);
						jq(this).attr('original', original).removeAttr('originalels');
					}
				});
				if(s=='news' || s=="pics"){
					jq(function(){	jq("img[original]").lazyload({ placeholder:"{$_G['style'][styleimgdir]}/common/original.png" });});
					if(s=='news'){lazy_news='none';}
					else if(s=='pics'){lazy_pics='none';}
				}
			}
			function lazy_s(s){
				if (s == 'mn_news') {lazyloadForPart('#L'+s, lazy_news);}
				else if (s == 'mn_pics') {lazyloadForPart('#L'+s, lazy_pics);}
			}
			function Myck(s){
				setcookie('c1mnlistck', s, 60*60*24*365);
				jq('#'+s).addClass('cur').siblings().removeClass('cur');
				jq('#L'+s).show().addClass('c1ts_up').siblings().removeClass('c1ts_up').hide();
				//jq('#L'+s).show().siblings().hide();
			}
			jq('.mn_btn ul li').each(function(){
				jq(this).click(function(){
					Myck(this.id);
					lazy_s(this.id);
				})
			})
			var ck=getcookie('c1mnlistck'); 
			if(ck){
				Myck(ck);
				lazy_s(ck);
			}else{
				Myck('mn_catlist');
			}
		</script>

		<!--{hook/index_middle}-->
		<div class="wp mtn">
			<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
		</div>

		<!--{if empty($gid) && $_G['setting']['whosonlinestatus']}-->
			<div id="online" class="bm oll">
				<div class="bm_h">
				<!--{if $detailstatus}-->
					<span class="o"><a href="forum.php?showoldetails=no#online" title="{lang spread}"><img src="$_G['style'][styleimgdir]/common/collapsed_no.gif" alt="{lang spread}" /></a></span>
					<h3>
						<strong><a href="home.php?mod=space&do=friend&view=online&type=member">{lang onlinemember}</a></strong>
						<span class="xs1">- <strong>$onlinenum</strong> {lang onlines}
						- <strong>$membercount</strong> {lang index_members}(<strong>$invisiblecount</strong> {lang index_invisibles}),
						<strong>$guestcount</strong> {lang index_guests}
						- {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span>
					</h3>
				<!--{else}-->
					<!--{if empty($_G['setting']['sessionclose'])}-->
						<span class="o"><a href="forum.php?showoldetails=yes#online" title="{lang spread}"><img src="$_G['style'][styleimgdir]/common/collapsed_yes.gif" alt="{lang spread}" /></a></span>
					<!--{/if}-->
					<h3>
						<strong>
							<!--{if !empty($_G['setting']['whosonlinestatus'])}-->
								{lang onlinemember}
							<!--{else}-->
								<a href="home.php?mod=space&do=friend&view=online&type=member">{lang onlinemember}</a>
							<!--{/if}-->
						</strong>
						<span class="xs1">- {lang total} <strong>$onlinenum</strong> {lang onlines}
						<!--{if $membercount}-->- <strong>$membercount</strong> {lang index_members},<strong>$guestcount</strong> {lang index_guests}<!--{/if}-->
						- {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span>
					</h3>
				<!--{/if}-->
				</div>
               <!--[diy=fq_url]--><div id="fq_url" class="area"></div><!--[/diy]-->
              
			<!--{if $_G['setting']['whosonlinestatus'] && $detailstatus}-->
				<dl id="onlinelist" class="bm_c">
					<dt class="ptm pbm bbda">$_G[cache][onlinelist][legend]</dt>
					<!--{if $detailstatus}-->
						<dd class="ptm pbm">
						<ul class="cl">
						<!--{if $whosonline}-->
							<!--{loop $whosonline $key $online}-->
								<li title="{lang time}: $online[lastactivity]">
								<img src="{STATICURL}image/common/$online[icon]" alt="icon" />
								<!--{if $online['uid']}-->
									<a href="home.php?mod=space&uid=$online[uid]">$online[username]</a>
								<!--{else}-->
									$online[username]
								<!--{/if}-->
								</li>
							<!--{/loop}-->
						<!--{else}-->
							<li style="width: auto">{lang online_only_guests}</li>
						<!--{/if}-->
						</ul>
					</dd>
					<!--{/if}-->
				</dl>
			<!--{/if}-->
			</div>
		<!--{/if}-->

		<!--{if empty($gid) && ($_G['cache']['forumlinks'][0] || $_G['cache']['forumlinks'][1] || $_G['cache']['forumlinks'][2])}-->
		<div class="bm lk">
			<div id="category_lk" class="bm_c ptm">
				<!--{if $_G['cache']['forumlinks'][0]}-->
					<ul class="m mbn cl">$_G['cache']['forumlinks'][0]</ul>
				<!--{/if}-->
				<!--{if $_G['cache']['forumlinks'][1]}-->
					<div class="mbn cl">
						$_G['cache']['forumlinks'][1]
					</div>
				<!--{/if}-->
				<!--{if $_G['cache']['forumlinks'][2]}-->
					<ul class="x mbm cl">
						$_G['cache']['forumlinks'][2]
					</ul>
				<!--{/if}-->
			</div>
		</div>
		<!--{/if}-->

		<!--{hook/index_bottom}-->
	</div>

	<!--{eval include DISCUZ_ROOT.'./template/acgi_c1/php/c1.php';}-->
	<!--{if $_G['setting']['forumallowside']}-->
		<div id="sd" class="sd">
			<!--{hook/index_side_top}-->
			<div class="drag">
				<!--[diy=c1Fsd_slide]--><div id="c1Fsd_slide" class="area"></div><!--[/diy]-->
			</div>
			<!--{if in_array($_G[groupid], array(1,2,3,9,10,11,12,13,14,15,26,27,28,29,30,31,32,34))}-->
			<div class="c1sd_tag cl">
				<!--{eval $tagarray=array();}-->
				<!--{if $tag_query}-->
					<!--{eval $t_count=0;}--> 
					<!--{loop $tag_query $tagarray}-->
						<!--{if $t_count < $tagnum}-->
							<!--{eval}-->
								$f_tagcount = DB::result_first("SELECT COUNT(*) FROM ".DB::table('common_tagitem')." WHERE `tagid`=$tagarray[tagid]");
								$CR = rand($tagCbegin,$tagCend); $CG = rand($tagCbegin,$tagCend); $CB = rand($tagCbegin,$tagCend); $CT = rand(0.1,1.0);
							<!--{/eval}-->
							<a href="misc.php?mod=tag&id=$tagarray[tagid]" target="_blank" class="xi2" style="color:rgb($CR,$CG,$CB);border:1px solid rgb($CR,$CG,$CB);" title="{$f_tagcount}{$c1lang[tagcount]}">{$tagarray[tagname]}</a>
						<!--{/if}-->
						<!--{eval $t_count++;}-->
					<!--{/loop}-->
				<!--{else}-->
					<a href="javascript:;" class="notag">{$c1lang[notag]}</a>
				<!--{/if}-->
			</div>
			<div class="c1sd_tuwen">
				<h2>最近更新</h2>
				<div class="drag">
					<!--[diy=c1Fsd_tuwen]--><div id="c1Fsd_tuwen" class="area"></div><!--[/diy]-->
				</div>
			</div>       	          
			<!--{if empty($gid)}-->
			<div class="c1auto_reply">
				<h2>{$c1lang[lastreplies]}<em title="{$r_postsnum}{$c1lang[lastrepliescount]}">($r_postsnum)</em></h2>
				<div class="list bd">
					<span class="prev"></span>
					<span class="next"></span>
					<ul>
						<!--{eval $r_num=1;}--> 
						<!--{loop $r_posts $r_post}-->
							<li class="cl">
								<i class="num">$r_num</i>
								<a href="home.php?mod=space&uid=$r_post[authorid]" {target} class="avr"><img src="uc_server/avatar.php?uid=$r_post[authorid]&size=small"></a>
								<p><a href="home.php?mod=space&uid=$r_post[authorid]" {target}>$r_post[author]</a><span class="y"><!--{echo dgmdate($r_post['dateline'], 'u', '9999', getglobal('setting/dateformat'))}--></span></p>
								<!--{eval $summary = preg_replace ("/\[quote\].+发表于.+\[\/quote\]/is",'',$r_post[message]);$summary = preg_replace ("/\[[a-z][^\]]*\]|\[\/[a-z]+\]/i",'',preg_replace("/\[attach\]\d+\[\/attach\]/i",'',$summary))}-->
								<p class="smy txt_s"><a href="forum.php?mod=redirect&goto=findpost&tid=$r_post[tid]&pid={$r_post[pid]}" title="{$summary}">$summary</a></p>
								<!--{eval  $f_threads = DB::fetch_all("select * FROM ".DB::table('forum_thread')."  WHERE `tid`= $r_post[tid]");}-->

								<p class="from txt_s">{$c1lang[from]}: 
									<!--{loop $f_threads $f_thread}-->
										<a href="forum.php?mod=viewthread&tid=$f_thread[tid]&extra=page%3D1" title="$f_thread[subject]" {target}>$f_thread[subject]</a>
									<!--{/loop}-->
								</p>
							</li>
							<!--{eval $r_num++;}-->
						<!--{/loop}-->
					</ul>
				</div>
			</div><!--div.c1auto_reply-end-->
			<!--{/if}-->
            <!--{/if}-->          
			<div class="drag">
				<!--[diy=fmsd_diy3]--><div id="fmsd_diy3" class="area"></div><!--[/diy]-->
			</div>
			<div class="drag">
				<!--[diy=fmsd_diy4]--><div id="fmsd_diy4" class="area"></div><!--[/diy]-->
			</div>
			<div class="drag">
				<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
			</div>
			<!--{hook/index_side_bottom}-->

			<script type="text/javascript">
				jq(".c1sd_slide").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"fold",autoPlay:true,trigger:"click",interTime:3000});
				jq(".c1fmtop_slide").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"fold",autoPlay:true,trigger:"click",interTime:3000});
				jq(".c1sd_tuwen li").hover(function(){ jq(this).addClass("active").siblings().removeClass("active")},function(){ });
				jq(".c1auto_reply").slide({mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:4, interTime:3000});
			</script>
		</div>
	<!--{/if}-->
</div>
<!--{if $_G['group']['radminid'] == 1}-->
	<!--{eval helper_manyou::checkupdate();}-->
<!--{/if}-->
<!--{if empty($_G['setting']['disfixednv_forumindex']) }--><script>fixed_top_nv();</script><!--{/if}-->
<!--{template common/footer}-->
