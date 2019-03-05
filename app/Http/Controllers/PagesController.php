<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function import()
    {
        return view('import');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function importAction(Request $request)
    {
      if($request->file('imported-file'))
      {
                $path = $request->file('imported-file')->getRealPath();
                $data = Excel::load($path, function($reader) {
            })->get();

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
  }
}
