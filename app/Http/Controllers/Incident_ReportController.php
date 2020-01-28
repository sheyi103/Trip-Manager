<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Incident_ReportRepository;
use App\Http\Requests\CreateIncident_ReportRequest;
use App\Http\Requests\UpdateIncident_ReportRequest;
use App\Http\Resources\Incident_Report as Incident_ReportResource;

class Incident_ReportController extends AppBaseController
{
    /** @var  Incident_ReportRepository */
    private $incidentReportRepository;

    public function __construct(Incident_ReportRepository $incidentReportRepo)
    {
        $this->incidentReportRepository = $incidentReportRepo;
    }

    /**
     * Display a listing of the Incident_Report.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $incidentReports = $this->incidentReportRepository->all();
        $incidentReports = DB::table('incident_reports')
        ->leftJoin('users', 'incident_reports.car_id', '=', 'users.car_id')
        ->leftjoin('cars', 'incident_reports.car_id', '=', 'cars.id')
        ->get();

        // dd($incidentReports);

        return view('incident__reports.index')
            ->with('incidentReports', $incidentReports);
    }

    /**
     * Show the form for creating a new Incident_Report.
     *
     * @return Response
     */
    public function create()
    {
        return view('incident__reports.create');
    }

    /**
     * Store a newly created Incident_Report in storage.
     *
     * @param CreateIncident_ReportRequest $request
     *
     * @return Response
     */
    public function store(CreateIncident_ReportRequest $request)
    {
        $input = $request->all();

        $incidentReport = $this->incidentReportRepository->create($input);

        if($request->expectsJson()){

            return new Incident_ReportResource($incidentReport);
       }

        Flash::success('Incident  Report saved successfully.');

        return redirect(route('incidentReports.index'));
    }

    /**
     * Display the specified Incident_Report.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $incidentReport = $this->incidentReportRepository->find($id);

        if (empty($incidentReport)) {
            Flash::error('Incident  Report not found');

            return redirect(route('incidentReports.index'));
        }

        return view('incident__reports.show')->with('incidentReport', $incidentReport);
    }

    /**
     * Show the form for editing the specified Incident_Report.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $incidentReport = $this->incidentReportRepository->find($id);

        if (empty($incidentReport)) {
            Flash::error('Incident  Report not found');

            return redirect(route('incidentReports.index'));
        }

        return view('incident__reports.edit')->with('incidentReport', $incidentReport);
    }

    /**
     * Update the specified Incident_Report in storage.
     *
     * @param int $id
     * @param UpdateIncident_ReportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIncident_ReportRequest $request)
    {
        $incidentReport = $this->incidentReportRepository->find($id);

        if (empty($incidentReport)) {
            Flash::error('Incident  Report not found');

            return redirect(route('incidentReports.index'));
        }

        $incidentReport = $this->incidentReportRepository->update($request->all(), $id);

        Flash::success('Incident  Report updated successfully.');

        return redirect(route('incidentReports.index'));
    }

    /**
     * Remove the specified Incident_Report from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $incidentReport = $this->incidentReportRepository->find($id);

        if (empty($incidentReport)) {
            Flash::error('Incident  Report not found');

            return redirect(route('incidentReports.index'));
        }

        $this->incidentReportRepository->delete($id);

        Flash::success('Incident  Report deleted successfully.');

        return redirect(route('incidentReports.index'));
    }
}
