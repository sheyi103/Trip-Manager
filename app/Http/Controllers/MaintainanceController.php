<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MaintainanceRepository;
use App\Http\Requests\CreateMaintainanceRequest;
use App\Http\Requests\UpdateMaintainanceRequest;
use App\Http\Resources\Maintainance as MaintainanceResource;

class MaintainanceController extends AppBaseController
{
    /** @var  MaintainanceRepository */
    private $maintainanceRepository;

    public function __construct(MaintainanceRepository $maintainanceRepo)
    {
        $this->maintainanceRepository = $maintainanceRepo;
    }

    /**
     * Display a listing of the Maintainance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        
        //$maintainances = $this->maintainanceRepository->all();
        
        $maintainances = DB::table('maintainances')
            ->leftJoin('users', 'maintainances.car_id', '=', 'users.car_id')
            ->leftjoin('cars', 'maintainances.car_id', '=', 'cars.id')
            ->leftjoin('workshops', 'maintainances.workshop_id', '=', 'workshops.id')
            ->get();

            // dd($maintainances);
        

        return view('maintainances.index')
            ->with('maintainances', $maintainances);
    }

    /**
     * Show the form for creating a new Maintainance.
     *
     * @return Response
     */
    public function create()
    {
        return view('maintainances.create');
    }

    /**
     * Store a newly created Maintainance in storage.
     *
     * @param CreateMaintainanceRequest $request
     *
     * @return Response
     */
    public function store(CreateMaintainanceRequest $request)
    {
        $input = $request->all();

        $maintainance = $this->maintainanceRepository->create($input);
	 if($request->expectsJson()){

            return new MaintainanceResource($maintainance);
       }

        Flash::success('Maintainance saved successfully.');

        return redirect(route('maintainances.index'));
    }

    /**
     * Display the specified Maintainance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maintainance = $this->maintainanceRepository->find($id);

        if (empty($maintainance)) {
            Flash::error('Maintainance not found');

            return redirect(route('maintainances.index'));
        }

        return view('maintainances.show')->with('maintainance', $maintainance);
    }

    /**
     * Show the form for editing the specified Maintainance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maintainance = $this->maintainanceRepository->find($id);

        if (empty($maintainance)) {
            Flash::error('Maintainance not found');

            return redirect(route('maintainances.index'));
        }

        return view('maintainances.edit')->with('maintainance', $maintainance);
    }

    /**
     * Update the specified Maintainance in storage.
     *
     * @param int $id
     * @param UpdateMaintainanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaintainanceRequest $request)
    {
        $maintainance = $this->maintainanceRepository->find($id);

        if (empty($maintainance)) {
            Flash::error('Maintainance not found');

            return redirect(route('maintainances.index'));
        }

        $maintainance = $this->maintainanceRepository->update($request->all(), $id);

        Flash::success('Maintainance updated successfully.');

        return redirect(route('maintainances.index'));
    }

    /**
     * Remove the specified Maintainance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maintainance = $this->maintainanceRepository->find($id);

        if (empty($maintainance)) {
            Flash::error('Maintainance not found');

            return redirect(route('maintainances.index'));
        }

        $this->maintainanceRepository->delete($id);

        Flash::success('Maintainance deleted successfully.');

        return redirect(route('maintainances.index'));
    }
}
