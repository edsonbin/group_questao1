<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondominioControlador extends Controller
{
    private $blocos = [
        "Bloco A" => [
            "despesas" => [
                "folha" => 4500
                ,"material de limpeza" => 350
                ,"água" => 230
                ,"luz" => 879
            ]
        ]
        ,"Bloco B" => [
            "despesas" => [
                "folha" => 2500
                ,"material de limpeza" => 350
                ,"água" => 380
                ,"luz" => 1100
            ]
        ]

    ];

    private $aps =
    [
        "1" => ["nro"=>"101","fracao" => 0.25, "bloco" => "Bloco A"]
        ,"2" => ["nro"=>"102","fracao" => 0.31, "bloco" => "Bloco A"]
        ,"3" => ["nro"=>"201","fracao" => 0.19, "bloco" => "Bloco A"]
        ,"4" => ["nro"=>"202","fracao" => 0.25, "bloco" => "Bloco A"]
        ,"5" => ["nro"=>"101","fracao" => 0.25, "bloco" => "Bloco B"]
        ,"6" => ["nro"=>"102","fracao" => 0.31, "bloco" => "Bloco B"]
        ,"7" => ["nro"=>"201","fracao" => 0.19, "bloco" => "Bloco B"]
        ,"8" => ["nro"=>"201","fracao" => 0.25, "bloco" => "Bloco B"]
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        foreach( $this->aps as $key => $value) {
            $this->aps[$key]["valorCondominio"] = $this->valorCondominio($key);
        }
        //print_r($this->aps);
        return view("condominios.index", ["aps"=> $this->aps]);

    }

    private function valorCondominio($id){
        $despesas = $this->blocos[$this->aps[$id]['bloco']]["despesas"];

        $valorCondominio = 0;
        foreach( $despesas as $despesa) {

            $valorCondominio += $despesa;
        }
        $valorCondominio = $valorCondominio * $this->aps[$id]["fracao"];
        return $valorCondominio;
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
        //
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
