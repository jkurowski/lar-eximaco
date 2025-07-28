<?php

namespace App\Http\Controllers\Admin\Developro\House;

use App\Http\Controllers\Controller;

// CMS
use App\Http\Requests\PropertyFormRequest;
use App\Models\PropertyPriceComponent;
use App\Repositories\PropertyRepository;
use App\Services\PropertyService;

use App\Models\Investment;
use App\Models\Property;

class HouseController extends Controller
{
    private $repository;
    private $service;

    public function __construct(PropertyRepository $repository, PropertyService $service)
    {
//        $this->middleware('permission:houses-list|houses-create|housesedit|houses-delete', [
//            'only' => ['index','store']
//        ]);
//        $this->middleware('permission:houses-create', [
//            'only' => ['create','store']
//        ]);
//        $this->middleware('permission:houses-edit', [
//            'only' => ['edit','update']
//        ]);
//        $this->middleware('permission:houses-delete', [
//            'only' => ['destroy']
//        ]);

        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(Investment $investment)
    {
        return view('admin.developro.investment_house.index', ['investment' => $investment]);
    }

    public function create(Investment $investment)
    {
        $priceComponents = PropertyPriceComponent::all();

        return view('admin.developro.investment_house.form', [
            'cardTitle' => 'Dodaj dom',
            'backButton' => route('admin.developro.investment.houses.index', $investment),
            'investment' => $investment,
            'priceComponents' => $priceComponents,
        ])->with('entry', Property::make());
    }

    public function store(PropertyFormRequest $request, Investment $investment)
    {

        $property = $this->repository->create(array_merge($request->validated(), [
            'investment_id' => $investment->id
        ]));

        $types = $request->input('price-component-type', []);
        $categories = $request->input('price-component-category', []);
        $values = $request->input('price-component-value', []);
        $values_m2 = $request->input('price-component-m2-value', []);

        $data = [];

        foreach ($types as $index => $componentId) {
            $data[$componentId] = [
                'category' => $categories[$index],
                'value' => $values[$index],
                'value_m2' => $values_m2[$index],
            ];
        }

        $property->priceComponents()->sync($data);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $property);
        }

        if ($request->hasFile('file_pdf')) {
            $this->service->uploadPdf($request->name, $request->file('file_pdf'), $property);
        }

        return redirect(route('admin.developro.investment.houses.index', ['investment' => $investment]))->with('success', 'Dom poprawnie zapisany');
    }

    public function edit(Investment $investment, Property $house)
    {
        $priceComponents = PropertyPriceComponent::all();

        return view('admin.developro.investment_house.form', [
            'cardTitle' => 'Edytuj dom',
            'backButton' => route('admin.developro.investment.houses.index', $investment),
            'investment' => $investment,
            'entry' => $house,
            'priceComponents' => $priceComponents,
        ]);
    }

    public function update(PropertyFormRequest $request, Investment $investment, Property $house)
    {

        $types = $request->input('price-component-type', []);
        $categories = $request->input('price-component-category', []);
        $values = $request->input('price-component-value', []);
        $values_m2 = $request->input('price-component-m2-value', []);

        $data = [];

        foreach ($types as $index => $componentId) {
            $data[$componentId] = [
                'category' => $categories[$index],
                'value' => $values[$index],
                'value_m2' => $values_m2[$index],
            ];
        }

        $house->priceComponents()->sync($data);

        $this->repository->update($request->validated(), $house);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $house, true);
        }

        if ($request->hasFile('file_pdf')) {
            $this->service->uploadPdf($request->name, $request->file('file_pdf'), $house, true);
        }

        return redirect(route('admin.developro.investment.houses.index', ['investment' => $investment->id]))->with('success', 'Dom zaktualizowany');
    }

    public function destroy(Investment $investment, int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }
}
