<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    </head>
    <body >
       <div class="myheader">

        <nav class="primary-navigation">
            <ul class="nav-list">
              <li style="margin-right: 20%"><a href="#home">iLanding</a></li>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#features">Features</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle">Drop down</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Option 1</a></li>
                </ul>
            </li>
            <li style="margin-left:10%"><a class="get_started" type="button">Get Started</a></li>
            </ul>
          </nav>
    </div>

    <section id="home" class="homesection">
        @foreach($homeimage as $post)
        <div class="text-image-container">
            <div class="text-left">
                <div class="upper_desc">
                    <i class="fa fa-cog" aria-hidden="true"> </i> {{$post->upper_section}}
                </div>
                    <h1>{{ $post->heading}}</h1>

                <p>{{$post->description}}</p>
                <div class="row home_buttons">
                    <div class="col-lg-6">
                        <button class="get_started_again" type="button">{{$post->button_message}}</button>
                    </div>
                    <div class="col-lg-6">
                        <a class="play_button" type="button"><i class="fa fa-play-circle" aria-hidden="true"> {{$post->video_button_message}}</i></a>
                    </div>
                </div>

            </div>
            <div class="image-right">
                <img src="{{asset('storage/public/images/homes' .$post->banner_image) }}">
            </div>

        </div>
        <div class="stats">
         <div class="row">
            @foreach($stats as $stat)
           <div class="col-md-3">
                <h2>{{$stat->title}}</h2>
                <p>{{$stat->description}}</p>
           </div>
           @endforeach
         </div>
        </div>
        @endforeach
    </section>
    <section id="about" class="aboutsection">
        @foreach($about_info as $info)
        <div class="text-image-container">
            <div class="text-left">
                <div class="upper_title">
                    <p>{{ $info->title}}</p>
                </div>
                <h2>{{$info->heading}}</h2>
                <p>{{$info->description}}</p>
                <div class="row ">
                    <div class="col-lg-6">
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i>  {{$info->itemone}}</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{$info->itemtwo}}</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{$info->itemthree}}</p>
                    </div>
                    <div class="col-lg-6">
                       <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{$info->itemfour}}</p>
                       <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{$info->itemfive}}</p>
                       <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{$info->itemsix}}</p>
                    </div>
                </div>

                <div class="row profile_section">
                    <div class="col-md-6">
                     <p><img src="{{asset('storage/public/images/profiles' .$info->leader_profile) }}">  {{$info->leader_name}} <br> {{$info->leader_title}}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{$info->call_description}}</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> {{$info->phone_number}}</p>
                    </div>
                </div>

            </div>
            <div class="image-right">
                <img src="{{asset('storage/public/images/homes' .$post->banner_image) }}">
            </div>

        </div>

        @endforeach
     </section>
     <section class="features" id="features">

            @foreach($features_info as $info)
            <h1 style="text-align: center">{{$info->menu_title}}</h1>
            <div class="blue-line"></div> <br>
            <p style="text-align: center">{{$info->menu_heading}}</p>
            <br>
            <div></div>
            <div class="outer-toggle">
                <div class="row">
                    <div class="col-md-4 inner-toggle-1"> <span>{{$info->toggleone}}</span></div>
                    <div class="col-md-4"> <span >{{$info->toggletwo}}</span></div>
                    <div class="col-md-4"> <span >{{$info->togglethree}}</span></div>
                </div>

            </div>
            <div class="text-image-container">
                <div class="text-left">
                    <div class="featuretitle">
                        <h2>{{ $info->content_heading}}</h2>
                    </div>
                    <div class="line"></div>

                    <div class="profile_section">
                        <div class="col-lg-6">
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i>  {{$info->toggleone_desc}}</p>
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{$info->toggletwo_desc}}</p>
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i> {{$info->togglethree_desc}}</p>
                        </div>
                    </div>


                </div>
                <div class="image-right">
                    <img src="{{asset('storage/public/images/homes' .$post->banner_image) }}">
                </div>

            </div>
            <div class="row cards">
                <div class="col-md-3 cardone-color" >
                    <h2>{{$info->cardone}}</h2>
                    <p>{{$info->cardone_desc}}</p>
                </div>
                <div class="col-md-3 cardtwo-color" >
                    <h2>{{$info->cardtwo}}</h2>
                    <p>{{$info->cardtwo_desc}}</p>
                </div>
                <div class="col-md-3 cardthree-color" >
                    <h2>{{$info->cardthree}}</h2>
                    <p>{{$info->cardthree_desc}}</p>
                </div>
                <div class="col-md-3 cardfo-color">
                    <h2>{{$info->cardfour}}</h2>
                    <p>{{$info->cardfour_desc}}</p>
                </div>
            </div>
            @endforeach

     </section>

     <section class="calltoaction">
             @foreach ($call_info as $info)
                <h1>{{$info->title}}</h1>
                <p>{{$info->description}}</p>

                    <a style=" padding-top: 5px;
                        padding-bottom:20px;
                        margin-left:40%;
                        background-color: #1F82F6;
                        text-align: center;
                        border-color: #F3F8FE;
                        border-radius: 5px;
                        border-color: #fff;
                        margin-top: 3%;
                        margin-bottom: 5%;
                        color: #fff;" href="">{{$info->button_message}}</a>
             @endforeach
     </section>

     <section id="testimonials" class="testimonials">

        @foreach($testimonial_menu as $menu)
        <h1>{{$menu->menu_title}}</h1>
        <div class="blue-line"></div> <br>
        <p>{{$menu->menu_heading}}</p>
        @endforeach
        <br>

        <div class="row">
            @foreach ($testimonial_info as $info )
            <div class="col-md-6">
                <div class="card">
                    <img src="{{asset('storage/public/images/profiles' .$info->graphic) }}"  class="card-image">
                    <div class="card-content">
                        <h2 class="card-title"> {{$info->person}} </h2>
                        <h3 class="card-title"> {{$info->bio}} </h3>
                        <p class="card-description">
                            {{$info->comment}}
                        </p>
                    </div>
                </div>


            </div>
            @endforeach
        </div>

     </section>


     <section class="value">

        <div class="row">
            @foreach ($work_data as $data)
            <div class="col-md-3">

                <h1>{{$data->work_done}}</h1>
                <p>{{$data->value}}</p>

            </div>
            @endforeach
        </div>

     </section>
     <section id="services">
        @foreach($service_info as $info)
        <h1 style="text-align: center;margin-top:5%">{{$info->title}}</h1>
        <div class="blue-line"></div> <br>
        @endforeach
     </section>
     <section class="service">

         <div class="row">
            @foreach ($service_info as $info)

            <div class="col-md-6">
                <div class="calltoaction">
                    <h2>{{$info->serviceone}}</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calltoaction">
                    <h2>{{$info->servicetwo}}</h2>
                </div>
            </div>


         @endforeach
         </div>
         <div class="row">
            @foreach ($service_info as $info)

            <div class="col-md-6">
                <div class="calltoaction">
                    <h2>{{$info->servicethree}}</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calltoaction">
                    <h2>{{$info->servicefour}}</h2>
                </div>
            </div>


         @endforeach
         </div>


        </section>

        <section id="pricing">
            @foreach($pricing_info as $info)
            <h1 style="text-align: center;margin-top:5%">{{$info->menu_title}}</h1>
            <div class="blue-line"></div> <br>
            @endforeach
         </section>
         <section class="pricing">

             <div class="row">
                @foreach ($pricing_info as $info)

                <div class="col-md-4">
                    <div class="calltoaction">
                        <h2>{{$info->plan}}</h2>
                        <h1>{{$info->price}}</h1>
                        <p>{{$info->description}}</p>
                        <p>{{$info->featureone}}</p>
                        <p>{{$info->featuretwo}}</p>
                        <p>{{$info->featurethree}}</p>
                        <p>{{$info->featurefour}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="calltoaction">
                        <h2>{{$info->plan}}</h2>
                        <h1>{{$info->price}}</h1>
                        <p>{{$info->description}}</p>
                        <p>{{$info->featureone}}</p>
                        <p>{{$info->featuretwo}}</p>
                        <p>{{$info->featurethree}}</p>
                        <p>{{$info->featurefour}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="calltoaction">
                        <h2>{{$info->plan}}</h2>
                        <h1>{{$info->price}}</h1>
                        <p>{{$info->description}}</p>
                        <p>{{$info->featureone}}</p>
                        <p>{{$info->featuretwo}}</p>
                        <p>{{$info->featurethree}}</p>
                        <p>{{$info->featurefour}}</p>
                    </div>
                </div>


             @endforeach
             </div>

            </section>


       <script>
           const navigation = document.querySelector(".primary-navigation");
           const navigationHeight = navigation.offsetHeight;
           document.documentElement.style.setProperty(
             "--scroll-padding",
            navigationHeight + "px"
           );
       </script>
    </body>
</html>
