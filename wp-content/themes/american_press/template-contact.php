<?php

// Template Name: Contact

get_header();
?>

<div class="new-title">
    <div class="title-head">
        <h1>About & Contact</h1>
    </div>
</div>






<!-- customer Section end -->



   

<div class="contact-sec1 ">
    <div class="container">
        <div class="row coverage cover d-flex align-items-center">
       
            
               <div class="col-md-7">
               <div class="contact-card-detail">
                   <div class="conatct-card-title">
                       <h1>Company</h1>
                   </div>
                   <div class="contact-description">
                       <p>American Presswire is a high-quality news wire and photo agency that provides live sports, concert, stage, and conference event coverage in the USA and around the world. We produce and deliver with integrity and velocity. Our customers include newspapers, magazines, television networks, websites, professional sports teams and leagues, universities and other academic institutions, as well as private enterprise, non-profit organizations and individuals.
                           <br>
                           <br>
                        Images can be selected and licensed through our website. Customers can request edited or unedited files, and they can make special requests for archival footage. While some content is publicly available, complete libraries are available upon request. To obtain access to our libraries, please contact us.</p>
                   </div>
               
               </div>
                
               </div>
               <div class="col-md-5">
                <img src="./assets/images/ar3.png" alt="" class="img-fluid w-100">
              </div>
    
        </div>
    </div>
</div>

<div class="contact-sec2">
    <div class="container">
        <div class="row coverage cover d-flex align-items-center">
       
            <div class="col-md-5 order2">
                <img src="./assets/images/contact.png" alt="" class="img-fluid w-100">
              </div>
               <div class="col-md-7 order1">
               <div class="contact-card-detail">
                   <div class="conatct-card-title">
                       <h1>Content</h1>
                   </div>
                   <div class="contact-description">
                       <p>mages can be selected and licensed through our website. Customers can request edited or unedited files, and they can make special requests for archival footage. While some content is publicly available, complete libraries are available upon request. To obtain access to our libraries, please contact us.</p>
                   </div>
                   <div class="conatct-card-title">
                    <h1>Assignment & Consignment
                    </h1>
                </div>
                <div class="contact-description">
                    <p>Our photographers can be commissioned for special assignments. We accept freelance submissions for consignment provided they meet our quality standards.</p>
                </div>
               </div>
                
               </div>
               
    
        </div>
    </div>
</div>
<div class="contact-form">
    <div class="container">
        <div class="contact-detail">
            <div class="contact-info col-lg-12">
                <div class="contact-title d-flex align-items-center text-center">
                    <span>phone:</span>
                    <p class="pb-0 mb-0">1-888-630-3340</p>
                </div>
                <div class="contact-title d-flex align-items-center ">
                    <span>email:</span>
                    <p class="pb-0 mb-0">info@americanpresswire.com</p>
                </div>
                <div class="contact-title d-flex align-items-center">
                    <span>Office Address:</span>
                    <p class="pb-0 mb-0"> 29 Street, Melbourne City, USA # 34 Road, House #10</p>
                </div>
    
            </div>
            <div class="form">
                <!-- <form class=" col-lg-11 col-md-12 m-auto" >
                    <div class="form-info d-flex ">
                        <div class="input-field d-flex col-lg-4 col-md-12  ">
                            <input type="text" name="" placeholder="First Name" id="">
                            <input type="text" name="" placeholder="Last Name" id="">
                            <input type="text" name="" placeholder="Email" id="">
                            <input type="text" name="" placeholder="Website" id="">
    
                        </div>
                        <div class="textarea-field col-lg-7 col-md-12 ">
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="contact-btn">
                        <a href="">Contact</a>
                    </div>
                </form> -->
                <?= do_shortcode('[wpforms id="36"]');?>
               
            </div>
        </div>
    </div>
</div>

<div class="home-bottom mb-5">
    <div class="container ">
        <div class="col-lg-12 d-flex align-items-center btm-main ">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=2048&amp;height=450&amp;hl=en&amp;q=2880 Broadway, New York&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:450px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:450px;}.gmap_iframe {height:450px!important;}</style></div>
           </div>
    </div>
  </div>

 <?php get_footer();?> 