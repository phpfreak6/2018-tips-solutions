<?php get_header(); ?>

        <?php
        $sld_posts = get_posts(array('posts_per_page' => 10, 'post_type' => 'slide', 'orderby' => 'ID', 'order' => 'ASC'));
        if (count($sld_posts)) : ?>
        <div class="section_slider">
            <ul class="slider bxslider">

            <?php foreach ($sld_posts as $post) : setup_postdata($post); ?>

                <?php if (has_post_thumbnail()) : ?>

                <li class="slider-item">
                    <?php the_post_thumbnail('slide'); ?>
                    <div class="slider-item-content">
                        <div class="slider-item-title"><?php the_title(); ?></div>
                        <div class="slider-item-descr">
                            <?php the_content(); ?>
                        </div>
                        <?php if (!empty(get_field('slide_link'))) : ?>
                        <a class="button slider-item-more" href="<?php the_field('slide_link'); ?>"><?php _e('Learn More', 'fpc'); ?></a>
                        <?php endif; ?>
                    </div>
                </li>

                <?php endif; ?>

            <?php endforeach; wp_reset_postdata(); ?>

            </ul>
        </div><!-- /.section_slider -->
        <?php endif; ?>

        <div class="container-fluid section_about">
            <article class="container section-inner_about">
                <h2 class="about-title"><?php _e('About Us', 'fpc'); ?></h2>
                <div class="about-descr">
                    <p>FPC of COLUMBIA, South Carolina works nationwide with Fortune 500 manufacturing organizations, offering in-depth specialization in each functional discipline found within a typical manufacturing organization. Our office in Columbia, SC opened in 1980 and offers specialized assistance for better, faster and more targeted identification of high potential candidates.  Proficient with Manager, Director and VP level assignments, both retained and contingency.</p>
                </div>
                <a class="button about-more" href="/about/"><?php _e('Learn More', 'fpc'); ?></a>
            </article>
        </div><!-- /.section_about -->

        <div class="container-fluid section_promo">
            <article class="container seciton-inner_promo">
                <h2 class="promo-title">Jobs</h2>
                <div class="promo-descr"><p>View all Active Jobs for FPC Columbia</p></div>
		<a class="button button-alt2" href="/jobs/">View Jobs</a>
            </article>
        </div><!-- /.section_promo -->

        <?php
        $team_posts = get_posts(array('posts_per_page' => 6, 'post_type' => 'team', 'orderby' => 'ID', 'order' => 'ASC'));
        if (count($team_posts)) : ?>
        <div class="container-fluid section_team">
            <div class="container section-inner_team">
                <h2 class="team-title"><?php _e('Meet the Team', 'fpc'); ?></h2>
                <div class="team-descr">
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                </div>
                <div class="row row_team">

                <?php foreach ($team_posts as $post) : setup_postdata($post); ?>

                    <article class="col-md-4 col_team-item">

                    <?php if (!empty(get_field('team_thumbnail'))) : ?>
                        <div class="team-item-photo"><img src="<?php the_field('team_thumbnail'); ?>" alt="<?php the_title_attribute(); ?>"></div>
                    <?php endif; ?>
                        <div class="team-item-content">
                            <h3 class="team-item-title"><?php the_title(); ?></h3>
                            <div class="team-item-post"><?php the_field('team_post'); ?></div>
                    <?php if (has_excerpt()) : ?>
                            <div class="team-item-descr"><?php the_excerpt(); ?></div>
                    <?php endif; ?>
                        </div>

                    </article>

                <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <a class="button button-alt team-more" href="/about/meet-the-team/"><?php _e('View All', 'fpc'); ?></a>
            </div>
        </div><!-- /.section_team -->
        <?php endif; ?>

        <?php
        $tstm_posts = get_posts(array('posts_per_page' => 4, 'post_type' => 'testimonial'));
        if (count($tstm_posts)) : ?>

        <div class="container-fluid section_testimonials">
            <div class="container section-inner_testimonials">
                <h2 class="testimonials-title">Testimonials</h2>
                <div class="testimonials">

                <?php foreach ($tstm_posts as $post) : setup_postdata($post); ?>

                    <article class="testimonials-item">

                        <div class="testimonials-item-descr">
                            <?php the_content(); ?>
                        </div>
                        <h3 class="testimonials-item-title"><?php the_title(); ?></h3>

                    </article>

                <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <a class="button button-alt1 team-more" href="/about/testimonials/"><?php _e('View All', 'fpc'); ?></a>
            </div>
        </div><!-- /.section_testimonials -->
        <?php endif; ?>

        <div class="container-fluid section_employers">
            <article class="container section-inner_employers">
                <h2 class="employers-title">Employers</h2>
                <div class="employers-descr"><p> Your FPC of Columbia recruiter understands your situation and your needs</p></div>
                <a class="button button-alt2 employers-more" href="/employers/">Find Employers</a>
            </article>
        </div><!-- /.section_employers -->

        <div class="container-fluid section_candidates">
            <article class="container section-inner_candidates">
                <div class="row row_candidates">
                    <div class="col-md-3 col_candidates-image"><img src="<?php echo get_template_directory_uri() . '/img/b-candidates.jpg'; ?>" alt="Candidates"></div>
                    <div class="col-md-9 col_candidates-content">
                        <h2 class="candidates-title">Candidates</h2>
                        <div class="candidates-descr">
                            <p>Our highly trained and knowledgeable staff of recruiters has a combined experience of 115+ years in executive search and recruitment.</p>
                        </div>
                        <a class="button candidates-more" href="/jobs/">View Jobs</a>
                        <a class="button candidates-more" href="/contact/">Contact Us</a>
                    </div>
                </div>
            </article>
        </div><!-- /.section_candidates -->

        <div class="container-fluid section_contacts">
            <article class="container section-inner_contacts">
                <h2 class="contacts-title"><?php _e('Contact Us', 'fpc'); ?></h2>
                <div class="row row_contacts">
                    <div class="col-md-5 col_contacts-content">
                        <div class="contacts-descr">
                            <!-- <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p> -->
                        </div>
                        <div class="contacts-form">
                            <?php echo do_shortcode(get_theme_option('contacts_form')); ?>
                        </div>
                    </div>
                    <div class="col-md-7 col_contacts-map">
                        <?php theme_option('contacts_map', '<iframe class="contacts-map" id="contactsMap" src="', '" frameborder="0" style="width:100%" allowfullscreen></iframe>'); ?>
                        <div class="contacts-data">
                            <div class="contacts-data-item contacts-data-title">F-O-R-T-U-N-E Personnel Consultants of Columbia, Inc.</div>
                            <div class="contacts-data-item contacts-data-address">7 Technology Circle Suite 450 Columbia, SC 29203-9591</div>
                            <div class="contacts-data-item contacts-data-phone">(803) 788-8877</div>
                            <div class="contacts-data-item contacts-data-url"><a href="www.fpccolumbia.com">www.fpccolumbia.com</a></div>
                        </div>
                    </div>
                </div>
            </article>
        </div><!-- /.section_contacts -->

<?php get_footer(); ?>