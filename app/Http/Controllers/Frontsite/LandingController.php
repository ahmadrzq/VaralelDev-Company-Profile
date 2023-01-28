<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\MasterData\About;
use App\Models\MasterData\Client;
use App\Models\MasterData\Contact;
use App\Models\MasterData\Fact;
use App\Models\MasterData\Intro;
use App\Models\MasterData\Service;
use App\Models\MasterData\Skill;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // table intros
        $intros = Intro::all();

        // table services
        $services = Service::all();
        $filter_services = Service::orderBy('created_at', 'desc')->limit(3)->get();

        // table abouts
        $abouts = About::all();

        // table skills
        $skills = Skill::all();

        // table facts
        $facts = Fact::all();

        // table facts
        $clients = Client::all();

        //table contacts
        $contacts = Contact::all();

        return view('pages.frontsite.index', compact('intros', 'services', 'filter_services', 'abouts', 'skills', 'facts', 'clients', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}
