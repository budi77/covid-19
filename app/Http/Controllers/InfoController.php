<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Charts\CovidChart;


class InfoController extends Controller
{
    //

    public function index()
    {

        $response = Http::get('https://api.kawalcorona.com/');
        $data = $response->json();

        $positif = Http::get('https://api.kawalcorona.com/positif');
        $data1 = $positif->json();
        
        $sembuh = Http::get('https://api.kawalcorona.com/sembuh');
        $data2 = $sembuh->json();

        $meninggal = Http::get('https://api.kawalcorona.com/meninggal');
        $data3 = $meninggal->json();

        $country= Http::get('https://pomber.github.io/covid19/timeseries.json');

        $country= $country->json();
        $country = $country['Malaysia'];


        return view('index', compact('data','data1','data2','data3','country'));


    }

    public function faq()
    {
        

        $c= Http::get('http://covid19-news.herokuapp.com/api/covid19/faqs');
        $c= $c->json();

        $source = $c['source'];

        $data = $c['data'];


        return view('/faq', compact('source','data'));



    }

    public function search(Request $request)
    {

        $country = $request->country;

        $stat = Http::get('https://coronavirus-19-api.herokuapp.com/countries/');

        

        $stat =  $stat->json();
        $stats = collect($stat)->where('country',$country);
        $todayCases = $stats->pluck('todayCases');
        
        $todayDeaths = $stats->pluck('todayDeaths');


        $active = $stats->pluck('active');
        $critical = $stats->pluck('critical');
        

        $c= Http::get('https://pomber.github.io/covid19/timeseries.json');

        $nama_negara = Http::get('https://api.kawalcorona.com/');
        $nama_negara =  $nama_negara->json();
        
        $nama_negara1 = collect($nama_negara)->flatten(1);
        $negara_sorted = $nama_negara1->sortBy('Country_Region');
        

        $c= $c->json();
        $cntry_name = $c[$country];

        $cntry = collect($cntry_name)->sortByDesc('confirmed');


        $labels = collect($cntry_name)->pluck('date');
        $confirmed = collect($cntry_name)->pluck('confirmed');
        $deaths = collect($cntry_name)->pluck('deaths');
        $recovered = collect($cntry_name)->pluck('recovered');



        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Positif', 'line', $confirmed)->options([
            'backgroundColor' => 'rgba(255, 159, 64, 0.2)',
            

        ]);
        $chart->dataset('Meninggal', 'line', $deaths)->options([
            'backgroundColor' => 'rgba(255, 99, 132, 0.2)',

        ]);
        $chart->dataset('Sembuh', 'line', $recovered)->options([
            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',

        ]);

       
        return view('country', compact('cntry','country','chart','negara_sorted','stats','todayCases','todayDeaths','active','critical'));



    }

    public function asean($type = 'confirmed')
    {


        $response = Http::get('https://api.kawalcorona.com/');
        $data = $response->json();

        $negara = collect($data)->flatten(1);

        $negara = $negara->whereIn('Country_Region', ['Malaysia','Singapore','Indonesia','Thailand','Vietnam','Philippines','Brunei','Laos','Cambodia']);



        $source = Http::get('https://pomber.github.io/covid19/timeseries.json');
        $data = $source->json();

        $malaysia = $data['Malaysia'];
        $indonesia = $data['Indonesia'];
        $thailand = $data['Thailand'];
        $vietnam = $data['Vietnam'];
        $philippines = $data['Philippines'];
        $singapore = $data['Singapore'];
        $brunei = $data['Brunei'];
        $laos = $data['Laos'];
        $cambodia = $data['Cambodia'];


        $labels = collect($malaysia)->pluck('date');
        $type = $type;

        $malaysia1 = collect($malaysia)->pluck($type);
        $indonesia1 = collect($indonesia)->pluck($type);
        $thailand1 = collect($thailand)->pluck($type);
        $vietnam1 = collect($vietnam)->pluck($type);
        $philippines1 = collect($philippines)->pluck($type);
        $singapore1 = collect($singapore)->pluck($type);
        $brunei1 = collect($brunei)->pluck($type);
        $laos1 = collect($laos)->pluck($type);
        $cambodia1 = collect($cambodia)->pluck($type);


        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->options([
            'title' => [
                'display' => true,
                'text' => strtoupper($type) . ' CASE', // or false, depending on what you want.
            ]
        ]);
        $chart->dataset('Malaysia', 'line', $malaysia1)->options([
            'borderColor' => '#5ac18e',
            'fill' => 'false',
            'borderWidth' => '3',
            'pointRadius' => '0.5',
            
        ]);
        $chart->dataset('Indonesia', 'line', $indonesia1)->options([
            'borderColor' => '#ff0000',
            'fill' => 'false',
            'borderWidth' => '3',
            'pointRadius' => '0.5',



        ]);
        $chart->dataset('Singapore', 'line', $singapore1)->options([
            'borderColor' => '#ffd700',
            'fill' => 'false',
            'borderWidth' => '3',
            'pointRadius' => '0.5',
        
            ]);
        $chart->dataset('Vietnam', 'line', $vietnam1)->options([
                'borderColor' => '#ee6123',
                'fill' => 'false',
                'borderWidth' => '3',
                'pointRadius' => '0.5',

                ]);
        $chart->dataset('Philippines', 'line', $philippines1)->options([
                    'borderColor' => '#800080',
                    'fill' => 'false',
                    'borderWidth' => '3',
                    'pointRadius' => '0.5',

                    ]);
        $chart->dataset('Thailand', 'line', $thailand1)->options([
                        'borderColor' => '#ff80ed',
                        'fill' => 'false',
                        'borderWidth' => '3',
                        'pointRadius' => '0.5',

        ]);
        $chart->dataset('Brunei', 'line', $brunei1)->options([
            'borderColor' => '#ff2224',
            'fill' => 'false',
            'borderWidth' => '3',
            'pointRadius' => '0.5',

        ]);
        $chart->dataset('Laos', 'line', $laos1)->options([
            'borderColor' => '#21618C',
            'fill' => 'false',
            'borderWidth' => '3',
            'pointRadius' => '0.5',

        ]);
        $chart->dataset('Cambodia', 'line', $cambodia1)->options([
            'borderColor' => '#BB8FCE',
            'fill' => 'false',
            'borderWidth' => '3',
            'pointRadius' => '0.5',

        ]);


        $malaysia2 = collect($malaysia)->pluck('deaths');
        $indonesia2 = collect($indonesia)->pluck('deaths');
        $thailand2 = collect($thailand)->pluck('deaths');
        $vietnam2 = collect($vietnam)->pluck('deaths');
        $philippines2 = collect($philippines)->pluck('deaths');
        $singapore2 = collect($singapore)->pluck('deaths');


        $chart1 = new CovidChart;
        $chart1->labels($labels);
        $chart1->dataset('Malaysia', 'line', $malaysia2)->options([
            'backgroundColor' => 'rgba(255, 159, 64, 0.2)',

        ]);
        $chart1->dataset('Indonesia', 'line', $indonesia2)->options([
            'backgroundColor' => 'rgba(255, 99, 132, 0.2)',

        ]);
        $chart1->dataset('Singapore', 'line', $singapore2)->options([
            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',

        ]);


        return view('asean', compact('chart','chart1','negara'));



        


    }

    public function country($country)

    {


        $stat = Http::get('https://coronavirus-19-api.herokuapp.com/countries/');
        $stat =  $stat->json();
        $stats = collect($stat)->where('country',$country);
        $todayCases = $stats->pluck('todayCases');
        $todayDeaths = $stats->pluck('todayDeaths');
        $active = $stats->pluck('active');
        $critical = $stats->pluck('critical');


        $d = $stats->pluck('deaths');


        $c= Http::get('https://pomber.github.io/covid19/timeseries.json');

        $nama_negara = Http::get('https://api.kawalcorona.com/');
        $nama_negara =  $nama_negara->json();

        $nama_negara1 = collect($nama_negara)->flatten(1);
        $negara_sorted = $nama_negara1->sortBy('Country_Region');

        $c= $c->json();
        $cntry_name = $c[$country];
        $cntry = collect($cntry_name)->sortByDesc('confirmed');

        

        $labels = collect($cntry_name)->pluck('date');
        $confirmed = collect($cntry_name)->pluck('confirmed');
        $deaths = collect($cntry_name)->pluck('deaths');
        $recovered = collect($cntry_name)->pluck('recovered');



        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Positif', 'line', $confirmed)->options([
            'backgroundColor' => 'rgba(255, 159, 64, 0.2)',

        ]);
        $chart->dataset('Meninggal', 'line', $deaths)->options([
            'backgroundColor' => 'rgba(255, 99, 132, 0.2)',

        ]);
        $chart->dataset('Sembuh', 'line', $recovered)->options([
            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',

        ]);

       
        return view('country', compact('cntry','country','chart','negara_sorted','stats','todayCases','todayDeaths','active','critical'));

    }
}
