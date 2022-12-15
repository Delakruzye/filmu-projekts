<?php
  
namespace App\Http\Controllers;
// Use App\Models\Test;
Use App\Models\Movies;
Use App\Models\Actors;
use Illuminate\Http\Request;
use DB;
  
class FrontController extends Controller
{

    public function MovieQ($id){
        // $movies = Movies::where('movie_id', $id)->get();
        // if (empty($movies)){

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
                    "X-RapidAPI-Key: 972bcb48f1msh9d516114f392b1fp1b7897jsn48256bd316bd"
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
    }

    public function ActorBio($aid){
        // $actors = Actors::where('actor_id', $aid)->get();
        // if (empty($movies)){
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
                    "X-RapidAPI-Key: 972bcb48f1msh9d516114f392b1fp1b7897jsn48256bd316bd"
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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
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
    public function aboutUs()
    {
        return view('aboutUs');
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


    public function SaveMovieData($request)
    {
        $request = json_decode($request);
        
        $b = 
        [
            'movie_id'=>$request->results[0]->id,
            'filmname'=>$request->results[0]->title,
            'url'=>$request->results[0]->image->url,
            'year'=>$request->results[0]->year,
            'runtime'=>$request->results[0]->runningTimeInMinutes
        ]; 
        dd($request);
// dd($request);

        // $array = $request->trademarks;
        // $a1 = serialize($array);
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
        // Movies::create($b);
        // Actors::create($a);
        // dd($request->trademarks);
        // $c = 
        // [

        // ]
        // dd($a);
        // dd($b);
    }
};
    // Movies::create($b);
    // DB::table('student_details')->insert($b);
    // dd($request->results[0]);
    // foreach ($request->results[0]["principals"] as $keys=>$actor){
    //     dd($actor["roles"]);
    // }
    // dd($request->results[0]["principals"]);
    //dd($request->results[0]["principals"][0]["name"]);


