<h3 class="text-center m-3 members_saying_text my-5">WHAT OUR MEMBERS ARE SAYING</h3>
<div class="container-fluid" >
    <div class="row">
    <div class="col-sm-12">
                  <div id="customers-testimonials" class="owl-carousel" dir="ltr">
        
                        <?php $loop = new WP_Query(array('post_type'=>'testimonial', 'orderby'=>'post_id', 'order'=>'ASC')); ?>

                          <?php
                          while($loop->have_posts()) : $loop->the_post();  

                          $testimonial_image = get_field('testimonial_image');
                          $testimonial_title = get_field('testimonial_title');
                          $testimonial_description = get_field('testimonial_description');
                          ?>


                          <div class="item ">
                              <h3><?php echo $testimonial_title; ?></h3>
                              <img src="<?php echo $testimonial_image['url']; ?>" style=' width: 100%; object-fit: contain' class="img-fluid">           
                              
                              <p style="text-align: justify;" class="border p-2 "><?php echo $testimonial_description; ?></p>                       
                        
                          </div>         
                         <?php endwhile;wp_reset_query(); ?>
                    
                   
                  </div>
                </div>
    </div>
</div>
