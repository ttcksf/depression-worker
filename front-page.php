<?php get_header();?>

    <main>

        <section class="section postbox category">
            <div class="postbox_inner inner">
                <?php
                    $category = get_category($cat);
                    $args = array("post_type" => "post", "posts_per_page" => 6, "paged" => $paged);
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                ?>
                <div class="cards">
                    <?php 
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <div class="card">
                                <a href="<?php the_permalink();?>">
                                <div class="card_img">
                                    <?php
                                        $category=get_the_category();
                                        if($category[0]){
                                            echo '<span>'.$category[0]->cat_name.'</span>';
                                        }
                                    ?>
                                    </div>
                                    <div class="card_text">
                                        <h2><?php the_title();?></h2>
                                        <?php the_excerpt();?>
                                    </div>
                                </a>
                            </div>
                    <?php 
                        endwhile;
                    ?>
                </div>
            <?php 
                endif;
                wp_reset_postdata();
            ?>
            <?php
                if(paginate_links()):
            ?>
                <div class="pagenation">
                    <?php 
                    echo paginate_links(
                        array(
                            'end-size' => 1,
                            'mid_size' => 5,
                            'prev-next' => true,
                            'prev_text' => '<i class="fas fa-arrow-left"></i>',
                            'next_text' => '<i class="fas fa-arrow-right"></i>'
                        )
                    );
                    ?>
                </div>
            <?php 
                endif;
            ?>
                <div class="post_search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>

        <section class="section profile">
            <div class="profile_inner inner">
                <div class="card">
                    <div class="card_img">
                    </div>
                    <div class="card_text">
                        <div class="name">
                            <h2>安達裕一朗</h2>
                            <h3>サイト運営者</h3>
                        </div>
                        <div class="detail">
                            <p>
                            学生時代からうつ病を患い通院、投薬治療をしながら生活している。サラリーマン時代に重度の再発を経験したことでライフワークについて本気で研究し同じような境遇の人たちに向けて情報発信を行っている。仕事は会社を立ち上げIT事業と小売事業をひっそりと行いながら持続可能な働き方改革を実践中。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
