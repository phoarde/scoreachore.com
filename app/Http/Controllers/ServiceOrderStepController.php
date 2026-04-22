<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceOrderStepResource;
use App\Models\ServiceOrderStep;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ServiceOrderStepController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', ServiceOrderStep::class);

        return ServiceOrderStepResource::collection(ServiceOrderStep::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', ServiceOrderStep::class);

        $data = $request->validate([
            'user_id' => ['required', 'exists:users'],
            'problemReport_iid' => ['required'],
            'contractors_id' => ['required', 'exists:contractors'],
            'service_id' => ['required', 'exists:services'],
            'postMortrn_id' => ['required'],
            'notes' => ['required'],
            'rate' => ['required', 'integer'],
            'hours_workeed' => ['required', 'integer'],
            'total' => ['required'],
        ]);

        return new ServiceOrderStepResource(ServiceOrderStep::create($data));
    }

    public function show(ServiceOrderStep $serviceOrderStep)
    {
        $this->authorize('view', $serviceOrderStep);

        return new ServiceOrderStepResource($serviceOrderStep);
    }

    public function update(Request $request, ServiceOrderStep $serviceOrderStep)
    {
        $this->authorize('update', $serviceOrderStep);

        $data = $request->validate([
            'user_id' => ['required', 'exists:users'],
            'problemReport_iid' => ['required'],
            'contractors_id' => ['required', 'exists:contractors'],
            'service_id' => ['required', 'exists:services'],
            'postMortrn_id' => ['required'],
            'notes' => ['required'],
            'rate' => ['required', 'integer'],
            'hours_workeed' => ['required', 'integer'],
            'total' => ['required'],
        ]);

        $serviceOrderStep->update($data);

        return new ServiceOrderStepResource($serviceOrderStep);
    }

    public function destroy(ServiceOrderStep $serviceOrderStep)
    {
        $this->authorize('delete', $serviceOrderStep);

        $serviceOrderStep->delete();

        return response()->json();
    }
}
