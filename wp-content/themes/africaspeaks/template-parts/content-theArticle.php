<?php
// include the header
get_header();
$featuredimageurl = get_the_post_thumbnail_url();

?>
<?php

if($_POST){

    $data = [
        'email'     => $_POST['email'],
        'status'    => 'subscribed',
        'firstname' => $_POST['firstname'],
        'lastname'  => $_POST['lastname']
    ];
    
    // NOTE: status having 4 Option --"subscribed","unsubscribed","cleaned","pending"
    $res = syncMailchimp($data);
    
    if($res == 200){
        echo '<div class="alert alert-success" role="alert">Subscribed Successfull</div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">Unable to Subscribe at the moment, try again later</div>';
    }
}


function syncMailchimp($data)
{
    $apiKey = '57acc1edc72d29800df2bb7a3c683ff7-us11';
    $listId = '246aab693f';

    $memberId = md5(strtolower($data['email']));
    $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    $json = json_encode([
        'email_address' => $data['email'],
        'status'        => $data['status'],
        'merge_fields'  => [
            'FNAME'     => $data['firstname'],
            'LNAME'     => $data['lastname']
        ]
    ]);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode;
}

?>


   <!-- Header section -->
    <header class="" >

      <div class="container-fluid  header-div" style="background-image: url('<?php echo $featuredimageurl ?>');">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="carousel-content">

              <!-- <img src="<?php // bloginfo( 'stylesheet_directory' )?>/assets/images/africaspeaks_logo_transparent.png" alt="" class="img-fluid" width = "200" height = "147"> -->
                <?php the_custom_logo();   ?>
                <nav class="navbar ">
                    <div class="container-fluid">
                      
                    <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
            
                      
                      <div class=" navbar-collapse navbarNav rounded collapse navbar-light" id="main-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-decoration-none header_ul header_ul_about_us %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                </div>
                       
                      
                    </div>
                  </nav>
      
                 
      
      
            </div>
            </div>

           

          </div>
         
        </div>
        
      </div>
       


        
       
       

    </header>

    <!-- main section -->

    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-12 mx-auto mainArticle ">
                <h2 class="mt-5 mb-5 redColor"><?php the_title(); ?></h2>



                <!-- Author Information -->
                <div class="authorinfo mt-0 mb-4 pt-0">
                    <div class="authorImage float-start ">
                    <img alt="" src="<?php bloginfo( 'stylesheet_directory' )?>/assets/images/africaspeaks_thumbnail.png">

                        <!-- <img src="assets/images/africaspeaks_thumbnail.png" alt="" > -->
                    </div>
                    <div class="authorDetails ">
                        <small>Article by <span class="authorModal" data-bs-toggle="modal" data-bs-target="#authorModal"><?php  the_author(); ?> <i class="fa-regular fa-window-restore"></i></span> </small>
                    </div>                  

                </div>
               
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style ms-0 mt-4 mb-3">
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_email"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_print"></a>                   
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                </div>
                
                <!-- article starts here -->
                    <?php the_content(); ?>
                
                
                <div class="related-content">
                <!-- Hint for adding related content -->
                <!-- https://www.hongkiat.com/blog/wordpress-related-posts-without-plugins/ -->
                    <h3 style="color: #d92e00;" class="mb-3">RELATED CONTENT</h3>

  




                    <div class="row">

                    <?php   
                        $noOfArticles = 0;               
                            $related_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'post_status' => 'publish',
                                'post__not_in' => array( get_the_ID() ),
                                'orderby' => 'rand',
                            );
                        $related = new WP_Query( $related_args );

                        if( $related->have_posts() ) :
                        ?>
                        
                                <?php while( $related->have_posts()  &&  $noOfArticles< 4): $related->the_post(); ?>
                                    <!-- <li><?php $featuredimageurl = get_the_post_thumbnail_url();
                                    
                                    ?></li> -->
                                    
                                    <div class="col-12 col-md-6 mb-2 related-content-col px-4 py-2">
                                <a href="https://africaspeaks.global/walking-the-talk-implementing-the-africa-leadership-study-findings/" class="">
                                    <figure >
                                        <!-- <div class="figImgDiv position-relative">
                                        </div> -->

                                        <?php the_post_thumbnail(); ?>
                                        <img 
                                            loading="lazy" 
                                            width="600" height="240"
                                            src="<?php echo $featuredimageurl ?>" 

                                            class="crd-image" 
                                            alt="Walking The Talk: Implementing the Africa Leadership Study Findings" 
                                            title="Walking The Talk: Implementing the Africa Leadership Study Findings"
                                            srcset="https://africaspeaks.global/wp-content/uploads/2022/09/ALS_Article-01-300x120.png 300w, 
                                                    https://africaspeaks.global/wp-content/uploads/2022/09/ALS_Article-01-1024x411.png 1024w, https://africaspeaks.global/wp-content/uploads/2022/09/ALS_Article-01-768x308.png 768w,
                                                    https://africaspeaks.global/wp-content/uploads/2022/09/ALS_Article-01-1536x616.png 1536w, https://africaspeaks.global/wp-content/uploads/2022/09/ALS_Article-01-2048x822.png 2048w" sizes="(max-width: 300px) 100vw, 300px"
                                        >
                                        <span class="crd-title"><?php the_title(); ?></span>

                                </figure>

                                
                            </a>
                        </div>
                                    
                                    
                                    <?php $noOfArticles += 1;?>
		            <?php endwhile; ?>
	
<?php
endif;
wp_reset_postdata();
?>



                     

                        
                    </div><!-- row -->

                    

                </div>

                <div class="subscribeDiv mb-4" >
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center redColor dontMiss mb-0"><b>DON'T MISS OUT!</b></p>
                            <h3 class="text-center moreArticlesText mt-0"><b>To receive more articles like these</b></h3>
                            <p class="text-center"><span ><em>Subscribe now</em></span></p>
                            

                            <form  method="POST">
                                <div class="row">
                                    <div class="col-md-3 mb-4">                                     
                                      <input type="text" class="form-control firstname" name='firstname' id="firstname1" placeholder="Enter your name ......" required>                                      
                                    </div>
                                    <div class="col-md-3 mb-4">                                     
                                      <input type="text" class="form-control lastname" name='lastname' id="lastname" placeholder="Enter your name ......" required>                                      
                                    </div>
                                    <div class="col-md-4 mb-4">                                      
                                      <input type="text" class="form-control email" name='email' id="email" placeholder="Enter your email ......" required>                                      
                                    </div>
                                    <div class="col-md-3 mb-3 p-0 m-0">                                      
                                      <div class="input-group">
                                       
                                        <input type="" class="form-control text-white font-weight-bold" id="subscribeBtnAjax" value="Subscribe Now" aria-describedby="inputGroupPrepend" required style="background-color: #ffc107;">
                                        
                                      </div>
                                    </div>
                                  </div>
                            </form>
                            	
                           
                            <p class="text-center"><span> <em>Give it a try. You can unsubscribe at any time.</em> </span></p>
                        </div>
                    </div>
                </div>

                
            </div> <!-- col -->
        </div>
    </div>


<!-- MODALS -->  
  <!-- Modal -->
  <!-- Modal -->
  <div class="modal fade" id="authorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="container">
            <div class="row mainModalRow">
                <div class="col-10 col-md-8 mx-auto mainModalCol h-100">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>

                    <!-- <i class="fa-sharp fa-solid fa-xmark fa-close fas fa-bold fa-2x closebtn float-end" data-bs-dismiss="modal" aria-label="Close"></i> -->

                    <p class="text-center">
                        <img alt="" src="<?php bloginfo( 'stylesheet_directory' )?>/assets/images/africaspeaks_thumbnail.png">
                    </p>
                    <p class="text-center">Africa Speaks</p>
                    <p class="text-center">
                        <a class="me-2" target="_blank" href="https://www.twitter.com/AfricaSpeaks18"><i class="fa-brands fa-twitter"></i></a>
                        
                        <a class="me-2" target="_blank" href="https://www.twitter.com/AfricaSpeaks18"><i class="fa-brands fa-facebook-f"></i></a>
                        
                        <a target="_blank" href="https://www.africaspeaks.global"><i class="fa-solid fa-earth-africa"></i></i></a>
                    </p>
                    
                    <p>We are an international network of professionals committed to a flourishing Christian publishing industry in Africa.</p>
                    
                </div>
                
            </div>
        </div>
        
        
      </div>
    </div>
  </div>

  <script>
    // var email = $('.email').val();
    // var firstname = $('.firstname').val();
    // var lastname = $('.lastname').val();

   
  //   $(document).ready(function () {
  //     var data = {
  //     'firstname' : $('#email').val(),
  //     'email' : $('#firstname').val(),
  //     'lastname' : $('#lastname').val(),
  //   };


  //     $('#subscribeBtnAjax').on('click', function () {
  //       alert('clicked');
  //       alert (data.firstname);
  //       alert(data.email);
  //       alert(data.lastname);

  //       alert('working');
  //     $.ajax({
  //       method: 'post',
  //       url: "subscribetomailchimp.php",
  //       data: data,      
  //       success: function (response) {
  //         alert('success');
  //       }
  //     });
  //     });
     
  //   });
  // </script>
    <!-- Footer Section -->
<?php
get_footer();
?>