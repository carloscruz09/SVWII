<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Portal de <?=$this->session->userdata('perfil')?>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                      <!-- Start panel body--> 
                        <div class="row">
                            <div class="col-md-8">
                                <div class="event-calendar clearfix">
                                    <div class="col-lg-7 calendar-block">
                                        <div class="cal1 ">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 event-list-block">
                                        <div class="cal-day">
                                            <span>Today</span>
                                            Friday
                                        </div>
                                        <ul class="event-list">
                                            <li>Lunch with jhon @ 3:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Coffee meeting with Lisa @ 4:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Skypee conf with patrick @ 5:45 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Gym @ 7:00 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Dinner with daniel @ 9:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>

                                        </ul>
                                        <input type="text" class="form-control evnt-input" placeholder="NOTES">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <!-- Reloj con alarma-->
                            <div class="col-md-4">
                                <div class="profile-nav alt">
                                    <section class="panel">
                                        <div class="user-heading alt clock-row terques-bg">
                                            <h1>December 14</h1>
                                            <p class="text-left">2014, Friday</p>
                                            <p class="text-left">7:53 PM</p>
                                        </div>
                                        <ul id="clock">
                                            <li id="sec"></li>
                                            <li id="hour"></li>
                                            <li id="min"></li>
                                        </ul>

                                        <ul class="clock-category">
                                            <li>
                                                <a href="#" class="active">
                                                    <i class="ico-clock2"></i>
                                                    <span>Clock</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ico-alarm2 "></i>
                                                    <span>Alarm</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ico-stopwatch"></i>
                                                    <span>Stop watch</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class=" ico-clock2 "></i>
                                                    <span>Timer</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </section>

                                    </div>
                                </div>
                                <!-- Reloj con alarma-->
                        </div>     
                        
                    </div>
                    <!-- End panel body-->
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
