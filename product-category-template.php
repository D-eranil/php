<!doctype html>
<html lang="en">
  <head>
    <?php echo file_get_contents('includes/common-meta.html'); ?>
    <?php echo file_get_contents('includes/common-styles.html'); ?>
    <title>Product Category Title - Product Categories | Ingram Micro Australia</title>
  </head>
  <body id="product-category-template">
    <?php echo file_get_contents('includes/header.html'); ?>
<!-- SECTION - PRODUCT CATEGORY BANNER -->
        <div class="section hero product-category-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h6>Product Category</h6><!--hardcoded, not editable-->
                        <h2 class="page-title">Product Category Title</h2>
                        <h3 class="tagline">We bring together technology buyers and sellers, and help our vendor and reseller partners to grow profitable, sustainable businesses.</h3><!--hardcoded, not editable-->
                    </div>
                    <div class="col-md-4 flex-container">
                        <div class="product-category-icon">
                        <img src="images/icon-audio.svg" alt="Audio" class="img-fluid"> <!--This is the same icon image file that is used on the product-categories.php page-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <br/>
                        <h6>We stock the following sub-categories</h6><!--hardcoded, not editable-->
                        <br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="sub-category-list">
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                        </ul>                        
                    </div>
                    <div class="col-md-4">
                        <ul class="sub-category-list">
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                        </ul>                        
                    </div>
                    <div class="col-md-4">
                        <ul class="sub-category-list">
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                            <li>Sub Category</li>
                        </ul>                        
                    </div>                                        
                </div>
            </div>
        </div>
<!-- SECTION - BRANDS WE WORK WITH -->
        <div class="section" id="brands">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Brands we work with</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
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
<!-- SECTION - RESOURCES & SUPPORT -->
                    <div class="section bgblue">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                <h6>Resources & Support</h6><!--hardcoded, not editable-->
                                <h3>We offer you a dedicated team that understands your business needs and can deliver qualified, effective support for your sales efforts.</h3><!--hardcoded, not editable-->    
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="resource-list"><!--When admin uploads a resource, they should be able to select which type of resource it is, PDF, video, link, tool, and whether it is private or public, this will affect the li.classes that will change the styling and icon-->
                                        <li class="resource-pdf"><a href="INSERTURL" data-bs-toggle="modal" data-bs-target="#resource-form">A PDF Resource</a></li><!--If the user is logged in they should not see the popup form, just download automatically-->
                                        <li class="resource-pdf"><a href="INSERTURL" data-bs-toggle="modal" data-bs-target="#resource-form">A PDF Resource</a></li><!--If the user is logged in they should not see the popup form, just download automatically-->
                                        <li class="resource-video"><a href="INSERTURL" data-bs-toggle="modal" data-bs-target="#video-title-1">A Video Resource</a></li>
                                        <li class="resource-video"><a href="INSERTURL" data-bs-toggle="modal" data-bs-target="#video-title-2">A Video Resource</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="resource-list">
                                        <li class="resource-link"><a href="INSERTURL" target="_blank">A Linked Resource</a></li>
                                        <li class="resource-link"><a href="INSERTURL" target="_blank">A Linked Resource</a></li>
                                        <li class="resource-link"><a href="INSERTURL" target="_blank">A Linked Resource</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="resource-list">
                                        <li class="resource-tool"><a href="INSERTURL">A Tool Resource</a></li>
                                        <li class="resource-tool"><a href="INSERTURL">A Tool Resource</a></li>
                                        <li class="resource-tool private"><a href="INSERTURL>LoginPage">A Private Tool Resource</a></li><!--Private resources can only be viewed when logged in-->
                                    </ul>
                                </div>
                            </div>  <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="INSERTURL - SERVICES>FINANCIALSERVICES" class="panel icon-panel secondary-feature">
                                        <div class="row flex-container">
                                            <div class="col-lg-10"><h4>Financial Services</h4>
                                                <h5>Custom deal structures that enable you to deploy innovation</h5></div>
                                            <div class="col-lg-2"><img src="images/icon-arrow-right-thin.svg"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="mailto:xxx@ingrammicro.com" class="panel icon-panel primary-feature">
                                        <div class="row flex-container">
                                            <div class="col-lg-10"><h4>Contact Us</h4>
                                                <h5>For product demos, sales support, education, training and more</h5></div>
                                            <div class="col-lg-2"><img src="images/icon-arrow-right-thin.svg"></div>
                                        </div>
                                    </a>
                                </div>        
                            </div>                                                                                                                         
                        </div>
                    </div>    

<!--POPUP: RESOURCE FORM-->
            <div class="modal fade popup" id="resource-form" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Let us know who you are</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="InputName" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTitle1">Title</label>
                                    <input type="text" class="form-control" id="InputTitle" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Organisation</label>
                                    <input type="text" class="form-control" id="InputOrganisation" placeholder="Organisation">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="Check">
                                    <label class="form-check-label fine-print" for="exampleCheck1">I agree to the <a href="INSERTURL">terms and conditions</a></label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-brand">Download the resource &nbsp;&nbsp;<i class="fal fa-arrow-to-bottom"></i></button>
                        </div>
                    </div>
                </div>
            </div>
<!--POPUP: VIDEO - Title 1-->
            <div class="modal fade popup video" id="video-title-1" tabindex="-1" aria-labelledby="Title 1" aria-hidden="true"><!--Note the unique ID (Eg video-title-1). This ID is targeted in the video resource's data-bs-target attribute, for more information see https://getbootstrap.com/docs/5.0/components/modal/-->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/6pc3H3UqAGU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!--User must paste this embed code in from YouTube-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--POPUP: VIDEO - Title 2-->
            <div class="modal fade popup video" id="video-title-2" tabindex="-1" aria-labelledby="Title 2" aria-hidden="true"><!--Note the unique ID (Eg video-title-2). This ID is targeted in the video resource's data-bs-target attribute, for more information see https://getbootstrap.com/docs/5.0/components/modal/-->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/6pc3H3UqAGU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!--User must paste this embed code in from YouTube-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
<!--SECTION: CTA BANNER-->
    <?php echo file_get_contents('includes/cta-banner.html'); ?>   

<!-- SECTION - BREADCRUMBS -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="row-list">
                        <li><a href="INSERTURL > HOME">Home</a></li>
                        <li><a href="INSERTURL > Product Categories Index">Product Categories</a></li>                                   
                        <li>Product Category Title</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php echo file_get_contents('includes/footer.html'); ?>
    <?php echo file_get_contents('includes/common-scripts.html'); ?>
  </body>
</html>