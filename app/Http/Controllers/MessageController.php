<?php

namespace App\Http\Controllers;

use App\Models\ChatViewModel;
use App\Models\HomeViewModel;
use App\Models\Menu;
use App\Models\Message;
use App\Http\Controllers\Controller;
use App\Models\ReadReceipts;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $records = DB::table('messages')
            ->join('read_receipts', 'messages.id', '=', 'read_receipts.MessageId')
            ->get();
        return view('message.list',['message'=>$records]);
    }

    public function adminChatPost(Request $request){
        $message = new Message();
        $message->content = $request->input('content');
        $message->sendUserId = $request->input('id');;
        $message->receiveUserId = 22;
        $message->created_date = Carbon::now();
        $message->save();
        $user_id = session('user_id');
        $rnd = rand(10,1000);
        $readReceipt = new ReadReceipts();
        $readReceipt->MessageId = strval($rnd);
        $readReceipt->UserId = strval($user_id);
        $readReceipt->isRead = false;
        $readReceipt->save();
        return redirect('/chat/message');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id,$messageId)
    {

        $me = DB::table('messages')->get()->where('sendUserId', $id);
        $receive = DB::table('messages')->get()->where('receiveUserId', $id);
        $meArray = $me->toArray();
        $youArray = $receive->toArray();
        $birlesikDizi = array_merge($meArray, $youArray);
        $sortedArray = collect($birlesikDizi)->sortBy('created_date')->values()->all();
        $viewModel = new ChatViewModel(
            meChat: $sortedArray,
            youChat: $meArray
        );
        $read = DB::table('read_receipts')->where('MessageId', $messageId)->first();
        $reads = ReadReceipts::find($read->id);
        $reads->isRead = true;
        $reads->save();
        return view('message.create', ['view' => $viewModel]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $messages , $id)
    {
        $message = $messages->find($id);

        if ($message) {
            $message->delete();
        }

        return redirect()->back();
    }

}
