<?php 
/**
 * Template name: Главная страница
 */
 ?>
 
 
<?php get_header(); ?>
 
 
 
 
 	<!-- portfolio div -->
	<div class="portfolio-div">
		<div class="portfolio">
			<div class="no-padding portfolio_container" style="position: relative; height: 1903px;">

                <?php if ( have_posts()) { while ( have_posts() ) { the_post(); ?>
                
                <div class="col-md-3 col-sm-6  fashion logo" style="position: absolute; left: 0px; top: 0px;">
					<a href="<?php the_permalink() ?>" class="portfolio_item">					    
                        <img src="<?php bloginfo("template_url"); ?>/assets/jpg/01.jpg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span><?php the_title() ?></span>
                                    <em>Цена : 50$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work --
                
                <?php } 
                }      ?>
				<!-- single work -->
				>

				<!-- single work -->
				<div class="col-md-3 col-sm-6 ads graphics" style="position: absolute; left: 475px; top: 0px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/03.jpeg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Жизнь до</span>
                                    <em>Цена : 62$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-6 col-sm-12 photography" style="position: absolute; left: 951px; top: 0px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/02.jpg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Город засыпает</span>
                                    <em>Цена : 120$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-3 col-sm-6 fashion ads" style="position: absolute; left: 0px; top: 475px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/04.jpg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Просыпается мафия</span>
                                    <em>Цена : 43$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-3 col-sm-6 graphics ads" style="position: absolute; left: 475px; top: 475px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/05.jpeg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Мой компас земной</span>
                                    <em>Цена : 57$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-6 col-sm-12 photography" style="position: absolute; left: 0px; top: 951px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/10.jpg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Нам мало времени</span>
                                    <em>Цена : 40$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-3 col-sm-6 graphics ads" style="position: absolute; left: 951px; top: 951px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/06.jpeg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Вместе</span>
                                    <em>Цена : 27$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-3 col-sm-6 graphics ads" style="position: absolute; left: 1427px; top: 951px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/07.jpeg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Вперед назад</span>
                                    <em>Цена : 51$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-3 col-sm-6 graphics ads" style="position: absolute; left: 951px; top: 1427px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/08.jpeg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Марс</span>
                                    <em>Цена : 56$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

				<!-- single work -->
				<div class="col-md-3 col-sm-6 graphics ads" style="position: absolute; left: 1427px; top: 1427px;">
					<a href="#" class="portfolio_item">
                        <img src="jpg/09.jpeg" alt="image" class="img-responsive">
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Кто рано встает?</span>
                                    <em>Цена : 61$</em>
                                </div>
                            </div>
                        </div>
                    </a>
				</div>
				<!-- end single work -->

			</div>
			<!-- end portfolio_container -->
		</div>
		<!-- portfolio -->
	</div>
	<!-- end portfolio div -->
 
 
 
 
 
 
 
 
<?php get_footer(); ?>