<?php include('header.php');?>
            <!-- header section end-->

            <!--body wrapper start-->
            <div class="wrapper no-pad" >

            <!--mail inbox start-->
            <div class="mail-box">
            <aside class="sm-side">
                <div class="m-title">
                    <h3>Inbox</h3>
                    <span>14 unread mail</span>
                </div>
                <div class="inbox-body">
                    <a class="btn btn-compose" href="inbox-compose.html">
                        Compose
                    </a>
                </div>
                <ul class="inbox-nav inbox-divider">
                    <li class="active">
                        <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> Sent Mail</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-briefcase"></i> Important</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-star"></i> Starred </a>
                    </li>
                    <li>
                        <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
                    </li>
                    <li>
                        <a href="#"><i class=" fa fa-trash"></i> Trash</a>
                    </li>
                </ul>
                <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                    <li> <h4>Labels</h4> </li>
                    <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                    <li> <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a> </li>
                    <li> <a href="#"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
                    <li> <a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
                    <li> <a href="#"> <i class=" fa fa-sign-blank text-primary "></i> Office </a>
                    </li>
                </ul>
                <ul class="nav nav-pills nav-stacked labels-info inbox-divider ">
                    <li> <h4>Buddy online</h4> </li>
                    <li> <a href="#"> <i class=" fa fa-circle text-success"></i> Jhone Doe <p>I do not think</p></a>  </li>
                    <li> <a href="#"> <i class=" fa fa-circle text-danger"></i> Sumon <p>Busy with coding</p></a> </li>
                    <li> <a href="#"> <i class=" fa fa-circle text-muted "></i> Anjelina Joli <p>I out of control</p></a>
                    <li> <a href="#"> <i class=" fa fa-circle text-muted "></i> Jonathan Smith <p>I am not here</p></a>
                    <li> <a href="#"> <i class=" fa fa-circle text-muted "></i> Tawseef <p>I do not think</p></a>
                    </li>
                </ul>

                <div class="inbox-body text-center">
                    <div class="btn-group">
                        <a href="javascript:;" class="btn btn-default">
                            <i class="fa fa-power-off"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-default">
                            <i class="fa fa-cog"></i>
                        </a>
                    </div>
                </div>

            </aside>
            <aside class="lg-side" style="height: 1200px">
            <div class="inbox-head">
                <div class="mail-option">
                    <div class="pull-left all-check">
                        <label class="checkbox-custom check-success">
                            <input type="checkbox" value="check-all" id="checkbox1"> <label for="checkbox1"> </label>
                        </label>
                    </div>

                    <div class="btn-group">
                        <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
                            <i class=" fa fa-refresh"></i>
                        </a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" href="#">
                            <i class=" fa fa-archive"></i>
                        </a>
                        <a class="btn" href="#">
                            <i class=" fa fa-info-circle"></i>
                        </a>
                        <a class="btn" href="#">
                            <i class=" fa fa-trash"></i>
                        </a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" href="#">
                            <i class=" fa fa-folder"></i>
                        </a>
                        <a class="btn" href="#">
                            <i class=" fa fa-tag"></i>
                        </a>
                    </div>


                    <div class="btn-group hidden-phone">
                        <a class="btn mini blue" href="#" data-toggle="dropdown">
                            More
                            <i class="fa fa-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        </ul>
                    </div>
                    <ul class="unstyled inbox-pagination">
                        <li><span>1-50 of 2045</span></li>
                        <li>
                            <a href="#" class="np-btn"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li>
                            <a href="#" class="np-btn"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="inbox-body no-pad">

            <table class="table table-inbox table-hover">
            <tbody>
            <tr class="unread">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c1" id="c1"> <label for="c1"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img1.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message  dont-show">Vector Lab</td>
                <td class="view-message ">Lorem ipsum dolor imit set.</td>
                <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message  text-right">9:27 AM</td>
            </tr>
            <tr class="unread">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c2" id="c2" > <label for="c2"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img2.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Mosaddek Hossain</td>
                <td class="view-message">Hi Bro, How are you?</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">March 15</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c3" id="c3" > <label for="c3"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <span class="bg-success">D</span>
                    </a>
                </td>
                <td class="view-message dont-show">Dulal khan</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">June 15</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c4" id="c4" > <label for="c4"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img4.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook</td>
                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">April 01</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c5" id="c5" > <label for="c5"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <span class="bg-primary">M</span>
                    </a>
                </td>
                <td class="view-message dont-show">Mosaddek <span class="label label-danger pull-right">urgent</span></td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">May 23</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c6" id="c6" > <label for="c6"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img2.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook</td>
                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">March 14</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c7" id="c7" > <label for="c7"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <span class="bg-warning">R</span>
                    </a>
                </td>
                <td class="view-message dont-show">Rafiq</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">January 19</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c8" id="c8" > <label for="c8"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img4.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook <span class="label label-success pull-right">megazine</span></td>
                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">March 04</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c9" id="c9" > <label for="c9"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img1.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Mosaddek</td>
                <td class="view-message view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">June 13</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c10" id="c10" > <label for="c10"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img1.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook <span class="label label-info pull-right">family</span></td>
                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">March 24</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c11" id="c11" > <label for="c11"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img4.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Mosaddek</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">March 09</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c12" id="c12" > <label for="c12"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img2.jpg" alt=""/>
                    </a>
                </td>
                <td class="dont-show">Facebook</td>
                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">May 14</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c13" id="c13" > <label for="c13"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img3.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Sumon</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">February 25</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c14" id="c14" > <label for="c14"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img1.jpg" alt=""/>
                    </a>
                </td>
                <td class="dont-show">Facebook</td>
                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">March 14</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c15" id="c15" > <label for="c15"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img4.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Dulal</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">April 07</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c16" id="c16" > <label for="c16"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img1.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Twitter</td>
                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">July 14</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c17" id="c17" > <label for="c17"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img3.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Sumon</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">August 10</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c18" id="c18" > <label for="c18"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img2.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook</td>
                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">April 14</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c19" id="c19" > <label for="c19"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img1.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Mosaddek</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">June 16</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c20" id="c20" > <label for="c20"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img3.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Sumon</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">August 10</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c21" id="c21" > <label for="c21"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img4.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook</td>
                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">April 14</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c18" id="c18" > <label for="c18"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img2.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook</td>
                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">April 14</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c19" id="c19" > <label for="c19"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img1.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Mosaddek</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">June 16</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c20" id="c20" > <label for="c20"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img3.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Sumon</td>
                <td class="view-message">Lorem ipsum dolor sit amet</td>
                <td class="view-message inbox-small-cells"></td>
                <td class="view-message text-right">August 10</td>
            </tr>
            <tr class="">
                <td class="inbox-small-cells">
                    <label class="checkbox-custom check-success">
                        <input type="checkbox" value="c21" id="c21" > <label for="c21"> </label>
                    </label>
                </td>
                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                <td>
                    <a href="#" class="avatar">
                        <img src="img/img4.jpg" alt=""/>
                    </a>
                </td>
                <td class="view-message dont-show">Facebook</td>
                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                <td class="view-message text-right">April 14</td>
            </tr>
            </tbody>
            </table>
            </div>
            </aside>
            </div>
            <!--mail inbox end-->

            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <?php include('footer.php'); ?>