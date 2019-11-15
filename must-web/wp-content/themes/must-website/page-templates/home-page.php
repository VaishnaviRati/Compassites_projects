<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>

  <section class="section-block">
    <div class="row image-section">
      <div class="center-img col-md-12">
        <img src="<?php echo get_template_directory_uri();?>/images/construct1.jpeg" alt="construct"/>
        <div class="bind-data"> 
          <h6>Must-innosoft</h6>
          <h4>
            Work And Monitor From Anywhere
          </h4>
        </div>
        <div class="btn-block">
          <button type="button" class="btn btn-success learn-more">Learn More </button>
        </div>       
      </div>     
      <div class="col-md-6 pad-0 img-block">
        <img src="<?php echo get_template_directory_uri();?>/images/pattern1.jpg" alt="ptn1"/>
      </div>
      <div class="col-md-6 pad-0 img-block">
          <img src="<?php echo get_template_directory_uri();?>/images/pattern2.jpg" alt="ptn2"/>
      </div>
    </div>
    <div class=" carousel-block">
      <div class="focus-heading col-md-7">      
        <h2>We are mainly focused
            on making <span>your work so easy</span>
        </h2>
      </div> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-7">
                     <h3>Must 365 Cost Management innosoft</h3>
                     <p>Single collaborative online business partner to plan and manage ongoing
                       construction projects,resources,timelines and budgets at your own comfort from anywhere
                       on any device throughout 365 days under one MUST cloud platform.
                     </p>
                  </div>
                  <div class="col-md-5 slide-img">
                      <img src="<?php echo get_template_directory_uri();?>/images/slide1.jpg" alt="ptn2"/>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-7">
                         <h3>Supervise Financial Status</h3>
                         <p> Schedule budgets and timeline,monitor progress and expenses,determine 
                           profit and loss and compare "budget" versus "actuals".
                         </p>
                      </div>
                      <div class="col-md-5 slide-img">
                          <img src="<?php echo get_template_directory_uri();?>/images/slide2.jpg" alt="ptn2"/>
                      </div>
                    </div>
                  </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-7">
                         <h3>Simplifying Project Planning,Progess & Reports</h3>
                         <p>Leverage project online database with all detailed information and utilize various integration
                           with automatic notification and much more.
                         </p>
                      </div>
                      <div class="col-md-5 slide-img">
                          <img src="<?php echo get_template_directory_uri();?>/images/slide3.jpg" alt="ptn2"/>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-7">
                          <h3>Gain Clarity & Control</h3>
                           <p>Know the daily work progress status of your project.Real-time
                             information on performance,progress,resources,timeline,budgets
                             and productivity
                           </p>
                        </div>
                        <div class="col-md-5 slide-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/slide4.jpg" alt="ptn2"/>
                        </div>
                      </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
            </div>            
          </div>
      </div>
    </div>
    <div class="row tile-section">
       <div class="tile-1 col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/images/vision.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span>Our Vision</span>
            <p class="card-text">
              To transform the construction industry that redefines the project planning, construction
              and managaement processes which the client can expect through our constant innovative ideas
              and approach that are being integrated in our cloud based MUST innosoft online applications.
            </p>           
          </div>
          <a class="more-details"><span>More</span><i class="fas fa-chevron-down"></i></a>          
        </div>
       </div>
       <div class="tile-2 col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/images/mission.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span>Our Mission</span>
            <p class="card-text">
              MUST innosoft aims is to be a global software organisation which believe and invest in technology to provide top quality
              professional software applications in support of a wide range of construction industry services and to deliver result-oriented, COST
              effective and project specific or customised solutions to our clients in a timely and COST effective manner.
            </p>
          </div>
          <a class="more-details"><span>More</span><i class="fas fa-chevron-down"></i></a> 
        </div>
       </div>
       <div class="tile-3 col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/images/value.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span>Our Values</span>
            <p class="card-text">
              MUST innosoft believes in discovering the value and avoiding the risk using technologies on every step of
              the end-to-end construction processes that raises a new set of strategic choices related to value. Those choices 
              deal with how value is created through constant innovative approach within firms and redistributed among industry
              players,societies and countries to build a better world for current and future generations.
            </p>
          </div>
          <a class="more-details"><span>More</span><i class="fas fa-chevron-down"></i></a> 
        </div>
       </div>
    </div>
    <div class="about-main-block">
      <div class="row about-software-block1">
          <div class="col-md-6 highlight-img">
            <img src="<?php echo get_template_directory_uri();?>/images/highlight1.png" alt="highlight"/>
          </div>
          <div class="col-md-6 about-content">
            <h2>Who We Are?</h2>
            <p>
              We are Single Collaborative innovative online software provider to assist your company 
              for better planning and management of all your ongoing construction projects,resources,timelines
              and budgets at your own comfort from anywhere on any device throughout 365 days under one MUST cloud 
              platform.
            </p>
          </div>
          </div>
          <div class="row about-software-block2">
              <div class="col-md-6 about-content">
              <h2>How We Work?</h2>
              </div>
              <div class="col-md-6 highlight-img">
                  <img src="<?php echo get_template_directory_uri();?>/images/highlight2.png" alt="highlight"/>
              </div>
          </div>
    </div>
    <div class="contact-section">
    
        <div class="container">
            <div class="row contact-block">
                <div class="col-md-6">
                  <div class="contact-details">
                    <p>CONTACT</p>
                    <h1>
                      Get in touch with us
                    </h1>
                    <hr>
                    <p><i class="icon-call" style="color:#2c313e;"></i> +61 (0) 7 8392 2948</p>
                    <p><i class="icon-mail" style="color:#2c313e;"></i> noreply@envato.com</p>
                    <div class="snd-button">
                      <a class="btn  btn-success" href="mailto:noreply@mustinnosoft.com">
                          <span>Send a message</span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-6 address-section">
                  <div class="address-block">
                      <h3 style="font-weight:300;">Our address</h3>
                      <hr class="no_line" style="margin:0 auto 10px">
                      <p> <i class="icon-location" style="color:#2c313e; font-size:20px;"></i> Envato<br> 
                        <i class="icon-location" style="opacity:0;font-size:20px;"></i> 
                        Level 13, 2 Elizabeth St,<br> 
                        <i class="icon-location" style="opacity:0;font-size:20px;"></i> 
                        Melbourne, Victoria 3000 Australia
                      </p>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </section>


 <!--  <section class="section-block">
    <div class="row image-section">
      <div class="center-img col-md-12">
        <img src="<?php echo get_template_directory_uri();?>/images/construct1.jpeg" alt="construct"/>
        <div class="bind-data"> 
          <h6>Must-innosoft</h6>
          <h4>
            Work And Monitor From Anywhere
          </h4>
        </div>
        <div class="btn-block">
          <button type="button" class="btn btn-success">Learn More </button>
        </div>       
      </div>     
      <div class="col-md-6 pad-0 img-block">
        <img src="<?php echo get_template_directory_uri();?>/images/pattern1.jpg" alt="ptn1"/>
      </div>
      <div class="col-md-6 pad-0 img-block">
          <img src="<?php echo get_template_directory_uri();?>/images/pattern2.jpg" alt="ptn2"/>
      </div>
    </div>
    <div class=" carousel-block">
      <div class="focus-heading col-md-7">      
        <h2>We are mainly focused
            on making <span>your work so easy</span>
        </h2>
      </div> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-7">
                     <h3>Must 365 Cost Management innosoft</h3>
                     <p>Single collaborative online business partner to plan and manage ongoing
                       construction projects,resources,timelines and budgets at your own comfort from anywhere
                       on any device throughout 365 days under one MUST cloud platform.
                     </p>
                  </div>
                  <div class="col-md-5 slide-img">
                      <img src="<?php echo get_template_directory_uri();?>/images/slide1.jpg" alt="ptn2"/>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-7">
                         <h3>Supervise Financial Status</h3>
                         <p> Schedule budgets and timeline,monitor progress and expenses,determine 
                           profit and loss and compare "budget" versus "actuals".
                         </p>
                      </div>
                      <div class="col-md-5 slide-img">
                          <img src="<?php echo get_template_directory_uri();?>/images/slide2.jpg" alt="ptn2"/>
                      </div>
                    </div>
                  </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-7">
                         <h3>Simplifying Project Planning,Progess & Reports</h3>
                         <p>Leverage project online database with all detailed information and utilize various integration
                           with automatic notification and much more.
                         </p>
                      </div>
                      <div class="col-md-5 slide-img">
                          <img src="<?php echo get_template_directory_uri();?>/images/slide3.jpg" alt="ptn2"/>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-7">
                          <h3>Gain Clarity & Control</h3>
                           <p>Know the daily work progress status of your project.Real-time
                             information on performance,progress,resources,timeline,budgets
                             and productivity
                           </p>
                        </div>
                        <div class="col-md-5 slide-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/slide4.jpg" alt="ptn2"/>
                        </div>
                      </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
            </div>            
          </div>
      </div>
    </div>
    <div class="row tile-section">
       <div class="tile-1 col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/images/vision.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span>Our Vision</span>
            <p class="card-text">
              To transform the construction industry that redefines the project planning, construction
              and managaement processes which the client can expect through our constant innovative ideas
              and approach that are being integrated in our cloud based MUST innosoft online applications.
            </p>
          </div>
        </div>
       </div>
       <div class="tile-2 col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/images/mission.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span>Our Mission</span>
            <p class="card-text">
              MUST innosoft aims is to be a global software organisation which believe and invest in technology to provide top quality
              professional software applications in support of a wide range of construction industry services and to deliver result-oriented, COST
              effective and project specific or customised solutions to our clients in a timely and COST effective manner.
            </p>
          </div>
        </div>
       </div>
       <div class="tile-3 col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/images/value.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span>Our Values</span>
            <p class="card-text">
              MUST innosoft believes in discovering the value and avoiding the risk using technologies on every step of
              the end-to-end construction processes that raises a new set of strategic choices related to value. Those choices 
              deal with how value is created through constant innovative approach within firms and redistributed among industry
              players,societies and countries to build a better world for current and future generations.
            </p>
          </div>
        </div>
       </div>
    </div>
    <div class="about-main-block">
      <div class="row about-software-block1">
          <div class="col-md-6 highlight-img">
            <img src="<?php echo get_template_directory_uri();?>/images/highlight1.png" alt="highlight"/>
          </div>
          <div class="col-md-6 about-content">
            <h2>Who We Are?</h2>
          </div>
          </div>
          <div class="row about-software-block2">
              <div class="col-md-6 about-content">
              <h2>How We Work?</h2>
              </div>
              <div class="col-md-6 highlight-img">
                  <img src="<?php echo get_template_directory_uri();?>/images/highlight2.png" alt="highlight"/>
              </div>
          </div>
    </div>
    <div class="contact-section">
    
        <div class="container">
            <div class="row contact-block">
                <div class="col-md-6">
                  <div class="contact-details">
                    <p>CONTACT</p>
                    <h1>
                      Get in touch with us
                    </h1>
                    <hr>
                    <p><i class="icon-call" style="color:#2c313e;"></i> +61 (0) 7 8392 2948</p>
                    <p><i class="icon-mail" style="color:#2c313e;"></i> noreply@envato.com</p>
                    <div class="snd-button">
                      <a class="btn  btn-success" href="mailto:noreply@mustinnosoft.com">
                          <span>Send a message</span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-6 address-section">
                  <div class="address-block">
                      <h3 style="font-weight:300;">Our address</h3>
                      <hr class="no_line" style="margin:0 auto 10px">
                      <p> <i class="icon-location" style="color:#2c313e; font-size:20px;"></i> Envato<br> 
                        <i class="icon-location" style="opacity:0;font-size:20px;"></i> 
                        Level 13, 2 Elizabeth St,<br> 
                        <i class="icon-location" style="opacity:0;font-size:20px;"></i> 
                        Melbourne, Victoria 3000 Australia
                      </p>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </section> -->
  

<?php
get_footer();