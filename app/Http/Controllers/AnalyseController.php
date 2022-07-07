<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Inertia\Inertia;
use App\Models\AnalyseModel;
class AnalyseController extends Controller
{
    public function __construct()
    {
        $client = new Client();
    }
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $a =   AnalyseModel::all();
        return Inertia::render('Classify', compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $client = new Client();
            $request->validate([
                'gender' => ['required', 'max:50'],
                'SeniorCitizen' => ['required', 'max:50'],
                'tenure' => ['required', 'max:50'],
                'PhoneService' => ['required', 'max:50'],
                'StreamingTV' => ['required', 'max:50'],
                'InternetService' => ['required', 'max:50'],
                'MonthlyCharges' => ['required', 'max:50'],
                'TotalCharges' => ['required', 'max:50'],
                'Partner' => ['required', 'max:50']
            ]);
            $res = $client->request('POST', 'http://localhost:5000/api', ['json' => json_decode($request->getContent(), true)]);
            if ($res->getStatusCode() == 200) {
                // dd(json_decode($res->getBody()));
                $arr = json_decode($request->getContent(), true);
                $val = json_decode($res->getBody(), true);
                $arr['Churn'] = $val['result'] == 1 ||  $val['result'] == "1"  ? "Yes" : "No";
                AnalyseModel::create($arr);
            }
        return redirect()->route('classify.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
