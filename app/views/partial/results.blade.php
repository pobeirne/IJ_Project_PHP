       <div class="container container-results">
            <ul class="nav nav-tabs">
                <li class="nav active"><a href="#A" data-toggle="tab">Pictures {{count($pics)}}</a></li>
                <li class="nav"><a href="#B" data-toggle="tab">Gifs {{count($gifs)}}</a></li>                
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                

                <div class="tab-pane fade in active" id="A">                    
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="well panel panel-default">
                                <div class="panel-body">  
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 ">                                          
                                        
                                        @if (count($pics) ==0)
                                            <p style="text-align:center;">No results found please try again ...</p>                                    
                                        @endif


                                        @if (count($pics) >=1)
                                            @for ($i=0; $i < count($pics) ; $i++) 
                                            <div class = "col-sm-6 col-md-3">
                                            <a href= "#sec2" class="thumbnail" id="pop">
                                                <img src="{{$pics[$i]}}" class="img-responsive" style="height:100px;"/> 
                                                 <p style="text-align:center;">Click to Enlarge</p>
                                            </a>
                                            </div>
                                        @endfor
                                        @endif

                                
                                        </div>
                                        <div class="clearfix"></div> 
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/panel-body-->
                            </div>
                            <!--/panel-->
                        </div>        
                    </div><!--/row-->
                </div><!--/end tab 1-->

                <div class="tab-pane fade" id="B">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="well panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 ">                                          
                                        
                                        @if (count($gifs) ==0)
                                             <p style="text-align:center;">No results found please try again ...</p>
                                            
                                        @endif

                                        @if (count($gifs) >=1)
                                            @for ($i=0; $i < count($gifs) ; $i++) 
                                            <div class = "col-sm-6 col-md-3">
                                            <a href = "#sec2" class= "thumbnail" id="pop">
                                                <img src="{{$gifs[$i]}}" class="img-responsive" style="height:100px;"/>
                                                 <p style="text-align:center;">Click to Enlarge</p>
                                            </a>
                                               </div>
                                        @endfor
                                        @endif
                                        
                                        </div>
                                        <div class="clearfix"></div>  
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/panel-body-->
                            </div>
                            <!--/panel-->
                        </div>
                    </div>
                </div><!--/end tab 2--> 

            </div>
        </div>
