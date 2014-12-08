<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/27/2014
 * Time: 12:07 PM
 */

class MyController extends BaseController {


    /** Show Test Message**/
    public function init(){
        $test = "Test";
        $userList = "asdfasdfadsf" ;
        $testList = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
        Log::info('This is some useful information.');
        return View::make('userList', array('list' => $testList, 'test' => $test));
    }


    public function showWelcome()
    {
        return View::make('hello');
    }

    public function  saveUser(){
        $user = new RegisteredUser();
        $id = $user->createUser();
        return View::make('createUser' , array('list' => 'created', 'id' => $id));
    }

    public function  loadUser(){
        $user = new RegisteredUser();

        $node = "";
        //$results = DB::select('select * from registereduser where id = ?', array(1));
        //$user2 =  $user->getUsers();
        //print_r( $user2);
//        echo " -- > > > >  " . $user2["displayName"];
////        foreach($data as $user2){
////            echo " -- " . $user2->getDisplayName();
////        }
//        Log::info('This is some useful information.');
        //return View::make('loadUser', $data);

        return View::make('loadUser', array( 'list'=> $user->getUsers(), 'test' => 'try'));
    }

} 