<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaintainancesRequest;
use App\Http\Requests\UpdateMaintainancesRequest;
use App\Repositories\MaintainancesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MaintainancesController extends AppBaseController
{
    /** @var  MaintainancesRepository */
    private $maintainancesRepository;

    public function __construct(MaintainancesRepository $maintainancesRepo)
    {
        $this->maintainancesRepository = $maintainancesRepo;
    }

    /**
     * Display a listing of the Maintainances.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $maintainances = $this->maintainancesRepository->all();

        return view('maintainances.index')
            ->with('maintainances', $maintainances);
    }

    /**
     * Show the form for creating a new Maintainances.
     *
     * @return Response
     */
    public function create()
    {
        return view('maintainances.create');
    }

    /**
     * Store a newly created Maintainances in storage.
     *
     * @param CreateMaintainancesRequest $request
     *
     * @return Response
     */
    public function store(CreateMaintainancesRequest $request)
    {
        $input = $request->all();

        $maintainances = $this->maintainancesRepository->create($input);

        Flash::success('Maintainances saved successfully.');

        return redirect(route('maintainances.index'));
    }

    /**
     * Display the specified Maintainances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maintainances = $this->maintainancesRepository->find($id);

        if (empty($maintainances)) {
            Flash::error('Maintainances not found');

            return redirect(route('maintainances.index'));
        }

        return view('maintainances.show')->with('maintainances', $maintainances);
    }

    /**
     * Show the form for editing the specified Maintainances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maintainances = $this->maintainancesRepository->find($id);

        if (empty($maintainances)) {
            Flash::error('Maintainances not found');

            return redirect(route('maintainances.index'));
        }

        return view('maintainances.edit')->with('maintainances', $maintainances);
    }

    /**
     * Update the specified Maintainances in storage.
     *
     * @param int $id
     * @param UpdateMaintainancesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaintainancesRequest $request)
    {
        $maintainances = $this->maintainancesRepository->find($id);

        if (empty($maintainances)) {
            Flash::error('Maintainances not found');

            return redirect(route('maintainances.index'));
        }

        $maintainances = $this->maintainancesRepository->update($request->all(), $id);

        Flash::success('Maintainances updated successfully.');

        return redirect(route('maintainances.index'));
    }

    /**
     * Remove the specified Maintainances from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maintainances = $this->maintainancesRepository->find($id);

        if (empty($maintainances)) {
            Flash::error('Maintainances not found');

            return redirect(route('maintainances.index'));
        }

        $this->maintainancesRepository->delete($id);

        Flash::success('Maintainances deleted successfully.');

        return redirect(route('maintainances.index'));
    }
}
