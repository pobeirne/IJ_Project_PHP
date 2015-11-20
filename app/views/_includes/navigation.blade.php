<div class="navbar navbar-inverse navbar-fixed-top " role="navigation">
	<div class="container">
		<div class="navbar-header">				
			<button type="button" class="navbar-toggle collapsed" 
			data-toggle="collapse" data-target=".navbar-collapse">					
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		  	<a class="navbar-brand" href="/">PictureMash</a>
		  	
	    </div>

	    <div class="navbar-collapse collapse"> 	
	    	<div class="nav navbar-nav navbar-right">
	      		<div class="col-lg-12 col-xs-12 col-sm-12 pull-right">
        		
 				{{ Form::open(array('url'=>'','class'=>'navbar-form', 'role'=>'search'))}}

            <div class="input-group">
                
                {{ 
                	Form::text('search', '', 
                    array('id'=>'sample', 
                    'class'=>'form-control',
                    'placeholder'=>'Enter a search phrase ...',
                    'maxlength' => 30,
                    'required' => true))
                }}

                <div class="input-group-btn">
                {{ 
                	Form::submit('Search', array('id'=>'searchBtn','class'=>'btn btn-primary'))
            	}}

                </div>
            </div>

            {{ 
            	Form::close()
            }}

     		 </div>
			</div>
		</div>	
	</div>
</div>


