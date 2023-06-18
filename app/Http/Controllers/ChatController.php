<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChatResource;
use App\Models\Chat;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChatRequests;
use App\Http\Requests\UpdateChatRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('live-chat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChatRequests $request)
    {
        //
        $dateTime = Carbon::now();

        new ChatResource(Chat::create(
            [
                'sender_id' => $request->sender_id,
                'receiver_id' => $request->receiver_id,
                'chat' => $request->chat,
                'file' => $request->file,
                'date_time' => $dateTime,
                'is_read' => $request->is_read,
            ]
        ));

        $latestChat = Chat::latest()->first();
        $chatResult = new ChatResource($latestChat);
        return $chatResult;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show($sender_id)
    {
        //
        $chatUser = Chat::where('sender_id', $sender_id)->orWhere('receiver_id', $sender_id)->get();
        $chatResult = ChatResource::collection($chatUser);
        return $chatResult;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChatRequests $request, Chat $chat)
    {
        //
        $chat->update([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'chat' => $request->chat,
            'file' => $request->file,
            'date_time' => $request->date_time,
            'is_read' => $request->is_read,
        ]);

        $newChat = new ChatResource($chat);
        return $newChat;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy($chat_id)
    {
        //
        $chat = Chat::find($chat_id);
        $chat->delete();
        return response()->noContent();
    }
}
