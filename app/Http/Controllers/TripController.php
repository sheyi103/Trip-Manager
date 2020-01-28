<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripRequest;
use App\Http\Requests\UpdateTripRequest;
use App\Repositories\TripRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use App\Http\Resources\Trip as TripResource;
use App\Models\Trip;
use App\Models\User;

class TripController extends AppBaseController
{
    /** @var  TripRepository */
    private $tripRepository;

    public function __construct(TripRepository $tripRepo)
    {
        $this->tripRepository = $tripRepo;
    }

    /**
     * Display a listing of the Trip.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trips = $this->tripRepository->all();
      
        return view('trips.index')
            ->with('trips', $trips);
    }

    /**
     * Show the form for creating a new Trip.
     *
     * @return Response
     */
    public function create()
    {
        return view('trips.create');
    }

    /**
     * Store a newly created Trip in storage.
     *
     * @param CreateTripRequest $request
     *
     * @return Response
     */
    public function store(CreateTripRequest $request)
    {
        $input = $request->all();

        $trip = $this->tripRepository->create($input);

        $user= User::where('id', Auth::user()->id)  ->update([
            'status' => '1'
        ]);
        Trip::where('id', $trip->id)->update([

            'trip_status'=>1    
        ]);
       if($request->expectsJson()){

            return new TripResource($trip);
       }

        Flash::success('Trip saved successfully.');

        return redirect(route('trips.index'));
    }

    /**
     * Display the specified Trip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trip = $this->tripRepository->find($id);

        if (empty($trip)) {
            Flash::error('Trip not found');

            return redirect(route('trips.index'));
        }

        return view('trips.show')->with('trip', $trip);
    }

    /**
     * Show the form for editing the specified Trip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trip = $this->tripRepository->find($id);

        if (empty($trip)) {
            Flash::error('Trip not found');

            return redirect(route('trips.index'));
        }

        return view('trips.edit')->with('trip', $trip);
    }

    /**
     * Update the specified Trip in storage.
     *
     * @param int $id
     * @param UpdateTripRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripRequest $request)
    {
        $trip = $this->tripRepository->find($id);

        if (empty($trip)) {
            Flash::error('Trip not found');

            return redirect(route('trips.index'));
        }

        $trip = $this->tripRepository->update($request->all(), $id);
        $user= User::where('id', Auth::user()->id)  ->update([
            'status' => '0'
        ]);
        Trip::where('id', $trip->id)->update([

            'trip_status'=>0
            
        ]);
	if($request->expectsJson()){

            return new TripResource($trip);
       }

        Flash::success('Trip updated successfully.');

        return redirect(route('trips.index'));
    }

    /**
     * Remove the specified Trip from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trip = $this->tripRepository->find($id);

        if (empty($trip)) {
            Flash::error('Trip not found');

            return redirect(route('trips.index'));
        }

        $this->tripRepository->delete($id);

        Flash::success('Trip deleted successfully.');

        return redirect(route('trips.index'));
    }
}
