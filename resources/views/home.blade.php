 @extends('layouts.app')
 @section('content')
 <div class="banner">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403360.16353187413!2d144.84478329036483!3d-37.8310028845638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1430221414094" width="100%" height="500" frameborder="0" style="border:0"></iframe>
</div>
<div class="banner-info">
    <div class="container">
        <div class="reservation">
            <ul>
                <li class="boo">
                    <span>1</span><h4>Drop pin onto the location on map</h4>
                    <div class="clearfix"></div>
                </li>
                <li class="boo">
                    <span>2</span><h4>Add a Species found at location</h4>
                    <div class="clearfix"></div>
                </li>
                <li class="span1_of_1">
                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">Select Fish</option>
                            <option value="null">Stands out </option>
                            <option value="AX">where lets</option>
                            <option value="AX">vitae tortor</option>
                        </select>
                    </div>
                </li>
                <li class="span1_of_3">
                    <div class="date_btn">
                        <form action="addlocation.html">
                            <input type="submit" value="Add Location">
                        </form>
                    </div>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>
<div class="loc-lov">
    <div class="container">
        <div class="loc-left">
            <ul>
                <li><a href="#"><i class="adm"></i></a></li>
                <li><a href="#"><i class="set"></i></a></li>
                <li><a href="#"><i class="str"></i></a></li>
                <li><a href="#"><i class="plc"></i></a></li>
                <li><a href="#"><i class="plus"></i></a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="loc-right">
            <div class="loc-top">
                <h3>Locations you’ve Add</h3>
                <p>Lets get some dunny no worries come a bloke. Stands out like a ridgy-didge where lets throw a sickie. </p>
                <div class="blas">
                    <li class="wicked">Blaz’s wickaed ass fishing spot..</li>
                    <li class="mullet">Mullet, Australian Salmon,</li>
                    <li class="see"><a href="#">See Location</a></li>
                    <li class="com"><a href="#">01</a></li>
                </div>
                <div class="ball">
                    <li class="wicked">Ball Bag River</li>
                    <li class="mullet">Australian Salmon, Mullet, Trevally,</li>
                    <li class="see"><a href="#">See Location</a></li>
                    <li class="loc"><a href="#">13</a></li>
                </div>
                <div class="blas">
                    <li class="wicked">Aireys Inlet - Eagle Rock</li>
                    <li class="mullet">Beach east side of Aire River...</li>
                    <li class="see"><a href="#">See Location</a></li>
                    <li class="com"><a href="#">01</a></li>
                </div>
                <div class="ball">
                    <li class="wicked">Ball Bag River</li>
                    <li class="mullet">Australian Salmon, Mullet, Trevally,</li>
                    <li class="see"><a href="#">See Location</a></li>
                    <li class="loc"><a href="#">13</a></li>
                </div>
            </div>
            <div class="loc-bottom">
                <h3>Recent locations you’ve rated</h3>
                <p>Lets get some dunny no worries come a bloke. Stands out like a ridgy-didge where lets throw a sickie.</p>
                <div class="air">
                    <li class="wicked">Aire River</li>
                    <li class="mullet">Mullet, Australian Salmon,</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="ball">
                    <li class="wicked">Ball Bag River</li>
                    <li class="mullet">Australian Salmon, Mullet, Trevally,</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="air">
                    <li class="wicked">Aireys Inlet - Eagle Rock</li>
                    <li class="mullet">Beach east side of Aire River...</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="ball">
                    <li class="wicked">Ball Bag River</li>
                    <li class="mullet">Australian Salmon, Mullet, Trevally,</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="air">
                    <li class="wicked">Aireys Inlet - Eagle Rock</li>
                    <li class="mullet">Beach east side of Aire River...</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="ball">
                    <li class="wicked">Ball Bag River</li>
                    <li class="mullet">Australian Salmon, Mullet, Trevally,</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="air">
                    <li class="wicked">Aireys Inlet - Eagle Rock</li>
                    <li class="mullet">Beach east side of Aire River...</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="ball">
                    <li class="wicked">Ball Bag River</li>
                    <li class="mullet">Australian Salmon, Mullet, Trevally,</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
                <div class="air">
                    <li class="wicked">Aireys Inlet - Eagle Rock</li>
                    <li class="mullet">Beach east side of Aire River...</li>
                    <li class="st"><a href="#"><img src="images/star.png" class="img-responsive" alt=""></a></li>
                    <li class="iew"><a href="#">View Location on Map</a></li>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
@stop