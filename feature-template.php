<!doctype html>
<html lang="en">
  <head>   
    <?php echo file_get_contents('includes/common-meta.html'); ?>
    <?php echo file_get_contents('includes/common-styles.html'); ?>
    <title>Work From Home - Feature | Ingram Micro Australia</title>
  </head>
  <body id="feature">
    <?php echo file_get_contents('includes/header.html'); ?>
<!-- SECTION - TITLE -->
                    <div class="title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h6 class="mt-5 ">Feature</h6><!--Not Editable-->
                                    <h2 class="page-title mt-3 mb-2">Work from home</h2><!--Feature Page Title-->
                                    <h3 class="tagline mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</h3><!--Feature Tagline: Editable with a standard text field-->
                                    <p class="mb-1 text-muted"><strong>September 26, 2021</strong></p><!--Date, should be system generated-->
                                    <p class="text-muted"><strong>By Firstname Lastname, Position</strong></p> <!--This line is composed of two fields, 1. Full name, 2. Position. Filling out these fields is optional, if not filled out it will not appear.-->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="section compact pb-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wysiwyg mb-5"><!--This is a standard WYSIWYG text field-->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>       
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                  
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <blockquote class="panel bgingramblue">
                                    <p class="fs-4 text-white mb-0"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong></p>
                                    </blockquote><!--Feature Quote Field: Standard text field-->
                                </div>
                            </div> 
                            <div class="row"><!--Feature banner field: This is the same image that is from the homepage carousel.-->
                                <div class="col-md-8">
                                <img src="images/placeholder-banner-desktop-2400x860.jpg" class="img-fluid">                                    
                                </div>
                            </div>              
                        </div>
                    </div>

                     

                    <div class="section" id="brands"><!--Brand Banner: Admin should be able to select which vendors are relevant to the content of the feature. Their logos will appear in this section. If they do not select any, then this section will not appear.-->
                        <div class="container">
                            <div class="row">
                                <div class="container">
                                    <div class="col-lg-8">
                                    <section class="logo-carousel slider" data-arrows="true">
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                      <div class="slide"><img src="images/logo-carousel-ingram-grey.jpg"></div>
                                    </section>
                                    </div>
                                  </div>                                                           
                                                                                                
                            </div>
                        </div>
                    </div>
                    <div class="section compact pt-0"><!--This section allows the user to navigate between previous and next features (if applicable) if there are no previous/next features the respective link does not appear.-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="INSERTURL > Previous Feature Item" class="panel bgblue img-fluid mx-auto d-block mb-3">
                                                <h6><i class="fal fa-arrow-circle-left"></i>&nbsp;Previous</h6>
                                                <h4 class="mb-1">This is an example feature title</h4>
                                                <p class="mb-1">This is an example feature tagline</p>  
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="INSERTURL > Next Feature Item" class="panel bgblue img-fluid mx-auto d-block">
                                                <h6>Next <i class="fal fa-arrow-circle-right"></i></h6>
                                                <h4 class="mb-1">This is an example feature title</h4>
                                                <p class="mb-1">This is an example feature tagline</p>   
                                            </a>
                                        </div>                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

<!-- SECTION - BREADCRUMBS -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><ul class="row-list">
                    <li><a href="HOME">Home</a></li>
                    <li>Features</li>
                    <li>Work From Home</li>
                </ul></div>
            </div>
        </div>
    </div>
    <?php echo file_get_contents('includes/footer.html'); ?>
    <?php echo file_get_contents('includes/common-scripts.html'); ?>

  </body>
</html>