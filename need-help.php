<!doctype html>
<html lang="en">
  <head>
   
    <?php echo file_get_contents('includes/common-meta.html'); ?>
    <?php echo file_get_contents('includes/common-styles.html'); ?>
    <title>Need Help? - Support | Ingram Micro Australia</title>
  </head>
  <body id="need-help">
    <?php echo file_get_contents('includes/header.html'); ?>
<!-- SECTION - TITLE -->
                    <div class="title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="page-title">Need Help?</h2>                               
                                </div>
                            </div>
                        </div>
                    </div>
<!-- SECTION - SEARCH BAR -->
                    <div class="section bgblue">
                        <div class="container">
                            <div class="row g-0 search-full-width">
                                <div class="col-md-9">
                                    <input type="text" placeholder="Search"/>                                        
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary btn-brand btn-large">Search</button>
                                </div>
                            </div>
<!-- SECTION - QUESTION TYPES -->                                                             
                            <div class="row g-0">
                                <div class="col-sm-6">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <a class="csp-show question-type current" target="myaccount">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="images/icon-user-large.svg" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <h4>My Account</h4>
                                                    </div>
                                                </div>
                                            </a>                                                
                                        </div>
                                        <div class="col-sm-6"> 
                                            <a class="csp-show question-type" target="mydelivery">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="images/icon-truck-moving.svg" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <h4>My Delivery</h4>
                                                    </div>
                                                </div>
                                            </a>                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <a class="csp-show question-type" target="mypurchase">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="images/icon-box.svg" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <h4>My Purchase</h4>
                                                    </div>
                                                </div>
                                            </a>                                                
                                        </div>
                                        <div class="col-sm-6">
                                            <a class="csp-show question-type" target="myquotes">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="images/icon-list-ul.svg" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <h4>My Quotes</h4>
                                                    </div>
                                                </div>
                                            </a>                                                
                                        </div>
                                    </div>
                                </div>                                    
                            </div> 
<!--MY ACCOUNT ACCORDION-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="csp-targetdiv question-type-body" id="csp-myaccount"> 
                                        <!-- Flush Accordion see docs https://getbootstrap.com/docs/5.0/components/accordion/-->
                                        <div class="accordion accordion-flush" id="accordion-myaccount"><!--Help items need be categorised by the admin as either - My Account, My Delivery, My Purchase, My Quotes and placed in their respective accordion, new categories can not be created by admin-->
                                            <div class="accordion-item">
                                                <!--Each accordion item heading needs a unique number suffix that is mirrored in the accordion item body, eg "-0"-->
                                                <h2 class="accordion-header" id="flush-heading-0">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-0" aria-expanded="false" aria-controls="flush-collapse-0">
                                                        Help Item Entity Title - This should be editable with a text field
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-0" class="accordion-collapse collapse" aria-labelledby="flush-heading-0" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Help Item Entity Description. This content should be editable with a standard WYSWYG editor field.</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Heading</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p>This is a contact card, it has two fields, a standard text field for heading and a WYSWYG editor field for content. They are optional to fill out, if they are not filled out they do not appear. Maximum of 2, minimum, 0</p>

                                                                            <p><a href="mailto:email@ingrammicro.com">email@ingrammicro.com</a></p>
                                                                            <p><a href="tel:02 0000 0000">02 0000 0000</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Heading</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p>This is a contact card, it has two fields, a standard text field for heading and a WYSWYG editor field for content. They are optional to fill out, if they are not filled out they do not appear. Maximum of 2, minimum, 0</p>                                                                                
                                                                            <p><a href="mailto:email@ingrammicro.com">email@ingrammicro.com</a></p>
                                                                            <p><a href="tel:02 0000 0000">02 0000 0000</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-1" aria-expanded="false" aria-controls="flush-collapse-1">
                                                    I need to speak to accounts receivable about an enquiry?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-1" class="accordion-collapse collapse" aria-labelledby="flush-heading-1" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please reach out to our accounts receivable team, team can be contacted at...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Accounts Receivable</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:credit_controllers@ingrammicro.com">credit_controllers@ingrammicro.com</a></p>
                                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-2" aria-expanded="false" aria-controls="flush-collapse-2">
                                                    I need a copy of an invoice?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-2" class="accordion-collapse collapse" aria-labelledby="flush-heading-2" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Invoices can be accessed via <a href="https://au.ingrammicro.com">IM Online</a>.</p>
                                                            <p>Simply log into our web site and click on:</p>
                                                            <p><strong> Tools > Invoice List > Pick your Invoice > Press Request PDF > Enter Your Email Address</strong></p>
                                                            <p>Invoice will be emailed to you in a few minutes.</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Credit Controllers</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:credit_controllers@ingrammicro.com">credit_controllers@ingrammicro.com</a></p>
                                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-3" aria-expanded="false" aria-controls="flush-collapse-3">
                                                    I have been overcharged and need to enquire about a refund?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-3" class="accordion-collapse collapse" aria-labelledby="flush-heading-3" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please outline the price descrepancy and include a copy of your original purchase order and quote the Ingram Micro invoice number.</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Credit Controllers</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:credit_controllers@ingrammicro.com">credit_controllers@ingrammicro.com</a></p>
                                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-4">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-4" aria-expanded="false" aria-controls="flush-collapse-4">
                                                    I need to pay for my order with my credit card
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-4" class="accordion-collapse collapse" aria-labelledby="flush-heading-4" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>All credit card payment are processed over the telephone, please contact your account manager or contact the team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-5">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-5" aria-expanded="false" aria-controls="flush-collapse-5">
                                                    I need to pay for my order, where do l send my remittance advise to?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-5" class="accordion-collapse collapse" aria-labelledby="flush-heading-5" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please email a copy of the remittance to our banking team at...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Banking Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:banking@ingrammicro.com.au">banking@ingrammicro.com.au</a></p>
                                                                            <p><a href="mailto:auprepay@ingrammicro.com">auprepay@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-6">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-6" aria-expanded="false" aria-controls="flush-collapse-6">
                                                    I need to check the status of my my reseller application?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-6" class="accordion-collapse collapse" aria-labelledby="flush-heading-6" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please email the new accounts team at...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>New Accounts Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:au-newacccounts-credi@ingrammicro.com">au-newacccounts-credi@ingrammicro.com</a></p>
                                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-7">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-7" aria-expanded="false" aria-controls="flush-collapse-7">
                                                    I have a credit card charge that l need to find out more about
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-7" class="accordion-collapse collapse" aria-labelledby="flush-heading-7" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please contact our accounts team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Accounts</h6><!-- This title should be editable with a text field-->
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
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-8">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-8" aria-expanded="false" aria-controls="flush-collapse-8">
                                                        Need to update my account details - Change of address, name etc
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-8" class="accordion-collapse collapse" aria-labelledby="flush-heading-8" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please email your required changes to, or contact the team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Account Maintenance</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:accountmaintenance@ingrammicro.com.au">accountmaintenance@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>                                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-9">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-9" aria-expanded="false" aria-controls="flush-collapse-9">
                                                        My account needs to be re-activated
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-9" class="accordion-collapse collapse" aria-labelledby="flush-heading-9" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please contact our account maintenance team at...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Account Maintenance</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:accountmaintenance@ingrammicro.com.au">accountmaintenance@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 3</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-10">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-10" aria-expanded="false" aria-controls="flush-collapse-10">
                                                        Where do I send my financials to?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-10" class="accordion-collapse collapse" aria-labelledby="flush-heading-10" data-bs-parent="#accordion-myaccount">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please contact our financial accounts team at...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Financial Accounts</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:AU-Financials@ingrammicro.com">AU-Financials@ingrammicro.com</a></p>
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
                                    </div>
                                </div>
                            </div>


<!--MY DELIVERY ACCORDION-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="csp-targetdiv question-type-body" id="csp-mydelivery">
                                        <!-- Flush Accordion see docs https://getbootstrap.com/docs/5.0/components/accordion/-->
                                        <div class="accordion accordion-flush" id="accordion-mydelivery">
                                               <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-11">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-11" aria-expanded="false" aria-controls="flush-collapse-11">
                                                    I received a product that does not belong to me?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-11" class="accordion-collapse collapse" aria-labelledby="flush-heading-18" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Thank you for your honesty, please reach out to your account manager or our post sales teams who will arrange to collect the item</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Post Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:02 9381 6000">02 9381 6000</a> Option 2</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-12">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-12" aria-expanded="false" aria-controls="flush-collapse-12">
                                                    I need to track my delivery
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-12" class="accordion-collapse collapse" aria-labelledby="flush-heading-12" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Order status can be tracked via <a href="https://au.ingrammicro.com">IM Online</a>.</p>
                                                            <p>Simply click <strong>Orders > Find your order > Click into your order > Click on Tracking Numbers tab > Click on Carrier Link</strong></p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com">post.sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1800 464 726">1800 464 726</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-13">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-13" aria-expanded="false" aria-controls="flush-collapse-13">
                                                     I received my delivery and I have an issue - Damaged, Missing Item, Wrong Item, Extra Item
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-13" class="accordion-collapse collapse" aria-labelledby="flush-heading-13" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please email our post sales team at...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1800 464 726">1800 464 726</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-14">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-14" aria-expanded="false" aria-controls="flush-collapse-14">
                                                     I need to have my licence/warranty resent
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-14" class="accordion-collapse collapse" aria-labelledby="flush-heading-14" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please email our team at quoting your Purchase Order Number or Ingram Micro Invoice Number...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1800 464 726">1800 464 726</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-15">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-15" aria-expanded="false" aria-controls="flush-collapse-15">
                                                     I need a POD
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-15" class="accordion-collapse collapse" aria-labelledby="flush-heading-15" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Order status can be tracked via <a href="https://au.ingrammicro.com" target="_blank">IMOnline</a>, simply click </p>
                                                            <p><strong>Orders > Find your order > Click into your order > Click on Tracking Numbers tab > Click on Carrier Link</strong></p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1800 464 726">1800 464 726</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                           <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-16">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-16" aria-expanded="false" aria-controls="flush-collapse-16">
                                                     I need to check on the return policy for my goods
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-16" class="accordion-collapse collapse" aria-labelledby="flush-heading-16" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please reach out to our post sales team</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1800 464 726">1800 464 726</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-17">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-17" aria-expanded="false" aria-controls="flush-collapse-17">
                                                     I have a faulty product, what is the process?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-17" class="accordion-collapse collapse" aria-labelledby="flush-heading-17" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please reach out to our post sales team, we will require a detailed faulty description, serial number of unit, date of purchase to help you with your return</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1800 464 726">1800 464 726</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-18">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-18" aria-expanded="false" aria-controls="flush-collapse-18">
                                                    The product l purchased doesn't meet my expectations
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-18" class="accordion-collapse collapse" aria-labelledby="flush-heading-18" data-bs-parent="#accordion-mydelivery">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please call your account manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:retailsales@ingrammicro.com">retailsales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1800 464 726">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                </div>
                            </div>

<!--MY PURCHASE ACCORDION-->                                

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="csp-targetdiv question-type-body" id="csp-mypurchase">
                                        <!-- Flush Accordion see docs https://getbootstrap.com/docs/5.0/components/accordion/-->
                                        <div class="accordion accordion-flush" id="accordion-mypurchase">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-19">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-19" aria-expanded="false" aria-controls="flush-collapse-19">
                                                    I need to check the status of my order?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-19" class="accordion-collapse collapse" aria-labelledby="flush-heading-19" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>All orders can be reviewed via <a href="https://au.ingrammicro.com">IM Online</a>, simply click</p>
                                                            <p><strong>Tools > Back Order Report</strong></p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-20">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-20" aria-expanded="false" aria-controls="flush-collapse-20">
                                                    I need to cancel my order
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-20" class="accordion-collapse collapse" aria-labelledby="flush-heading-20" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>All orders can be reviewed via <a href="https://au.ingrammicro.com">IM Online</a>, simply click</p>
                                                            <p><strong>Tools > Back Order Report</strong></p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-21">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-21" aria-expanded="false" aria-controls="flush-collapse-21">
                                                    I need to amend my order? - Change Address, etc
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-21" class="accordion-collapse collapse" aria-labelledby="flush-heading-21" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please contact your account manager or contact the team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                               
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-22">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-22" aria-expanded="false" aria-controls="flush-collapse-22">
                                                    I need to find out if l purchased an item from Ingram Micro
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-22" class="accordion-collapse collapse" aria-labelledby="flush-heading-22" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please contact your account manager or contact the team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-23">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-23" aria-expanded="false" aria-controls="flush-collapse-23">
                                                    I need to check the status of - Return, Claim, Credit App, Order, Delivery
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-23" class="accordion-collapse collapse" aria-labelledby="flush-heading-23" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please contact your account manager or contact the team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-24">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-24" aria-expanded="false" aria-controls="flush-collapse-24">
                                                    I need to get serial numbers/mac addresses from my order
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-24" class="accordion-collapse collapse" aria-labelledby="flush-heading-24" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Order status can be tracked via <a href="https://au.ingrammicro.com" target="_blank">IM Online</a>, simply click</p> 
                                                            <p><strong>Orders > Find your order > Click into your order > Click on Serial Numbers tab</strong></p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-25">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-25" aria-expanded="false" aria-controls="flush-collapse-25">
                                                    My item is missing some accessories
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-25" class="accordion-collapse collapse" aria-labelledby="flush-heading-25" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please call your account manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-26">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-26" aria-expanded="false" aria-controls="flush-collapse-26">
                                                    I want to place an order
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-26" class="accordion-collapse collapse" aria-labelledby="flush-heading-26" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please email your Purchase Order to <a href="mailto:orders@ingrammicro.com">orders@ingrammicro.com</a>, or you can choose to order via <a href="https://au.ingrammicro.com">IM Online</a> or you can reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                 
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-27">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-27" aria-expanded="false" aria-controls="flush-collapse-27">
                                                    I need to have my licence/warranty resent?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-27" class="accordion-collapse collapse" aria-labelledby="flush-heading-27" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please email our team at quoting your Purchase Order Number or Ingram Micro Invoice Number...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-28">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-28" aria-expanded="false" aria-controls="flush-collapse-28">
                                                    I need to request an expedite for my order?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-28" class="accordion-collapse collapse" aria-labelledby="flush-heading-28" data-bs-parent="#accordion-mypurchase">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please call your account manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Commercial</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:sales@ingrammicro.com.au">sales@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->      
                                                                        <h6>Retail</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:post.sales@ingrammicro.com">post.sales@ingrammicro.com</a></p>
                                                                            <p><a href="tel:1300 362 142">1300 362 142</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
<!--MY QUOTES ACCORDION-->                                
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="csp-targetdiv question-type-body" id="csp-myquotes">
                                        <!-- Flush Accordion see docs https://getbootstrap.com/docs/5.0/components/accordion/-->
                                        <div class="accordion accordion-flush" id="accordion-myquotes">
                                           
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-29">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-29" aria-expanded="false" aria-controls="flush-collapse-29">
                                                    I need a quote
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-29" class="accordion-collapse collapse" aria-labelledby="flush-heading-29" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please call your account manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team Quotes</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:quotes@ingrammicro.com.au">quotes@ingrammicro.com.au</a></p>
                                                                            <p><a href="mailto:licensingquotes@ingrammicro.com.au">licensingquotes@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-30">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-30" aria-expanded="false" aria-controls="flush-collapse-30">
                                                    I want to find technical information on a product
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-30" class="accordion-collapse collapse" aria-labelledby="flush-heading-30" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please call your account manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team Quotes</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:quotes@ingrammicro.com.au">quotes@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-31">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-31" aria-expanded="false" aria-controls="flush-collapse-31">
                                                    I want to find out stock availability
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-31" class="accordion-collapse collapse" aria-labelledby="flush-heading-31" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>All stock availability is listed on IM Online, if you can't find what you're looking for please contact your Account Manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team Quotes</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:quotes@ingrammicro.com.au">quotes@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-32">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-32" aria-expanded="false" aria-controls="flush-collapse-32">
                                                    I need an alternative quote option
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-32" class="accordion-collapse collapse" aria-labelledby="flush-heading-32" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please call your account manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team Quotes</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:quotes@ingrammicro.com.au">quotes@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:1300 651 124">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-33">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-33" aria-expanded="false" aria-controls="flush-collapse-33">
                                                    I need help navigating the cloud marketplace
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-33" class="accordion-collapse collapse" aria-labelledby="flush-heading-33" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please contact our Cloud Sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Cloud Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:INSERT@ingrammicro.com.au">INSERT@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:00000000">00000000</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-34">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-34" aria-expanded="false" aria-controls="flush-collapse-34">
                                                    How much will the freight for my quote cost?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-34" class="accordion-collapse collapse" aria-labelledby="flush-heading-34" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Please call your account manager or reach out to our sales team on...</p>
                                                        </div>
                                                        <div class="help-contacts"><!--Optional Section, if the user does not fill out both contact cards, the whole section doesn't appear-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="contact-card"><!--Optional Section, if the user does not fill out this card, it doesn't appear-->
                                                                        <h6>Sales Team</h6><!-- This title should be editable with a text field-->
                                                                        <div class="wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                                            <p><a href="mailto:quotes@ingrammicro.com.au">quotes@ingrammicro.com.au</a></p>
                                                                            <p><a href="tel:00000000">1300 651 124</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-35">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-35" aria-expanded="false" aria-controls="flush-collapse-35">
                                                    How do I change my quote or get the validity extended?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-35" class="accordion-collapse collapse" aria-labelledby="flush-heading-35" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Email your quote number through to <a href="mailto:quotes@ingrammicro.com.au">quotes@ingrammicro.com.au</a> and we will refresh it for you or make the changes you outline</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-heading-36">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-36" aria-expanded="false" aria-controls="flush-collapse-36">
                                                    Can you please help me with deal registration for this opportunity?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-36" class="accordion-collapse collapse" aria-labelledby="flush-heading-36" data-bs-parent="#accordion-myquotes">
                                                    <div class="accordion-body">
                                                        <div class="help-answer wysiwyg"><!--This content should be editable with a standard WYSWYG editor-->
                                                            <p>Absolutely, please send through the details of your opportunity with full end user details to <a href="mailto:quotes@ingrammicro.com.au">quotes@ingrammicro.com.au</a> and we will aim to assist you if we can</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                                                                

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
                    <li><a href="">Home</a></li>
                    <li>Support</li>
                    <li>Need Help?</li>                    
                </ul></div>
            </div>
        </div>
    </div>
    <?php echo file_get_contents('includes/footer.html'); ?>
    <?php echo file_get_contents('includes/common-scripts.html'); ?>

  </body>
</html>