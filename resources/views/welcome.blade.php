@extends('layouts.dashboard')

@section('add-css')

    
@endsection



@section('content')

    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- End Indicators bullet -->				
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                
                <!-- single slide -->
                <div class="item active" style="background-image: url(img/banner.jpg);">
                    <div class="carousel-caption">
                        <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Super buzz Experience</h2>

                        <!--<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3>-->
                        <p data-wow-duration="1000ms" class="wow slideInRight animated">Experiencias en Transformación Digital e Inteligencia Comercial.
                            Somos un Estudio de E.Commerce, Estrategia de Negocios, Gestión Comercial especializado en Digital e Innovación. 
                            Enfocados en resultados desde hace más de 15 años.</p>
                        

                            <button type="button" class="btn">Book Now</button>
                            <button type="button" class="btn">Contactenos</button>

                        

                            
                        <ul class="social-links text-center mt-2">
                            <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end single slide -->
                
            
                
            </div>
            <!-- End Wrapper for slides -->
            
        </div>
    </section>


    <section id="features" class="features">
        <div class="container">
            <div class="row">
            
                <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <h2>Features</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <!-- service item -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-github fa-2x"></i>
                        </div>
                        
                        <div class="service-desc">
                            <h3>Branding</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->
                
                <!-- service item -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-pencil fa-2x"></i>
                        </div>
                        
                        <div class="service-desc">
                            <h3>Development</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->
                
                <!-- service item -->
                <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        
                        <div class="service-desc">
                            <h3>Consulting</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->
                    
            </div>
        </div>
    </section>

    
    <section id="works" class="works clearfix">
        <div class="container">
            <div class="row">
            
                <div class="sec-title text-center">
                    <h2>Works</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>
                
                <div class="sec-sub-title text-center">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                </div>
                
                <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                    <ul class="text-center">
                        <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                        <li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
                        <li><a href="javascript:;" data-filter=".web" class="filter">web</a></li>
                        <li><a href="javascript:;" data-filter=".logo-design" class="filter">logo design</a></li>
                        <li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        
        <div class="project-wrapper">
        
            <figure class="mix work-item branding">
                <img src="img/works/item-1.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            
            <figure class="mix work-item web">
                <img src="img/works/item-2.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            
            <figure class="mix work-item logo-design">
                <img src="img/works/item-3.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            
            <figure class="mix work-item photography">
                <img src="img/works/item-4.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
        
            <figure class="mix work-item branding">
                <img src="img/works/item-5.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            
            <figure class="mix work-item web">
                <img src="img/works/item-6.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            
            <figure class="mix work-item logo-design">
                <img src="img/works/item-7.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            
            <figure class="mix work-item photography">
                <img src="img/works/item-8.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            
        </div>


    </section>


    <section id="team" class="team">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                    <h2>Meet Our Team</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>
                
                <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                </div>

                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="member-thumb">
                        <img src="img/team/member-1.png" alt="Team Member" class="img-responsive">
                        <figcaption class="overlay">
                            <h5>voluptatem quia voluptas </h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>John Filmr Doe</h4>
                    <span>Managing Director</span>
                </figure>
                <!-- end single member -->
                
                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="member-thumb">
                        <img src="img/team/member-2.png" alt="Team Member" class="img-responsive">
                        <figcaption class="overlay">
                            <h5>voluptatem quia voluptas </h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>Martin Matrone</h4>
                    <span>Lead Developer</span>
                </figure>
                <!-- end single member -->
                
                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="member-thumb">
                        <img src="img/team/member-3.png" alt="Team Member" class="img-responsive">
                        <figcaption class="overlay">
                            <h5>voluptatem quia voluptas </h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>Steve Flaulkin</h4>
                    <span>Sr. UI Designer</span>
                </figure>
                <!-- end single member -->
                
                <!-- single member -->
                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="member-thumb">
                        <img src="img/team/member-1.png" alt="Team Member" class="img-responsive">
                        <figcaption class="overlay">
                            <h5>voluptatem quia voluptas </h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </div>
                    <h4>John Filmr Doe</h4>
                    <span>Managing Director</span>
                </figure>
                <!-- end single member -->
                
            </div>
        </div>
    </section>
    


@endsection

@section('links')

@endsection


@section('add-js')
  
@endsection
