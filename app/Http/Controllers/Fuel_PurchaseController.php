<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Fuel_PurchaseRepository;
use App\Http\Requests\CreateFuel_PurchaseRequest;
use App\Http\Requests\UpdateFuel_PurchaseRequest;
use App\Http\Resources\Fuel_Purchase as Fuel_PurchaseResource;

class Fuel_PurchaseController extends AppBaseController
{
    /** @var  Fuel_PurchaseRepository */
    private $fuelPurchaseRepository;

    public function __construct(Fuel_PurchaseRepository $fuelPurchaseRepo)
    {
        $this->fuelPurchaseRepository = $fuelPurchaseRepo;
    }

    /**
     * Display a listing of the Fuel_Purchase.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $fuelPurchases = $this->fuelPurchaseRepository->all();

        $fuelPurchases = DB::table('fuel_purchases')
        ->leftJoin('users', 'fuel_purchases.car_id', '=', 'users.car_id')
        ->leftjoin('cars', 'fuel_purchases.car_id', '=', 'cars.id')
        ->get();

        // dd($fuelPurchases);

        return view('fuel__purchases.index')
            ->with('fuelPurchases', $fuelPurchases);
    }

    /**
     * Show the form for creating a new Fuel_Purchase.
     *
     * @return Response
     */
    public function create()
    {
        return view('fuel__purchases.create');
    }

    /**
     * Store a newly created Fuel_Purchase in storage.
     *
     * @param CreateFuel_PurchaseRequest $request
     *
     * @return Response
     */
    public function store(CreateFuel_PurchaseRequest $request)
    {
        $input = $request->all();

        $fuelPurchase = $this->fuelPurchaseRepository->create($input);
	 if($request->expectsJson()){

            return new Fuel_PurchaseResource($fuelPurchase);
       }

        Flash::success('Fuel  Purchase saved successfully.');

        return redirect(route('fuelPurchases.index'));
    }

    /**
     * Display the specified Fuel_Purchase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fuelPurchase = $this->fuelPurchaseRepository->find($id);

        if (empty($fuelPurchase)) {
            Flash::error('Fuel  Purchase not found');

            return redirect(route('fuelPurchases.index'));
        }

        return view('fuel__purchases.show')->with('fuelPurchase', $fuelPurchase);
    }

    /**
     * Show the form for editing the specified Fuel_Purchase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fuelPurchase = $this->fuelPurchaseRepository->find($id);

        if (empty($fuelPurchase)) {
            Flash::error('Fuel  Purchase not found');

            return redirect(route('fuelPurchases.index'));
        }

        return view('fuel__purchases.edit')->with('fuelPurchase', $fuelPurchase);
    }

    /**
     * Update the specified Fuel_Purchase in storage.
     *
     * @param int $id
     * @param UpdateFuel_PurchaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFuel_PurchaseRequest $request)
    {
        $fuelPurchase = $this->fuelPurchaseRepository->find($id);

        if (empty($fuelPurchase)) {
            Flash::error('Fuel  Purchase not found');

            return redirect(route('fuelPurchases.index'));
        }

        $fuelPurchase = $this->fuelPurchaseRepository->update($request->all(), $id);

        Flash::success('Fuel  Purchase updated successfully.');

        return redirect(route('fuelPurchases.index'));
    }

    /**
     * Remove the specified Fuel_Purchase from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fuelPurchase = $this->fuelPurchaseRepository->find($id);

        if (empty($fuelPurchase)) {
            Flash::error('Fuel  Purchase not found');

            return redirect(route('fuelPurchases.index'));
        }

        $this->fuelPurchaseRepository->delete($id);

        Flash::success('Fuel  Purchase deleted successfully.');

        return redirect(route('fuelPurchases.index'));
    }
}
