<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Utility\Hashs;
use App\Models\ChatViewModel;
use App\Models\Comments;
use App\Models\HomeViewModel;
use App\Models\Menu;
use App\Models\MenuListViewModel;
use App\Models\Message;
use App\Models\ReadReceipts;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function create()
    {
        return view('comments.list');
    }
    public function createComment(Request $request ,$id)
    {
        $comment = new Comments();
        $comment->content = $request->input('content');
        $comment->user_id =21;
        $comment->created_date =   Carbon::now();
        $comment->menu_id =$id;
        $comment->save();

        return redirect('/home/menu');
    }

    public function chats(){
        $me = DB::table('messages')->get()->where('sendUserId', 21);
        $receive = DB::table('messages')->get()->where('receiveUserId', 21);
        $meArray = $me->toArray();
        $youArray = $receive->toArray();

        $viewModel = new ChatViewModel(
            meChat: $meArray,
            youChat: $youArray
        );

        return view('chat.message', ['view' => $viewModel]);
    }
    public function chatPost(Request $request){
        $user_id = session('user_id');
        $rnd = rand(10,1000);
        $message = new Message();
        $message->id = $rnd;
        $message->content = $request->input('content');
        $message->sendUserId = $request->input('id');
        $message->receiveUserId = 22;
        $message->created_date = Carbon::now();
        $message->save();

        $readReceipt = new ReadReceipts();
        $readReceipt->MessageId = strval($rnd);
        $readReceipt->UserId = strval($user_id);
        $readReceipt->isRead = false;
        $readReceipt->save();
        return redirect('/chat/message');
    }
    public function list()
    {
        $results = DB::table('menus')->get();
        $menuArray = $results->toArray();
        $results2 = DB::table('announcemets')->get();
        $announcemetsArray = $results2->toArray();
        $results3 = DB::table('sliders')->get();
        $slidersArray = $results3->toArray();
        $records = DB::table('comments')
            ->join('menus', 'comments.menu_id', '=', 'menus.id')
            ->select('comments.content as comments_content', 'menus.content as menus_content', 'menus.title',
                'comments.created_date as comments_created_date', 'menus.created_date as menus_created_date','comments.id as comments_id', 'menus.id as menus_id')
            ->get();
        $commentArray = $records->toArray();
        $arr = array();
        foreach ($menuArray as $item){
            $commentData = DB::table('comments')->where("menu_id",$item->id)->get();
            $carr = $commentData->toArray();
           $arrs = new MenuListViewModel(
               menu_id: $item->id,menu_title: $item->title,menu_content:$item->content, comment: $carr
           );
           array_push($arr,$arrs);

        }

        $viewModel = new HomeViewModel(


            menu: $menuArray,
            announcemet: $announcemetsArray,
            slider: $slidersArray,
            menuList:$arr
        );
            //  return view('home.menu', ['comment' => $records]);
        return view('home.menu', ['view' => $viewModel]);
//        $menu = DB::table('menus')->get();
//        return view('home.menu',['menu'=>$menu]);
        //return view('view içindeki klasör.php dosya ismi',['menu'=>$menu]);
    }
}
