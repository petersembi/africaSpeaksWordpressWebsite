<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AfricaSpeaks
 */

?>

<footer>
    <!-- footer to start here -->
    <div class="row mt-5">
            <div class="row justify-content-between">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-4 d-none d-md-block">
                            <img alt="The Global Goals" class="frontity-lazy-image" loading="lazy" width="160" src="<?php bloginfo('stylesheet_directory')?>/assets/images/SDG-logo.png">
                            <h2 class="navHeading mr-5">THE GLOBAL GOALS</h2>
                        </div>
                        <div class="col-6 col-md-4">
                            <h4>Navigation</h4>
                            <div class="list-unstyled m-0 p-0 d-flex flex-column navigation">
                                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class=" list-unstyled  %2$s">%3$s</ul>',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                               
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <h4>Shortcuts</h4>
                            <div class="list-unstyled m-0 p-0 d-flex flex-column navigation">
                                <li >
                                    <a href="https://worldslargestlesson.globalgoals.org/" target="_blank">School</a>
                                </li>
                                <li >
                                    <a href="https://business.globalgoals.org/"  target="_blank">Business</a>
                                </li>
                                <li >
                                    <a href="https://www.globalgoals.org/press/" >Press</a>
                                </li>
                                <li >
                                    <a href="https://www.globalgoals.org/project-everyone/" >Project Everyone</a>
                                </li>
                                <li >
                                    <a href="https://www.globalgoals.org/partners/" >Contact us</a>
                                </li>
                                <li >
                                    <a href="https://www.globalgoals.org/category/campaigns/" >Partners</a>
                                </li>
                                <li >
                                    <a href="https://www.globalgoals.org/category/campaigns/" >Campaigns</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-5 mt-md-0 text-center text-md-end">
                    <a href="https://www.project-everyone.org/" class="" target="_blank">
                        <img alt="The Global Goals" class="" loading="lazy" width="216" src="<?php bloginfo('stylesheet_directory')?>/assets/images/content8.svg">
                    </a>
                </div>
            </div>

            
        <div >

            <div class="row justify-content-between mt-5 py-4 position-relative border-top">
                
                <div class="col-md-auto">
                <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      'items_wrap' => '<ul id="%1$s" class="d-flex flex-wrap flex-md-row list-unstyled m-0 p-0 footerNav %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                  ));
                  ?>
                
                
            </div>
            <div class="col-md-auto text-right mb-4 mb-md-0 social-icons">
                <ul class="d-flex m-0 p-0 list-unstyled ">
                    <li>
                        <a href="https://www.facebook.com/theglobalgoals" class="" target="_blank">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4356 0C7.36142 0 0 7.38772 0 16.4943C0 25.6009 7.36142 32.9886 16.4356 32.9886C25.5098 32.9886 32.8825 25.6123 32.8825 16.4943C32.8825 7.38772 25.5211 0 16.4356 0ZM20.2241 16.426H17.4224V26.6254H13.2143V16.426H11.1159V12.9086H13.2143V10.8027C13.2143 7.93412 14.4052 6.22663 17.774 6.22663H20.5757V9.74405H18.8289C17.5131 9.74405 17.4337 10.2335 17.4337 11.1556V12.92H20.6097L20.2241 16.426Z" fill="black">

                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/TheGlobalGoals" class="" target="_blank"><svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8157 0C7.73014 0 0.380066 7.38772 0.380066 16.4943C0.380066 25.6009 7.74149 32.9886 16.8157 32.9886C25.8898 32.9886 33.2512 25.6009 33.2512 16.4943C33.2512 7.38772 25.8898 0 16.8157 0ZM25.4248 12.8744C25.4361 13.0566 25.4361 13.2501 25.4361 13.4322C25.4361 19.1238 21.1259 25.6806 13.2314 25.6806C10.804 25.6806 8.55816 24.9634 6.65258 23.7454C6.99287 23.7796 7.33315 23.8023 7.67343 23.8023C9.68109 23.8023 11.53 23.1194 13.0045 21.9583C11.133 21.9241 9.54498 20.6833 9.00053 18.9645C9.26141 19.01 9.53364 19.0442 9.80586 19.0442C10.1915 19.0442 10.5772 18.9872 10.9401 18.8962C8.97784 18.4978 7.50329 16.7561 7.50329 14.673C7.50329 14.6502 7.50329 14.6388 7.50329 14.6161C8.08177 14.9348 8.73964 15.1283 9.44289 15.1511C8.29728 14.377 7.53732 13.0566 7.53732 11.5654C7.53732 10.7799 7.75283 10.04 8.1158 9.40255C10.2255 12.0093 13.3902 13.7168 16.9518 13.8989C16.8837 13.5802 16.8383 13.2501 16.8383 12.92C16.8383 10.5409 18.7553 8.61711 21.1259 8.61711C22.3622 8.61711 23.4738 9.14074 24.2565 9.97171C25.2319 9.7782 26.1507 9.42532 26.9787 8.92446C26.6611 9.92618 25.9806 10.7685 25.0958 11.3036C25.9579 11.2011 26.7859 10.9734 27.5572 10.6206C26.9901 11.5085 26.2641 12.2597 25.4248 12.8744Z" fill="black"></path></svg></a></li><li><a href="https://www.instagram.com/TheGlobalGoals/"  target="_blank">
                                <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.3756 14.2747C24.353 13.512 24.3643 12.7607 24.2282 12.0094C24.0013 10.7003 23.1279 9.7669 21.8349 9.47094C21.0295 9.2888 20.2129 9.30019 19.4075 9.2888C17.9216 9.26604 16.4471 9.26604 14.9612 9.2888C14.2012 9.30019 13.4526 9.2888 12.704 9.43679C11.4223 9.68722 10.5602 10.4157 10.2086 11.7021C10.0158 12.4078 10.0158 13.1363 10.0044 13.8649C9.98174 15.0715 9.98173 16.2667 9.98173 17.4734C9.98173 18.5661 9.95905 19.6589 10.0952 20.7517C10.2766 22.1974 11.0933 23.2105 12.5338 23.5292C13.3392 23.7114 14.1559 23.7 14.9612 23.7114C16.4244 23.7341 17.899 23.7228 19.3622 23.7114C20.1221 23.7 20.8707 23.7 21.6194 23.5634C22.6629 23.3699 23.4682 22.8462 23.9333 21.8559C24.1942 21.2981 24.2736 20.6948 24.3076 20.0801C24.3643 18.8963 24.3643 17.701 24.353 16.5058C24.3756 15.7659 24.3983 15.0146 24.3756 14.2747ZM17.1617 21.0249C14.689 21.0249 12.6359 18.9532 12.67 16.4375C12.704 13.9787 14.7343 11.9411 17.2524 11.9752C19.6911 12.0094 21.6874 14.0242 21.6874 16.5058C21.6988 19.0215 19.6911 21.0135 17.1617 21.0249ZM21.8689 12.8631C21.2791 12.8518 20.8027 12.3623 20.814 11.7817C20.8254 11.1898 21.3018 10.7345 21.8916 10.7345C22.4814 10.7345 22.9351 11.2012 22.9238 11.8159C22.9238 12.3964 22.436 12.8745 21.8689 12.8631Z" fill="black"></path>
                                    <path d="M17.173 19.4311C15.5624 19.4311 14.2579 18.0993 14.2579 16.4942C14.2579 14.8778 15.585 13.5574 17.1957 13.5574C18.795 13.5688 20.1108 14.8892 20.0994 16.5056C20.0994 18.122 18.7837 19.4311 17.173 19.4311Z" fill="black"></path>
                                    <path d="M17.1844 0C8.11021 0 0.748779 7.38772 0.748779 16.4943C0.748779 25.6009 8.11021 32.9886 17.1844 32.9886C26.2586 32.9886 33.62 25.6009 33.62 16.4943C33.6314 7.38772 26.2699 0 17.1844 0ZM25.9523 19.2718C25.941 20.2052 25.907 21.1501 25.5894 22.0493C24.9995 23.7454 23.7972 24.7358 22.0731 25.1114C21.0636 25.3277 20.0201 25.3049 18.9879 25.3049C17.4566 25.3163 15.9367 25.3163 14.4054 25.2936C13.4753 25.2822 12.5452 25.248 11.6605 24.9293C9.97042 24.326 8.9836 23.1194 8.60929 21.3777C8.43915 20.5923 8.4278 19.7841 8.4278 18.9759C8.41646 17.2228 8.41647 15.4584 8.43915 13.7054C8.45049 12.772 8.48452 11.8386 8.79077 10.9507C9.39194 9.25457 10.5943 8.25285 12.3297 7.8772C13.3506 7.66092 14.3827 7.69507 15.4149 7.68368C16.0161 7.6723 16.6059 7.68368 17.2071 7.68368C18.3981 7.68368 19.5777 7.6723 20.7687 7.72922C21.8122 7.77475 22.8217 7.95688 23.7178 8.51466C24.8634 9.2318 25.5327 10.2791 25.7935 11.5995C25.9977 12.624 25.9864 13.6599 25.9864 14.6958C25.975 16.2211 25.975 17.7465 25.9523 19.2718Z" fill="black">

                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCRfuAYy7MesZmgOi1Ezy0ng" class="" target="_blank">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5644 0C7.49025 0 0.12883 7.38772 0.12883 16.4943C0.12883 25.6009 7.49025 32.9886 16.5644 32.9886C25.6386 32.9886 33 25.6009 33 16.4943C33 7.38772 25.6386 0 16.5644 0ZM25.7634 15.9365C25.752 16.039 25.7293 16.1414 25.7293 16.2553C25.6953 17.2911 25.684 18.327 25.6046 19.3629C25.5478 20.1142 25.389 20.8541 25.0828 21.5485C24.7425 22.2998 24.1981 22.7665 23.336 22.8006C22.542 22.8348 21.748 22.9258 20.954 22.9258C18.5154 22.9486 16.0767 22.9714 13.6493 22.9486C12.2542 22.9372 10.8704 22.8348 9.47523 22.7551C9.23703 22.7437 8.97614 22.6299 8.77197 22.5047C8.23886 22.1632 7.97798 21.6168 7.7965 21.0135C7.4789 19.9434 7.35413 18.8393 7.35413 17.7351C7.35413 16.3577 7.41085 14.9803 7.49025 13.6144C7.53562 12.772 7.73978 11.9524 8.14812 11.1897C8.47706 10.5978 8.9648 10.2791 9.62267 10.2335C10.7343 10.1652 11.8572 10.1311 12.9688 10.0742C13.0595 10.0742 13.1616 10.04 13.2523 10.0286C15.4642 10.0286 17.6647 10.0286 19.8765 10.0286C19.9559 10.04 20.0353 10.0742 20.1147 10.0742C21.2263 10.1311 22.3492 10.1766 23.4608 10.2335C24.0506 10.2563 24.493 10.5409 24.8106 11.0304C24.9353 11.2239 25.0488 11.4402 25.1395 11.6678C25.5365 12.6809 25.6272 13.7396 25.6953 14.8096C25.718 15.1625 25.7407 15.5154 25.752 15.8568C25.7634 15.8796 25.7634 15.9138 25.7634 15.9365Z" fill="black">

                                    </path>
                                    <path d="M14.3753 13.0679C14.3753 15.3787 14.3753 17.6212 14.3753 19.932C16.1447 18.7823 17.8802 17.6667 19.661 16.517C17.8802 15.3445 16.1447 14.229 14.3753 13.0679Z" fill="black">

                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>




        </div>

</footer>

 
    <script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/main.js"></script> 
   
   
</body>
</html>