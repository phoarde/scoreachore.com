<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConntactUsMessageResource;
use App\Models\ContactUsMessage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ConntactUsMessageController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', ContactUsMessage::class);

        return ConntactUsMessageResource::collection(ContactUsMessage::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', ContactUsMessage::class);

        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'message' => ['required'],
        ]);

        return new ConntactUsMessageResource(ContactUsMessage::create($data));
    }

    public function show(ContactUsMessage $conntactUsMessage)
    {
        $this->authorize('view', $conntactUsMessage);

        return new ConntactUsMessageResource($conntactUsMessage);
    }

    public function update(Request $request, ContactUsMessage $conntactUsMessage)
    {
        $this->authorize('update', $conntactUsMessage);

        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'message' => ['required'],
        ]);

        $conntactUsMessage->update($data);

        return new ConntactUsMessageResource($conntactUsMessage);
    }

    public function destroy(ContactUsMessage $conntactUsMessage)
    {
        $this->authorize('delete', $conntactUsMessage);

        $conntactUsMessage->delete();

        return response()->json();
    }
}
