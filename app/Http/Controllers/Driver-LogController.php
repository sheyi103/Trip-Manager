<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDriver-LogRequest;
use App\Http\Requests\UpdateDriver-LogRequest;
use App\Repositories\Driver-LogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Driver-LogController extends AppBaseController
{
    /** @var  Driver-LogRepository */
    private $driverLogRepository;

    public function __construct(Driver-LogRepository $driverLogRepo)
    {
        $this->driverLogRepository = $driverLogRepo;
    }

    /**
     * Display a listing of the Driver-Log.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $driverLogs = $this->driverLogRepository->all();

        return view('driver-_logs.index')
            ->with('driverLogs', $driverLogs);
    }

    /**
     * Show the form for creating a new Driver-Log.
     *
     * @return Response
     */
    public function create()
    {
        return view('driver-_logs.create');
    }

    /**
     * Store a newly created Driver-Log in storage.
     *
     * @param CreateDriver-LogRequest $request
     *
     * @return Response
     */
    public function store(CreateDriver-LogRequest $request)
    {
        $input = $request->all();

        $driverLog = $this->driverLogRepository->create($input);

        Flash::success('Driver- Log saved successfully.');

        return redirect(route('driverLogs.index'));
    }

    /**
     * Display the specified Driver-Log.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $driverLog = $this->driverLogRepository->find($id);

        if (empty($driverLog)) {
            Flash::error('Driver- Log not found');

            return redirect(route('driverLogs.index'));
        }

        return view('driver-_logs.show')->with('driverLog', $driverLog);
    }

    /**
     * Show the form for editing the specified Driver-Log.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $driverLog = $this->driverLogRepository->find($id);

        if (empty($driverLog)) {
            Flash::error('Driver- Log not found');

            return redirect(route('driverLogs.index'));
        }

        return view('driver-_logs.edit')->with('driverLog', $driverLog);
    }

    /**
     * Update the specified Driver-Log in storage.
     *
     * @param int $id
     * @param UpdateDriver-LogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDriver-LogRequest $request)
    {
        $driverLog = $this->driverLogRepository->find($id);

        if (empty($driverLog)) {
            Flash::error('Driver- Log not found');

            return redirect(route('driverLogs.index'));
        }

        $driverLog = $this->driverLogRepository->update($request->all(), $id);

        Flash::success('Driver- Log updated successfully.');

        return redirect(route('driverLogs.index'));
    }

    /**
     * Remove the specified Driver-Log from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $driverLog = $this->driverLogRepository->find($id);

        if (empty($driverLog)) {
            Flash::error('Driver- Log not found');

            return redirect(route('driverLogs.index'));
        }

        $this->driverLogRepository->delete($id);

        Flash::success('Driver- Log deleted successfully.');

        return redirect(route('driverLogs.index'));
    }
}
