<? get_header()?>
	<section class="single">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
					<article class="page__content">
						<h1 class="block_title">
							<?php 
								$category_name = get_the_category();
								echo $category_name[0]->name; 
							?>
						</h1>
						
	                	<?php if (have_posts()) : 
	                		while (have_posts()) : the_post(); ?>
				                <div class="single__text--box">		
				                	<h5><?= get_the_date("d-m-Y",get_the_ID()); ?></h5>
									<h3><?php the_title(); ?></h3>								
									<?php the_content(); ?>
									<div class="single--gallery">
										<div class="fotorama" data-width="100%" data-ratio="600/340" data-fit="cover" data-transition="slide" data-clicktransition="crossfade"  data-nav="thumbs" data-thumbheight="93" data-thumbwidth="160" data-loop="true">
											<?php
												$newsbg = get_post_meta(get_the_ID(), "newsbg", 1);
												foreach($newsbg as $item){
											?>
												<img src="<?php echo $item; ?>"  alt="" >

											<?php } ?>
										</div>
									</div>
									<?php
									    $category_id = $category_name[0]->cat_ID;									    
									    $category_link = get_category_link( $category_id );
									?>
									<div class="another_news">
										<a href="<?php echo $category_link; ?>">ДРУГИЕ НОВОСТИ</a>
									</div>
				                </div>
							<?php endwhile; ?>
						<?php endif; ?>
		                <div class="news__item--soc">
		                    <a href="http://www.facebook.com/sharer.php?u=<?= get_the_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
		                    <a href="http://vk.com/share.php?url=<?= get_the_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-vk"></i></a>
		                </div>
		            
						
					</article>
				</div>
			</div>
		</div>
	</section>
<? get_footer()?>