<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ServicePatnership;
class PatnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $servicePatnership;
    public function __construct(ServicePatnership $servicePatnership)
    {
        $this->servicePatnership = $servicePatnership;
    }

    public function index()
    {
        return json_decode($this->servicePatnership->getPatnership(), true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return json_decode($this->servicePatnership->addPatnership(), true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return json_decode($this->servicePatnership->showOnePatnership($id), true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        return json_decode($this->servicePatnership->updatePatnership($id), true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return json_decode($this->servicePatnership->deletePatnership($id), true);
    }
}
