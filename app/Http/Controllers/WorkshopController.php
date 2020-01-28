<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkshopRequest;
use App\Http\Requests\UpdateWorkshopRequest;
use App\Repositories\WorkshopRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Http\Resources\Workshop as WorkshopResource;

class WorkshopController extends AppBaseController
{
    /** @var  WorkshopRepository */
    private $workshopRepository;

    public function __construct(WorkshopRepository $workshopRepo)
    {
        $this->workshopRepository = $workshopRepo;
    }

    /**
     * Display a listing of the Workshop.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workshops = $this->workshopRepository->all();

        if($request->expectsJson()){

            return new WorkshopResource($workshops);
       }

        return view('workshops.index')
            ->with('workshops', $workshops);
    }

    /**
     * Show the form for creating a new Workshop.
     *
     * @return Response
     */
    public function create()
    {
        return view('workshops.create');
    }

    /**
     * Store a newly created Workshop in storage.
     *
     * @param CreateWorkshopRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkshopRequest $request)
    {
        $input = $request->all();

        $workshop = $this->workshopRepository->create($input);

        Flash::success('Workshop saved successfully.');

        return redirect(route('workshops.index'));
    }

    /**
     * Display the specified Workshop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workshop = $this->workshopRepository->find($id);

        if (empty($workshop)) {
            Flash::error('Workshop not found');

            return redirect(route('workshops.index'));
        }

        return view('workshops.show')->with('workshop', $workshop);
    }

    /**
     * Show the form for editing the specified Workshop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workshop = $this->workshopRepository->find($id);

        if (empty($workshop)) {
            Flash::error('Workshop not found');

            return redirect(route('workshops.index'));
        }

        return view('workshops.edit')->with('workshop', $workshop);
    }

    /**
     * Update the specified Workshop in storage.
     *
     * @param int $id
     * @param UpdateWorkshopRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkshopRequest $request)
    {
        $workshop = $this->workshopRepository->find($id);

        if (empty($workshop)) {
            Flash::error('Workshop not found');

            return redirect(route('workshops.index'));
        }

        $workshop = $this->workshopRepository->update($request->all(), $id);

        Flash::success('Workshop updated successfully.');

        return redirect(route('workshops.index'));
    }

    /**
     * Remove the specified Workshop from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workshop = $this->workshopRepository->find($id);

        if (empty($workshop)) {
            Flash::error('Workshop not found');

            return redirect(route('workshops.index'));
        }

        $this->workshopRepository->delete($id);

        Flash::success('Workshop deleted successfully.');

        return redirect(route('workshops.index'));
    }
}
