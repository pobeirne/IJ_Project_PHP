<?php
class HomeController extends BaseController
{
    
    public function getSearchView() {

        $data['header'] = 'Welcome!';
        $data['title'] = 'Home';
        $data['description'] = 'Home Page';


		return View::make('home.search', $data);   
    }       


    public function getResultsView(){

        if (Input::has('_token')) {    
            if (Input::get('q')!='') {
                ##Form input
                #######################################################
                //Get all the input values
                $input = Input::all();
                //Get the search query string 
                $query = Input::get('q');

                ##Picture Api 
                #######################################################
                //Call API class method passing in the query string 
                 $pics = (new PicAPI)->GetFlickrPictures($query);
                //Create new empty array
                $pic_array = array();
                //Add each image link from pic xml results to array
                foreach ($pics->entry as $element) {       
                $pic_array[] = $element->link[1]['href'];          
                }        
                //Make array accessable in results view
                $data['pics'] = $pic_array; 
                #######################################################
        
                ##Gif Api
                #######################################################
                //Get Gif Api key from config file
                $giphy_key = Config::get('apikeys.giphy_key');
                //Call API class method passing in the Api key & query string 
                $gifs = (new PicAPI)->GetGiphyPictures($giphy_key ,$query);
                //Create new empty array
                $gif_array = array();
                //Add each image id from gif json results to array
                foreach($gifs['data'] as $element){     
                $gif_array[] = "http://media1.giphy.com//media//".$element['id']."//giphy.gif";        
                }
                //Make array accessable in results view
                $data['gifs'] = $gif_array; 

                //Return partial view and data
                return View::make('partial.results', $data);

                }else {

                    $data['errormsg'] = 'The input query is invalid or empty please refresh the web page and try again!';
                    return View::make('partial.errors', $data);
                }    
        

        }else {

            $data['errormsg'] = 'The form token is invalid please refresh the web page and try again!'; 

            return View::make('partial.errors', $data);
        }    
    }   
    
}
