<?php
namespace App\Http\Controllers;

class UserController extends Controller{
    public function show(){
        return "Hello s";
    }
    public function all (){
        return "all posts";
    }
    public function userInfo($usersurname = null, $username = null){
        if($usersurname==null and $username!=null){
            return  "name ".$username;
        }
        elseif($usersurname!=null and $username!=null){
            return "name ".$username. " surname " .$usersurname;
        }
    }
    public function userCity($user){
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];
        $result = "Это пользователь не найден";
        foreach($users as $key => $elem){
            if($user == $key){
                $result = $users[$key];
                break;
            }
        }
        return $result;
    }
    public function show12(){
        return view('testView');
    }
    public function userInfoView($usersurname = null, $username = null){
        $result = $this->userInfo($usersurname, $username);
        return view('User.testView', ['res'=>$result]);
    }
    public function showCity($name){
        $result = $this->userCity($name);
        return view('User.cityView', ['res'=>$result]);
    }
    public function showAll(){
        $result = $this->all();
        return view('User.allView', ['res'=>$result]);
    }
    public function showHello(){
        $result = $this->show();
        return view('User.showView', ['res'=>$result, 'title'=>'Show']);
    }
    public function showVar($name, $age, $salary){
        return view('User.VarView', ['name'=>$name, 'age'=>$age, 'salary'=>$salary]);
    }
    public function cssClass(){
        return view('User.CssView', ['redbackground'=>'r', 'val1'=>'name','val2'=>'age', 'val3'=>'salary', 'cssCode'=>'background: red;', 'valueHrefs'=>'//vk.com', 'text'=>'vk.coms', 'users'=>['name'=>'Alexander','age'=>21,'salary'=>25000]]);
    }
    public function  getCity($country, $city){
        return view('User.cView',['location'=> ['country'=>$country,'city'=>$city]]);
    }
    public function getIfElse($age, $ars, $strargument){
        $ars1 = explode(",", $ars);
        $resstr = explode(",", $strargument);
        $data = [1,2,3,4,5,610]; // или поменять на число
        $arrs = [1,2,3,5,6,7,8,9,10,11,12,13,14];
        return view('User.ifElseView', ['isTrue'=>$age, 'isArs'=>$ars1, 'strarg'=>$resstr, 'arr'=>$arrs, 'res'=>$data]);
    }
    public function getwoarrs(){
        $data1 = [[1,2,3,4,5], [6,7,8,9,10]]; // убрать один массив и будет перебор двухмерного массива  а если без изменений то он перебирает многомерный массив
        $data2=['us1','us2','us3','us4'];
        $array = [1, 2, 3, 4, 0, 5, 6];
        return view('User.getwoarrView', ['d'=>$data1, 'd1'=>$data2, 'arr'=>$array]);
    }

}
?>
