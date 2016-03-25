
<!-- MODULE Block blockleoblogstabs -->
<div class="block blogs_block exclusive blockleoblogs container-padding">
	<h3 class="title_block">{l s='Latest Blogs' mod='blockleoblogs'}</h3>
	<div class="block_content">	
		{if !empty($blogs )}
			<div class="carousel slide row">
				<div id="{$mytab}">
				{$mblogs=array_chunk($blogs,$owl_rows)}
				{foreach from=$mblogs item=blogs name=mypLoop}
					<div class="item {if $smarty.foreach.mypLoop.first}active{/if}">
							{foreach from=$blogs item=blog name=blogs}
					 
								<div class="blog_block ajax_block_blog">
									<div class="blog_container clearfix">
										{if $blog.image && $config->get('blockleo_blogs_img',1)}
											<div class="blog-image">
												<a href="{$blog.link}" title="{$blog.title}">
													<img src="{$blog.preview_url}" alt="{$blog.title}" title="{$blog.title}" class="img-responsive" />
												</a>
											</div>
										{/if}
										{if $config->get('blockleo_blogs_cre',1)}
											<div class="blog-created">
												<div class="create-date">
													<span class="day">{strtotime($blog.date_add)|date_format:"%e"}</span>
													<span class="month">{strtotime($blog.date_add)|date_format:"%b"}</span>
												</div>
											</div>
										{/if}
										<div class="blog-info">
											{if $config->get('blockleo_blogs_title',1)}
												<h4><a href="{$blog.link}" title="{$blog.title}">{$blog.title|truncate:70:'...'|escape:'html':'UTF-8'}</a></h4>
											{/if}					
											<div class="blog-meta">								 
												{if $config->get('blockleo_blogs_cat',1)}
												<span class="blog-cat"> <span class="icon-list">{l s='In' module='blockleoblogs'}</span> 
													<a href="{$blog.category_link}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title}</a>
												</span>
												{/if}
												{if $config->get('blockleo_blogs_cout',1)} 
												<span class="blog-ctncomment">
													<span class="icon-comment"> {l s='Comment' mod='blockleoblogs'}:</span> {$blog.comment_count}
												</span>
												{/if}  
												
												{if $config->get('blockleo_blogs_aut',1)} 
												<span class="blog-author">
													<span class="icon-author"> {l s='Author' mod='blockleoblogs'}:</span> {$blog.author}
												</span>
												{/if}
												{if $config->get('blockleo_blogs_hits',1)} 
												<span class="blog-hits">
													<span class="icon-hits"> {l s='Hits' mod='blockleoblogs'}:</span> {$blog.hits}
												</span>	
												{/if}
											</div>	
											
											<div>
												{if $config->get('blockleo_blogs_des',1)} 
													{$blog.description|strip_tags:'UTF-8'|truncate:150:'...'}
												{/if}  
										 
											</div>
											
											<div class="blog-viewmore">
												<a  class="button btn btn-outline" href="{$blog.link}" title="{$blog.title|escape:'html':'UTF-8'}">{l s='Read more' mod='blockleoblogs'}</a>
											</div>
										</div>
									</div>
								</div> 
 
							{/foreach}
					</div>		
				{/foreach}
				</div>
			</div>
		{/if}
	</div>
		{if $config->get('blockleo_blogs_show',1)}
		<div><a class="pull-right" href="{$view_all_link}" title="{l s='View All' mod='blockleoblogs'}">{l s='View All' mod='blockleoblogs'}</a></div>
		{/if}	
</div>
<!-- /MODULE Block blockleoblogstabs -->
