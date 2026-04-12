<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Comment::class);

        return CommentResource::collection(Comment::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', Comment::class);

        $data = $request->validate([
            'user_id' => ['nullable', 'exists:users'],
            'contractors_id' => ['nullable', 'exists:contractors'],
            'service_id' => ['nullable', 'exists:services'],
            'service_orders_id' => ['nullable', 'exists:service_orders'],
            'title' => ['nullable'],
            'comment' => ['required'],
            'date_of_service' => ['required', 'date'],
        ]);

        return new CommentResource(Comment::create($data));
    }

    public function show(Comment $comment)
    {
        $this->authorize('view', $comment);

        return new CommentResource($comment);
    }

    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $data = $request->validate([
            'user_id' => ['nullable', 'exists:users'],
            'contractors_id' => ['nullable', 'exists:contractors'],
            'service_id' => ['nullable', 'exists:services'],
            'service_orders_id' => ['nullable', 'exists:service_orders'],
            'title' => ['nullable'],
            'comment' => ['required'],
            'date_of_service' => ['required', 'date'],
        ]);

        $comment->update($data);

        return new CommentResource($comment);
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return response()->json();
    }
}
