<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class PagesController extends Controller
{
    public function home() {
        $tasks  = [
            'do thing',
            'do other thing'
        ];

        return view('welcome', [
            'tasks' => $tasks
        ]);
    }

    public function login()
    {
        return view('login');
    }

    public function viewPokemon()
    {
        return view('viewPokemon');
    }

    public function viewAsJson()
    {
        return view('viewAsJson');
    }

    /* requres importAction which is currently broken
    public function import()
    {
        return view('import');
    } */


    /* doesn't work
    public function importAction(Request $request)
    {
        if($request->file('imported-file'))
        {
          $path = $request->file('imported-file')->getRealPath();
        }       

        $filename = public_path('file/pokemon.csv');
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        $customerArr = $data;



        for ($i = 0; $i < count($customerArr); $i ++)
        {
            Pokemon::firstOrCreate($customerArr[$i]);
        }
    } */

      /**
     * Store a newly created resource in storage.
     * 
     * NOTE: doesn't work, Excel::load(...) doesn't work in v3.0
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
/*
    public function importAction(Request $request)
    {
      if($request->file('imported-file'))
      {
        $path = $request->file('imported-file')->getRealPath();
        //$data = Excel::load($path, function($reader) {})->get();

        if(!empty($data) && $data->count())
        {
            $data = $data->toArray();
            for($i=0;$i<count($data);$i++)
            {
                $dataImported[] = $data[$i];
            }
        }

        Pokemon::insert($dataImported);
    }
    return back();
    }*/
}
