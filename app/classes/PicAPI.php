<?php
class PicAPI
{
    
    var $APIs = array(       

        'flicker.search' => 'http://api.flickr.com/services/feeds/photos_public.gne?xmlcallback=?',
        'giphy.search' => 'http://api.giphy.com/v1/gifs/search?'

        );


    public function GetFlickrPictures($searchterm) {


        $term_arr = str_word_count($searchterm, 1);
        $term = ''; 

        if (count($term_arr) >1) {
            foreach ($term_arr as $key => $value) {
                $term = $term.','.$value;
            }
        }
        else {
            $term = $searchterm;
        }

        $url = $this->getApi('flicker.search');        
        $response = Unirest::get($url . '&tags='. $term . '&tagmode=all'. '&format=xml');        
        return new SimpleXMLElement($response->body);
    }
    
    public function GetGiphyPictures($api_key,$searchterm) {

        $url = $this->getApi('giphy.search');  
        $response = Unirest::get($url. 'q='. $searchterm . '&api_key='. $api_key .'&offset=0');      
        return json_decode($response->raw_body, true);
    }  
    
    
    public function getApi($name) {
        return $this->APIs[$name];
    }
}

