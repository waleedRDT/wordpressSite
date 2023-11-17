<section class="services">
    <div class="container">
        <div class="line-wrapper row">
            <div class="line col-3 offset-1"></div>
            <div class="line col-3 offset-4"></div>
            <div class="col-1"></div>
        </div>
        <div class="inner">
            <div class="sec-heading">
                <h2>What We <span>Offer</span></h2>
            </div>
            <div class="services-wrapper">
                <div class="service-single row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img class="service-image w-100"
                            src="<?php echo get_template_directory_uri() ?>/images/service-lead-generation.png" alt="">
                    </div>
                    <div class="col-lg-5 col-md-6 offset-lg-2">
                        <div class="service-details">
                            <h3>LEAD GENERATION</h3>
                            <p class="service-desc">Our lead generation tools harness the power of AI and data analytics
                                to
                                identify and target potential buyers and sellers in your area. Say goodbye to cold
                                calling
                                and
                                hello to warm leads that are more likely to convert into clients.</p>
                        </div>
                    </div>
                </div>
                <div class="service-single row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-lg-5 col-md-6 ">
                        <div class="service-details">
                            <h3>ISA-verified leads</h3>
                            <p class="service-desc">What sets us apart is our dedicated team of Inside Sales Agents
                                (ISAs). Our
                                ISAs are highly skilled at not only qualifying leads but also engaging in live phone
                                call
                                conversations. This human touch is a game-changer when it comes to lead conversion.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 offset-lg-2">
                        <img class="service-image w-100"
                            src="<?php echo get_template_directory_uri() ?>/images/service-lead-generation1.png" alt="">
                    </div>
                </div>
                <div class="service-single row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img class="service-image w-100"
                            src="<?php echo get_template_directory_uri() ?>/images/service-lead-generation2.png" alt="">
                    </div>
                    <div class="col-lg-5 col-md-6 offset-lg-2">
                        <div class="service-details">
                            <h3>Customer Relationship Management</h3>
                            <p class="service-desc">Streamline your business with our state-of-the-art Customer
                                Relationship Management
                                (CRM) system. Keep track of leads, automate follow-ups, and provide personalized service
                                to
                                every client.</p>
                        </div>
                    </div>
                </div>
                <div class="service-single row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-lg-5 col-md-6 ">
                        <div class="service-details">
                            <h3>Tailored Marketing</h3>
                            <p class="service-desc">Our cutting-edge marketing tools help you showcase properties, build
                                your
                                online brand, and reach a wider audience. From search engine optimization to social
                                media
                                marketing, we've got you covered.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 offset-lg-2">
                        <img class="service-image w-100"
                            src="<?php echo get_template_directory_uri() ?>/images/service-lead-generation3.png" alt="">
                    </div>
                </div>
                <?php // Set up the query arguments
                    $args = array(
                        'post_type' => 'service',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'orderby' => 'ID',
                    );

                    // Instantiate the query
                    $query = new WP_Query($args);
                    // Check if there are any posts
                    if ($query->have_posts()) {
                        $counter = 0;
                        // Loop through the posts
                        while ($query->have_posts()) {
                            $query->the_post();
                            $description =  get_field('service_description', get_the_ID());
                            $service_title = get_field('service_title', get_the_ID());
                            // Display post data as needed
                            $postHtml = $featuredImageHtml = "";
                            
                            if ($counter %2 == 0) {
                                $postHtml .= '<div class="service-single row align-items-center">';
                                $postHtml .= '<div class="col-lg-5 col-md-6">';
                                $postHtml .= '<img class="service-image w-100" src="'. get_the_post_thumbnail_url( get_the_ID(), 'medium' ).'" alt="">';
                                $postHtml .= '</div>';
                                $postHtml .= '<div class="col-lg-5 col-md-6 offset-lg-2">';
                                $postHtml .= '<div class="service-details">';
                                $postHtml .= '<h3>'. $service_title .'</h3>';
                                $postHtml .= '<p class="service-desc">'. $description .'</p>';
                                $postHtml .= '</div>';
                                $postHtml .= '</div>';
                                $postHtml .= '</div>';
                            } else {
                                $postHtml .= '<div class="service-single row flex-column-reverse flex-md-row align-items-center">';
                                $postHtml .= '<div class="col-lg-5 col-md-6">';
                                $postHtml .= '<div class="service-details">';
                                $postHtml .= '<h3>'. $service_title .'</h3>';
                                $postHtml .= '<p class="service-desc">'.  $description.'</p>';
                                $postHtml .= '</div>';
                                $postHtml .= '</div>';
                                $postHtml .= '<div class="col-lg-5 col-md-6 offset-lg-2">';
                                $postHtml .= '<img class="service-image w-100" src="'. get_the_post_thumbnail_url( get_the_ID(), 'medium' ).'" alt="">';
                                $postHtml .= '</div>';
                                $postHtml .= '</div>';
                            } 
                            
                            echo $postHtml;

                            $counter++;
                        }
                        
                        // Restore original post data
                        wp_reset_postdata();
                    } ?>
            </div>
        </div>
    </div>
</section>