<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ostController extends Controller
{
    public function getInfo(){
        $posts = DB::table('User_posts')->get();
        $postsWhere = DB::table('User_posts')->where('id', '!=', 3)->get();
        $postTitle = DB::table('User_posts')->select("title")->get();
        $renameDiscription = DB::table('User_posts')->select('description as text_discription')->get();
        $userAges = DB::table('userposts')->where('age', 30)->get();
        $user12 = DB::table('userposts')->where('age', '!=', 30)->get();
        $user21 = DB::table('userposts')->where('age', '>', 30)->get();
        $userMenshe = DB::table('userposts')->where('age', '<', 30)->get();
        $userMenRav = DB::table('userposts')->where('age', '<=', 30)->get();
        $userAGE = DB::table('userposts')->where('age', '>', 20)->where('age', '<', 30)->get();
        $userOrWhere = DB::table('userposts')->where('age', '>', 30)->orWhere('id', '>', 4)->get();
        $queryUserId = DB::table('userposts')->whereId(3)->get();
        $queryUsername = DB::table('userposts')->whereUsernames('asdasd1234')->get();
        $queryUseSalary = DB::table('userposts')->whereSalary('5600')->get();
        $queryand = DB::table('userposts')->whereIdAndAge(3,25)->get();
        $queryOr = DB::table('userposts')->whereIdOrAge(5,21)->get();
        $queryOrderBy = DB::table('userposts')->orderBy('age', 'asc')->get();
        $queryOrderByDesc = DB::table('userposts')->orderBy('age','desc')->get();
        $queryLatest = DB::table('userposts')->latest('created_at')->get();
        $queryOldest = DB::table('userposts')->oldest('updated_at')->get();
        $queryRandomFunc = DB::table('userposts')->inRandomOrder()->get();
        $queryRandomFuncFirst = DB::table('userposts')->inRandomOrder()->first();
        $queryAgeFirst = DB::table('userposts')->whereBetween('age',[20,30])->inRandomOrder()->first();
        $queryAge = DB::table('userposts')->whereBetween('age',[20,30])->inRandomOrder()->get();
        $queryUser = DB::table('userposts')->take(3)->get();
        $queryUA = DB::table('userposts')->take(3)->where('age','<',30)->inRandomOrder()->get();
        $queryUserTakeSkip = DB::table('userposts')->skip(5)->take(10)->get();
        $queryUserTakeSkipWhere = DB::table('userposts')->where('age', 30)->skip(2)->take(10)->get();
        // $queryInserts = DB::table('userposts')->insert([
        //     'usernames' => 'Alexander',
        //     'born' => '1973-12-01',
        //     'created_at' => NULL,
        //     'updated_at' => NULL,
        //     'adress' => 'Moscow',
        //     'age' => 26,
        //     'salary' =>40000
        // ]);
        // $queryId = DB::table('userposts')->insertGetId([
        //     'usernames' => 'User',
        //     'born' => '1974-12-01',
        //     'created_at' => NULL,
        //     'updated_at' => NULL,
        //     'adress' => 'Moscow',
        //     'age' => 26,
        //     'salary' =>40000
        // ]);
        // $queryIdMas = DB::table('userposts')->insert([
        //   [  'usernames' => 'User12',
        //     'born' => '1974-12-01',
        //     'created_at' => NULL,
        //     'updated_at' => NULL,
        //     'adress' => 'Moscow',
        //     'age' => 26,
        //     'salary' =>40000],
        //     [  'usernames' => 'User59',
        //     'born' => '1974-12-01',
        //     'created_at' => NULL,
        //     'updated_at' => NULL,
        //     'adress' => 'Moscow',
        //     'age' => 26,
        //     'salary' =>40000]
        // ]);
        // $queryUpdatetId = DB::table('userposts')->where('id',5)->update([
        //     'usernames'=>'Denis'
        // ]);
        // $UserqueryAgeSalary = DB::table('userposts')->where('age', 30)->update([
        //     'salary'=>500
        // ]);
        // $queryUserIncrements = DB::table('userposts')->where('id', 14)->increment('age');
        // $queryUserDecrements = DB::table('userposts')->where('id', 9)->decrement('age');
        // $queryUserIncrementsSalarys = DB::table('userposts')->where('age',30)->increment('salary', 100);
        // $queryDelete = DB::table('userposts')->where('id', 5)->delete();
        // $queryDelete6 = DB::table('userposts')->where('age', 30)->delete();
        $queryLinkDB = DB::table('userposts')->leftJoin('User_posts', 'userposts.id', '=', 'User_posts.id')->get();
        return view('User.getInfoView', [
            // 'posts'=>$posts,
            // 'postsWhere'=>$postsWhere,
            // 'postTitle'=>$postTitle,
            // 'renameDiscription'=>$renameDiscription,
            // 'userAges'=>$userAges,
            // 'user12'=>$user12,
            // 'user21'=>$user21,
            // 'userMenshe'=>$userMenshe,
            // 'userMenRav'=>$userMenRav,
            // 'userAGE'=>$userAGE,
            // 'userOrWhere'=>$userOrWhere,
            // 'queryUserId'=>$queryUserId,
            // 'queryUsername'=>$queryUsername,
            // 'queryUseSalary'=>$queryUseSalary,
            // 'queryAnd'=>$queryand,
            // 'queryOr'=>$queryOr,
            // 'queryOrderBy' => $queryOrderBy,
            // 'queryOrderByDesc'=> $queryOrderByDesc,
            // 'queryLatest'=>$queryLatest,
            // 'queryOldest'=>$queryOldest,
            // 'queryRandomFunc'=>$queryRandomFunc,
            // 'queryRandomFuncFirst'=>$queryRandomFuncFirst,
            // 'queryAgeFirst'=>$queryAgeFirst,
            // 'queryAge'=> $queryAge,
            // 'queryUser'=> $queryUser,
            // 'queryUA' =>$queryUA,
            // 'queryUserTakeSkip'=>$queryUserTakeSkip,
            // 'queryUserTakeSkipWhere'=>$queryUserTakeSkipWhere,
            // 'queryId' => $queryId,
            'queryLinkDB'=>$queryLinkDB
        ]);
    }
}
