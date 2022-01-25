<!doctype html>
<html lang="en">
  <head>   
    <?php echo file_get_contents('includes/common-meta.html'); ?>
    <?php echo file_get_contents('includes/common-styles.html'); ?>
    <title>Help Item Entity Page - Need Help? - Support | Ingram Micro Australia</title>
  </head>
  <body id="need-help-child">
    <?php echo file_get_contents('includes/header.html'); ?>
<!-- SECTION - TITLE -->
                    <div class="title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="page-title">Need Help?</h2>
                                        <h2 class="tagline">I need to speak to accounts receivable about an enquiry</h2><!--The Help Item Entity Title-->      

                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                            <p>Please contact our accounts team on...</p>
                                        </div>
                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
<!-- SECTION - CONTENT -->
                    <div class="section bgblue compact">
                        <div class="container">                           
                            <div class="row">
                                <div class="col-md-12"><h4><a href="INSERTURL>NEEDHELP">Go back to need help</a>, or find something else:</h4></div>
                            </div>                               
                            <div class="row g-0 search-full-width">
                                <div class="col-md-9">
                                    <input type="text" placeholder="Search"/>                                        
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary btn-brand btn-large">Search</button>
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
                    <li>Support</li>
                    <li><a href="INSERTURL>NEEDHELP">Need Help</a></li>
                    <li>Help Item Entity Title eg - I need to speak to accounts receivable about an enquiry?</li>            
                </ul></div>
            </div>
        </div>
    </div>
    <?php echo file_get_contents('includes/footer.html'); ?>
    <?php echo file_get_contents('includes/common-scripts.html'); ?>

  </body>
</html>