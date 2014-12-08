<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/28/2014
 * Time: 3:36 PM
 */

class RegisteredUser extends Eloquent {


    protected $fillable = array('id', 'displayName', 'email', 'passwordHash', 'passwordSalt', 'role');
    /**
     * The database table use by the model
     *
     * @var string
    **/
    private $displayName;
    private $email;
    private $id;
    private $passwordHash;
    private $username;
    private $passwordSalt;
    private $role;


    public function getDisplayName(){
       return  $this->displayName;
    }

    public function setPasswordSalt($passwordSalt){
        $this->$passwordSalt = $passwordSalt;
    }

    public function getPasswordSalt(){
        return $this->$passwordSalt;
    }

    public function setRole(){
        return $this->$role;
    }

    public function getRole($role){
        $this->$role = $role;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setDisplayName($displayName){
        $this->displayName = displayName;
    }

    public function setEmail($email){
        $this->email = email;
    }

    public $table = 'registereduser';
    /**
        Create User
     * @param
     * @return id
     */

    public function createUser(){

        $user = RegisteredUser::create(array(
            'displayName'         => 'Lawly',
            'email'         => 'Grizzly@tt.com',
            'passwordHash' => 'test',
            'passwordSalt' => 'test',
            'role' => 'admin'
        ));
        $user->save();
        //echo "User data Saved Properly";
        //$queries = DB::getQueryLog();
        //$last_query = end($queries);
        return $user["id"];

    }

    /**
     * Get List of Users
     * @param
     * @return Array of users
     */
    public function getUsers(){

        $node = RegisteredUser::where('email','=', 'sharjeel@truemeridian.com')
            ->get();


//        echo $node;
        //$this->displayName = $node["displayName"];
        //$this->email = $node["email"];
        //$this->passwordHash = $node["passwordHash"];

        //$queries = DB::getQueryLog();
        //$last_query = end($queries);
        //echo "**** QUERY *********";
        // print_r($last_query);
        //echo " <br />";
        // echo "**** Return *********";
       // print_r($node);
       // echo $node["displayName"];
       // $fillable = array($node["id"], $node["displayName"], $node["email"], $node["passwordHash"]);
       // print_r($fillable);

//        foreach ($node as $user)
//        {
//           echo ($node["displayName"]);
//        }
        return $node[0];
    }

    public function loadUser($node){
        $user = new RegisteredUser();
        //$user.
        return new RegisteredUser();
    }
} 