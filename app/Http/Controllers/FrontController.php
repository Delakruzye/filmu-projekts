<?php
  
namespace App\Http\Controllers;
// Use App\Models\Test;
Use App\Models\Movies;
Use App\Models\Actors;
use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
use stdClass;


class FrontController extends Controller
{
    public function MovieQ($id){
        // $dbquery = DB::table('movies')->where('movie_id', '/title/'.$id.'/')->get();
        // DB::table('movies')->get();
        // $m = $movies->actors;
        // dd($dbquery);
        // if (empty($dbquery)){
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/find?q=".$id,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                    "X-RapidAPI-Key: f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f"
                ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl); 
            
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                echo $response;
            }
        // $this->SaveMovieData($response);
        // }
        // else
        // {
        //     $resultobj = new stdClass();
        //     $resobj = new stdClass();
        //     $object = new stdClass();

        //     $res = array($resobj);

        //     $resultobj->results=$res;

        //     $resobj->id=$dbquery[0]->movie_id;
        //     $resobj->title=$dbquery[0]->filmname;
        //     $resobj->year=$dbquery[0]->year;
        //     $resobj->runningTimeInMinutes=$dbquery[0]->runtime;
        //     $resobj->image=$object;
        //     $object->url=$dbquery[0]->url;

        //     $response = json_encode($resultobj);
        //     echo $response;
        //     // dd($resultobj);
        //     // $actors = Actors::with('actor_id')->find($id);
        //     // dd($actors);
        //     $user = actors::with('movie_id')->get();
            
        //     dd($user);
        // }
    }

    public function Credits($id){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-full-credits?tconst=".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                "X-RapidAPI-Key: f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function genres($id){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-genres?tconst=".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                "X-RapidAPI-Key: f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function alike($id){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-more-like-this?tconst=".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                "X-RapidAPI-Key: f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function shortdata($id){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/find?q=".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                "X-RapidAPI-Key: f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
            }
                

    public function ActorBio($aid){
        // $dbquery = DB::table('actors')->where('actor_id', '/name/'.$aid.'/')->get();
        //  Actors::where('actor_id', $aid)->get();
        // if (empty($dbquery)){
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://imdb8.p.rapidapi.com/actors/get-bio?nconst=".$aid,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                    "X-RapidAPI-Key: f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                echo $response;
            }
            // $this->SaveActorData($response);

        // }
        // else{
        //     $object = new stdClass();

        //     $imgobj = new stdClass();

        //     $object->id=$dbquery[0]->actor_id;
        //     $imgobj->url=$dbquery[0]->picurl;
        //     $object->image=$imgobj;
        //     $object->name=$dbquery[0]->actorname;
        //     $object->realName=$dbquery[0]->realname;
        //     $object->birthDate=$dbquery[0]->birthyear;
        //     $object->birthPlace=$dbquery[0]->birthplace;
        //     $object->miniBios=$dbquery[0]->bio;
        //     $object->trademarks=$dbquery[0]->trademarks;
        //     $response = json_encode($object);
        //     // dd($object);
        //     echo $response;
        // }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actor()
    {
        return view('actor');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function movies()
    {
        return view('movies');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reviews()
    {
        return view('reviews');
    }
    public function aboutFilm($id)
    {
        $a = ['id'=>$id];
        return view('aboutFilm', $a);
    }
    public function aboutActor($aid)
    {
        $b = ['aid'=>$aid];
        return view('aboutActor', $b);
    }

// public function SaveActorData($request){
//     $request = json_decode($request);
//     $array = $request->trademarks;
//     $a1 = serialize($array);
    // $unserialized_array = unserialize($serialized_array);
     
    // var_dump($serialized_array);
    // var_dump($unserialized_array); 
    // $actors = $request->actors()->get();
    // dd($actors);
    // $a =
    // [
    //     'actor_id'=>$request->id,
    //     'actorname'=>$request->name,
    //     'realname'=>$request->realName,
    //     'picurl'=>$request->image->url,
    //     'birthyear'=>$request->birthDate,
    //     'birthplace'=>$request->birthPlace,
    //     'bio'=>$request->miniBios[0]->text,
    //     'trademarks'=>$a1
    // ];
    // var_dump($a);
    // Actors::create($a);
    // dd($request->trademarks);
    // $c = 
    // [
    // ]
    // dd($a);
    // dd($b);

// }

    // public function SaveMovieData($request)
    // {
    //     $request = json_decode($request);
        
    //     $b = 
    //     [
    //         'movie_id'=>$request->results[0]->id,
    //         'filmname'=>$request->results[0]->title,
    //         'url'=>$request->results[0]->image->url,
    //         'year'=>$request->results[0]->year,
    //         'runtime'=>$request->results[0]->runningTimeInMinutes
    //     ]; 
    //     Movies::create($b);

// dd($request);
    // }
};


