<?php

// namespace App\Http\Controllers\Api\v1;
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SessionResource;
use App\Models\Session;
use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SessionResource::collection(Session::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $session = Session::create([
            'name'=>'FOOD',
            'price'=>'100'
        ]);
        $session->save();
        // return new SessionResource(Session::create($request->validated()));
        return new SessionResource($session);
    }

    /**
     * Display the specified resource.
     */
    public function show(Session $session)
    {
        return new SessionResource($session);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSessionRequest $request, Session $session)
    {
        $session->update($request->validated());
        return new SessionResource($session);
    }

    // public function update(StoreSessionRequest $request, Session $session)
    // {
    //     return new SessionResource(Session::update($request->validated()));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Session $session)
    {
        //
    }
}
