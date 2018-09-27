<?php
session_start();
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/22/17
 * Time: 4:01 PM
 */
/* Development and Debugging */
/*************** MYSQL TRANSACTION CLASS *******************/
class my_mysql extends mysqli {
    const hn = 'localhost';
    const db = 'training';
    const un = 'purtzerb';
    const pw = '1Loveoregon!';


    function __construct()
    {
        //equivilent to $conn = new mysqli($hn, $un, $pw, $db);
        //will need to call parent::query($query)
        parent::__construct(self::hn, self::un, self::pw, self::db);
    }

    function __destruct()
    {
        // closes the connection
        parent::close();
    }

    function transactionQuery($queries) {
        /*
         * Only used to insert or update, no reading
         *
         * If $query is string
         *      execute query
         * If $query is array
         *      start transaction
         *      execute each query with possible rollback
         * If no rollback
         *      commit queries.
         *      return array of key values
         */
        //check if $query is array
        if (gettype($queries) === "array") {
            //return 'heoy';

            //set autocommit false to start transaction
            parent::autocommit(false);
            //indicator boolean of success
            $success = true;
            //declare insert_id array
            $id_array = array();
            //loop over queries
            foreach ($queries as $query) {
                //if query does not succeed
                if (!parent::query($query)) {
                    //rollback transaction
                    parent::rollback();
                    //set success flag to false
                    $success = false;

                    //set autocommit to true
                    parent::autocommit(true);

                    //exit loop
                    return $this->error;
                }
                //push id on array
                array_push($id_array, $this->insert_id);
            }

            //if no query returned an error
            if ($success) {
                parent::commit();
                //set autocommit to true
                parent::autocommit(true);
                return $id_array;
            }

        } elseif(gettype($queries) === "string") {
            //if it is just a single query
            //return 'hey';
            return parent::query($queries);
        }else {
            return "Need string or array of strings";
        }
    }

    function readQuery($query) {
        /*Used to get read queries. Could use the above, but this is more explicite.*/
        if (gettype($query) === "string") {
            return parent::query($query);
        }
    }


}









/***************** GENERAL FUNCTIONS ***************************/
//method to check if value is taken
//used from ajax, hence echo, not return
function string_taken($supplied_string, $column_name, $table) {
    //sanitize user strings
    $supplied_string = sanitizeString($supplied_string);

    //get mysql object
    $mysql = new my_mysql();
    //get column from table
    $query = "SELECT * FROM $table WHERE $column_name='$supplied_string';";
    $res = $mysql->readQuery($query);
    if (!$res) {
        die($mysql->connect_error);
    } else {
        $row = $res->fetch_assoc();
        if ($row[$column_name] == $supplied_string){
            echo 'taken';
        }else{
            echo 'free';
        }
    }
}


//use this function whenever sending information to the database
//process any data from the $_POST[] array
function sanitizeString($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    return htmlentities($string);
}


//general function to select any one column from a table
//must have single primary key
function getColumn($table, $column, $compare_column, $id) {
    //get mysql object
    $mysql = new my_mysql();
    $query = "SELECT $column FROM $table WHERE $compare_column='$id';";
    $res = $mysql->readQuery($query);
    if ($res) {
        return $res->fetch_assoc()[$column];
    }else {
        return false;
    }
}

//general function to get a row from table
//must have single primary key
function getRow($table, $compare_column, $id) {
    //get mysql object
    $mysql = new my_mysql();
    $query = "SELECT * FROM $table WHERE $compare_column='$id';";
    $res = $mysql->readQuery($query);
    if ($res) {
        return $res->fetch_assoc();
    }else {
        return false;
    }
}
//general function to delete any one column from table
//must have single primary key
function deleteRow($table, $compare_column, $id) {
    $mysql = new my_mysql();
    $query = "DELETE FROM $table WHERE $compare_column='$id';";
    $mysql->transactionQuery($query);
}





/******************** SPECIFIC FUNCTIONS ******************/




/*************************** user_logging ***************************/

//upload the total user when they are initially signing up
function uploadUserLogging($first_name, $last_name, $username, $password, $email, $about_me, $pet_experience) {
    //get mysql object
    $mysql = new my_mysql();
    //build query
    $query = "INSERT INTO user_logging(register_date, f_name, l_name, username, pass, email, about_me, pet_experience)
              VALUES (now(), '$first_name', '$last_name', '$username', PASSWORD('$password'), '$email', '$about_me', '$pet_experience');";
    $mysql->transactionQuery($query);
    $insert_id = $mysql->insert_id;
    if ($insert_id) {
        //set cookie for user_id
        $_SESSION['user_id'] = $insert_id;
        return True;
    }
}

//function to update profile photo column in user_loging table
function updateUserField($columnName, $value) {
    $user_id = $_SESSION['user_id'];
    $mysql = new my_mysql();
    $query = "UPDATE user_logging
                  SET $columnName = $value
                  WHERE id = $user_id;";
    $result = $mysql->transactionQuery($query);
    return $result;
}


//checks if the user exists and if the password matchs
function checkUserMatch(){
    //check to see that password is set
    if (isset($_POST['password'])) {
        $username = sanitizeString($_POST['username']);
        $password = sanitizeString($_POST['password']);
        $user_row = getUserRowByUsernamePass($username, $password);
        if ($user_row) {
            //set cookie here
            $user_id = $user_row['id'];
            $_SESSION['user_id'] = $user_id;
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

//get user row by username.
//will not need to use fetch_assoc()
function getUserRowByUsernamePass($username, $password) {
    //mysql object
    $mysql = new my_mysql();
    $query = "SELECT * FROM user_logging WHERE username='$username' AND pass=PASSWORD('$password');";
    $res = $mysql->readQuery($query);
    if (!$res) {
        die($mysql->connect_error);
    }else {
        return $res->fetch_assoc();
    }
}


function getUserRow($user_id) {
    //mysql object
    $mysql = new my_mysql();
    $query = "SELECT * FROM user_logging WHERE id=$user_id;";
    $res = $mysql->readQuery($query);
    if (!$res) {
        die($mysql->connect_error);
    }else {
        return $res->fetch_assoc();
    }
}

function getUserField($user_id, $field) {
    //mysql object
    $mysql = new my_mysql();
    $query = "SELECT $field FROM user_logging WHERE id=$user_id;";
    $res = $mysql->readQuery($query);
    if (!$res) {
        die($mysql->connect_error);
    }else {
        return $res->fetch_assoc()[$field];
    }
}

/************************* PET *****************/
function uploadPet($name, $sub_species, $type, $sex, $energy, $cmds_known, $about_pet, $motivators, $age, $med_prob) {
    //get owner_id
    $owner_id = $_SESSION['user_id'];
    //reset sex as 0: female, 1: male
    if ($sex === "M") {
        $sex = 1;
    }else {
        $sex = 0;
    }
    //get mysql object
    $mysql = new my_mysql();
    //get column from table
    $query = "INSERT INTO pet(owner_id, type, sub_species, name, sex, energy_level, about_pet, age, medical_problems, motivators, commands_known)
              VALUES($owner_id, '$type', '$sub_species', '$name', $sex, $energy, '$about_pet', $age, '$med_prob', '$motivators', '$cmds_known');";
    $res = $mysql->transactionQuery($query);
    if ($res) {
        return $res;
    } else {
        return False;
    }

}

function uploadPetPhotoTag($pet_id, $photo_id) {
    $mysql = new my_mysql();
    $query = "INSERT INTO pet_photo(pet_id, photo_id)
              VALUES('$pet_id', '$photo_id');";
    $res = $mysql->readQuery($query);
    if ($res) {
        return $res;
    } else {
        return False;
    }
}

function getUserPets() {
    $user_id = $_SESSION['user_id'];
    //get mysql object
    $mysql = new my_mysql();
    //get column from table
    $query = "SELECT * FROM pet WHERE owner_id=$user_id;";
    $res = $mysql->readQuery($query);
    if ($res) {
        return $res;
    } else {
        return False;
    }
}

function getPet($pet_id) {
    //get mysql object
    $mysql = new my_mysql();
    //get column from table
    $query = "SELECT * FROM pet WHERE id=$pet_id;";
    $res = $mysql->readQuery($query);
    if ($res) {
        return $res->fetch_assoc();
    } else {
        return False;
    }
}


/********************** Photo_data ************************/

/*function to return photo row
    -Will need to call fetch_accoc()
    -If $ppid=True
        -Then will only fetch one photo that is the ppid of the user
    -$ppid default False
*/
function getPhotoRows($user_id, $ppid, $offset=0, $limit=1) {
    //get mysql object
    $mysql = new my_mysql();
    //query string
    $query = '';
    //switch based on $ppid
    if ($ppid === true) {
        //only get the profile photo row
        $query = "SELECT *
                  FROM photo_data 
                  WHERE id IN 
                  (SELECT ppid
                   FROM user_logging
                   WHERE id=$user_id);";
    }else {
        //get all photos associated with user
        $query = "SELECT * FROM photo_data WHERE owner_id=$user_id LIMIT $offset,$limit;";
    }
    //run query
    $res = $mysql->readQuery($query);
    //return $query;

    if (!$res) {
        return False;
    }else {
        return $res;
    }
}

function getPhotoRow($photo_id) {
    $mysql = new my_mysql();
    $query = "SELECT * FROM photo_data WHERE id='$photo_id';";
    $res = $mysql->readQuery($query);
    if ($res) {
        return $res->fetch_assoc();
    }else {
        return false;
    }

}

function getPhotoRowVitals($photo_id) {
    $mysql = new my_mysql();
    $query = "SELECT category, name FROM photo_data WHERE id='$photo_id';";
    $res = $mysql->readQuery($query);
    if ($res) {
        return $res->fetch_assoc();
    }else {
        return false;
    }
}


/*********************** PROBLEM/COMMAND PROBLEM *************************/
//function to get info parts of user_problems and user_cmd_problems
//returns $row['post_id'], ['post_date'], ['table']
//WILL NEED TO USER fetch_assoc()
//used to see the order of rows before getting actual rows one at a time
function getPublicProblemRowsSummary($offset, $limit) {
    $conn = new my_mysql();
    $query = "SELECT id, owner_id, post_date, table_num FROM cmd_problem
              UNION 
              SELECT id, owner_id, post_date, table_num FROM problem
              ORDER BY post_date DESC LIMIT $offset, $limit;";
    $res = $conn->readQuery($query);
    return $res;
}

function getProblemRowSummary($user_id, $offset, $limit) {
    $conn = new my_mysql();
    $query = "SELECT id, owner_id, post_date, table_num FROM cmd_problem WHERE owner_id=$user_id
              UNION 
              SELECT id, owner_id, post_date, table_num FROM problem WHERE owner_id=$user_id
              ORDER BY post_date DESC LIMIT $offset, $limit;";
    $res = $conn->readQuery($query);
    return $res;
}
/*
 SELECT id, owner_id, post_date, table_num FROM cmd_problem WHERE owner_id=1
  UNION
  SELECT id, owner_id, post_date, table_num FROM problem WHERE owner_id=1
  ORDER BY post_date DESC LIMIT 0, 3;
 */

function getProblemRow($post_id, $table_name) {
    $conn = new my_mysql();
    $query = "SELECT * FROM $table_name WHERE id='$post_id';";
    $res = $conn->readQuery($query);
    if ($res) {
        $ret = $res->fetch_assoc();
        return $ret;
    }else {
        return false;
    }
}

//returns the same as the above method, but by category
function getPublicProblemRowsSummaryByTag($offset, $limit, $tags) {
    $conn = new my_mysql();
    $query = "SELECT id, owner_id, post_date, table_num FROM cmd_problem
              WHERE tags LIKE '%$tags%'
              UNION 
              SELECT id, owner_id, post_date, table_num FROM problem
              WHERE tags LIKE '%$tags%'
              ORDER BY post_date DESC LIMIT $offset, $limit;";
    $res = $conn->readQuery($query);
    return $res;
}

function update_post($table, $post_id, $column, $input) {
    //echo $table . "   " . $post_id . "   " . $input . "   " . $column;

    $conn = new my_mysql();
    $query = "UPDATE $table SET $column='$input' WHERE id=$post_id;";
    $conn->transactionQuery($query);
    echo $input;
}

function delete_post($post_table, $post_id, $owner_id) {
    deleteProblemRow($post_id, $post_table);
}

function deleteProblemRow($post_id, $table_name) {
    $conn = new my_mysql();
    $query = "DELETE FROM $table_name WHERE id=$post_id;";
    $res = $conn->transactionQuery($query);
    return $res;
}




/************************** COMMENTS *******************************/

//returns the specified amount of most recent comments from oldest to newest
//will have to call fetch_assoc()
function getAllComments($table, $post_id, $offset, $limit) {
    $conn = new my_mysql();
    $query = "(SELECT * FROM $table WHERE post_id=$post_id ORDER BY post_date DESC LIMIT $offset, $limit)
                ORDER BY post_date;";
    $res = $conn->readQuery($query);
    return $res;
}

//returns the specified amount of most recent comments from newest to oldest
//will have to call fetch_assoc()
function getRecentComments($table, $post_id, $offset, $limit) {
    $conn = new my_mysql();
    $query = "SELECT * FROM $table WHERE post_id=$post_id ORDER BY post_date DESC LIMIT $offset, $limit;";
    $res = $conn->readQuery($query);
    return $res;
}

function uploadComment($table, $comment, $post_id)
{
    $conn = new my_mysql();
    $owner_id = $_SESSION['user_id'];

    $query = "INSERT INTO $table(post_id, owner_id, post_date, comment) 
              VALUES('$post_id', '$owner_id' , now(), '$comment');";
    $res = $conn->transactionQuery($query);
    if (!$res) {
        echo $conn->error;
    }
}

function updateComment($table, $comment_id, $cmt) {
    $conn = new my_mysql();
    $query = "UPDATE $table SET comment='$cmt' WHERE id=$comment_id;";
    $conn->transactionQuery($query);
}

function deleteComment($table, $comment_id) {
    $conn = new my_mysql();
    $query = "DELETE FROM $table WHERE id=$comment_id;";
    $conn->transactionQuery($query);
}

/****************************** CHAT ***************************/

//chat_ids is an array
function getAllChats($user_id, $offset, $number_rows) {
    $conn = new my_mysql();
    $query = "SELECT * FROM chat WHERE owner_id=$user_id ORDER BY recent_date LIMIT $offset,$number_rows;";
    return $conn->readQuery($query);
}

//if reversed==true, then reverse the order
function get_most_recent_messages($chat_id, $offset, $limit, $reversed) {
    $conn = new my_mysql();
    $query = '';
    if ($reversed==true) {
        $query = "SELECT * FROM 
                    (SELECT * FROM message 
                      WHERE chat_id=$chat_id 
                      ORDER BY message_date 
                      DESC LIMIT $offset,$limit) AS a
                  ORDER BY message_date ASC;";
    }else {
        $query = "SELECT * FROM message 
              WHERE chat_id=$chat_id 
              ORDER BY message_date 
              DESC LIMIT $offset,$limit;";
    }
    $res = $conn->readQuery($query);
    return $res;
}

//returns False if no chat
//returns chat_id if chat
function hasChat($user_id, $friend_id) {
    $conn = new my_mysql();
    $query = "SELECT COUNT(*) AS numRecords, id FROM chat
              WHERE id IN 
                  (SELECT id FROM chat WHERE owner_id=$friend_id)
              AND owner_id=$user_id;";
    $res = $conn->readQuery($query)->fetch_assoc();
    if ($res['numRecords'] != 0) {
        return $res['id'];
    } else {
        return False;
    }
}

//creates chat record and returns id
//inserts one chat record, gets id, then inserts next.
//thinking about how I could add multiple chats, but would need to add some
//group concepts that I dont have yet. I dont even have a UI idea for that.
function createChat($user_id, $friend_id, $conn_id=NULL) {
    $conn = new my_mysql();
    $query = "INSERT INTO chat(owner_id, recent_date)
              VALUES($user_id, now());";
    $conn->transactionQuery($query);
    $chat_id = $conn->insert_id;
    $query = "INSERT INTO chat(id, owner_id, recent_date)
              VALUES($chat_id, $friend_id, now());";
    $conn->transactionQuery($query);
    return $chat_id;
}

function removeChat($chat_id) {
    $conn = new my_mysql();
    //will cascade to delete all messages hopefully lol
    $query = "DELETE FROM chat WHERE id=$chat_id;";
    $conn->transactionQuery($query);
}



/**************************************** MESSAGE *******************************/

function addMessage($chat_id, $owner_id, $message) {
    $conn = new my_mysql();
    $query = "INSERT INTO message(chat_id, owner_id, message, message_date)
              VALUES('$chat_id', $owner_id, '$message', now());";
    $conn->transactionQuery($query);
}



/************************************* FRIENDS *******************************/

//function that returns all friend's user_logging rows that do not currently have a chat with
//EXPERIMENTING
function get_chat_excluded_friends($user_id, $offset, $limit) {
    $conn = new my_mysql();
    //get all friends who do not have a chat in common
    $query = "SELECT id, ppid, username, l_name, f_name FROM user_logging
              WHERE id != $user_id 
              AND id IN
                  (SELECT id_one FROM connection WHERE id_two=$user_id AND id_one NOT IN
                      (SELECT owner_id FROM chat WHERE id IN
                          (SELECT id from chat where owner_id=$user_id)
                      AND owner_id != $user_id))
              OR id IN 
                  (SELECT id_two FROM connection WHERE id_one=$user_id AND id_two NOT IN
                      (SELECT owner_id FROM chat WHERE id IN
                          (SELECT id from chat where owner_id=$user_id)
                      AND owner_id != $user_id))
              ORDER BY l_name DESC;";
    $res = $conn->readQuery($query);
    return $res;
}

//get all user's friends
//returns user_logging info necessary for friends
/*$category {
    0: 'get current friends'
    1: 'get sent friend requests'
    2: 'get friend requests'
}
Needed: -friend's id -f_name -l_name -username -ppid -username
*/
function getAllFriends($user_id, $offset, $limit, $category) {
    $conn = new my_mysql();
    $query = '';
    switch ($category) {
        case 0:
            //get all current friend's user_logging info
            $query = "SELECT id, ppid, username, l_name, f_name FROM user_logging
                      WHERE id IN
                          (SELECT id_one FROM connection WHERE id_two=$user_id)
                      OR id IN
                          (SELECT id_two FROM connection WHERE id_one=$user_id)
                      ORDER BY l_name LIMIT $offset,$limit;";
            break;
        case 1:
            //get all requests from user
            $query = "SELECT id, ppid, username, l_name, f_name FROM user_logging
                      WHERE id IN 
                          (SELECT request_id FROM connection_request
                          WHERE user_id=$user_id)
                      ORDER BY l_name LIMIT $offset,$limit;";
            break;
        case 2:
            //get all requests to user
            $query = "SELECT id, ppid, username, l_name, f_name FROM user_logging
                      WHERE id IN 
                          (SELECT user_id FROM connection_request
                          WHERE request_id=$user_id)
                      ORDER BY l_name LIMIT $offset,$limit;";
            break;
    }
    $res = $conn->readQuery($query);
    if ($res) {
        return $res;
    }
    else {
        return $conn->error;
    }
}
/*
 SELECT id, ppid, username, l_name, f_name FROM user_logging
                      WHERE id IN
                          (SELECT request_id FROM connection_request
                          WHERE user_id=1)
                      ORDER BY l_name LIMIT 0,3;

 */

//function to get connection_id via user_id, friend_id
//table: 0=connection | 1=connection_request
function getConnectionID($user_id, $friend_id, $table) {
    $conn = new my_mysql();
    $query = '';
    switch($table) {
        case 0:
            $query = "SELECT id FROM connection WHERE (id_one=$user_id
                      AND id_two=$friend_id)
                      OR (id_one=$friend_id AND id_two=$user_id);";
            break;
        case 1:
            $query = "SELECT id FROM connection_request WHERE (user_id=$user_id
                      AND request_id=$friend_id)
                      OR (user_id=$friend_id AND request_id=$user_id);";
            break;
    }
    $res = $conn->readQuery($query);
    if ($res) {
        return $res->fetch_assoc()['id'];
    }
    else {
        return false;
    }
}

//function to get a friend's ID when given a connection_id and user_id
//table: 0: connection | 1: connection_request
function getFriendID($user_id, $connection_id, $table) {
    $conn = new my_mysql();
    $query = '';
    switch($table) {
        case 0:
            $query = "SELECT * FROM connection WHERE id=$connection_id;";
            $res = $conn->readQuery($query)->fetch_assoc();
            if ($res['id_one'] == $user_id) {
                return $res['id_two'];
            } else {
                return $res['id_one'];
            }
            break;
        case 1:
            $query = "SELECT * from connection_request WHERE id=$connection_id;";
            $res = $conn->readQuery($query)->fetch_assoc();
            if ($res['user_id'] == $user_id) {
                return $res['request_id'];
            } else {
                return $res['user_id'];
            }
            break;
    }
}

function getFriendIDForChat($user_id, $chat_id) {
    $conn = new my_mysql();
    $query = "SELECT * FROM chat WHERE id=$chat_id";
    $res = $conn->readQuery($query);
    while ($row = $res->fetch_assoc()) {
        if ($row['owner_id'] != $user_id) {
            return $row['owner_id'];
            break;
        }
    }
}


//function to add friend to connection table
function addFriend($id_one, $id_two) {
    $conn = new my_mysql();
    $query = "INSERT INTO connection(id_one, id_two, connection_date) VALUES($id_one, $id_two, now());";
    $conn->transactionQuery($query);
}

//function to get friend's vitals. Will have the most info needed for any user display
function getFriendVitals($user_id) {
    $conn = new my_mysql();
    $query = "SELECT id, f_name, l_name, username, ppid FROM user_logging WHERE id=$user_id";
    $res = $conn->readQuery($query);
    if ($res) {
        return $res->fetch_assoc();
    }
}



/******************************* ENCRYPTION *********************************/
 function encrypt($string) {
     $string = strtolower($string);
     $dict = array("a"=>"c", "b"=>"d", "c"=>"1", "d"=>"f", "e"=>"g", "f"=>"q", "g"=>"i", "h"=>"m", "i"=>"l", "j"=>"r", "k"=>"h",
                    "l"=>"t", "m"=>"y", "n"=>"z", "o"=>"2", "p"=>"8", "q"=>"6", "r"=>"o", "s"=>"7", "t"=>"n", "u"=>"0",
                    "v"=>"p", "w"=>"j", "x"=>"4", "y"=>"3", "z"=>"u", "1"=>"9", "2"=>"v", "3"=>"5", "4"=>"k", "5"=>"s", "6"=>"w",
                    "7"=>"b", "8"=>"x", "9"=>"e", "0"=>"a");
     //salt string
     $salted_string = '34as7hd3kj' . $string . 'j7n9s0l1m3n6g55fd';
     $string_array = str_split($salted_string);
     $encrypted = '';
     foreach($string_array as $char) {
        $encrypted = $encrypted . $dict[$char];
     }
     return $encrypted;
 }

 function decrypt($string) {
     $dict = array("c"=>"a", "d"=>"b", "1"=>"c", "f"=>"d", "g"=>"e", "q"=>"f", "i"=>"g", "m"=>"h", "l"=>"i", "r"=>"j", "h"=>"k",
         "t"=>"l", "y"=>"m", "z"=>"n", "2"=>"o", "8"=>"p", "6"=>"q", "o"=>"r", "7"=>"s", "n"=>"t", "0"=>"u",
         "p"=>"v", "j"=>"w", "4"=>"x", "3"=>"y", "u"=>"z", "9"=>"1", "v"=>"2", "5"=>"3", "k"=>"4", "s"=>"5", "w"=>"6",
         "b"=>"7", "x"=>"8", "e"=>"9", "a"=>"0");
     //remove salt
    $desalted_string = substr($string, 10, strlen($string) - 27);
    //move into array to iterate through them
     $string_array = str_split($desalted_string);
     $decrypted = '';
     foreach($string_array as $char) {
         $decrypted = $decrypted . $dict[$char];
     }
     return $decrypted;
 }
























































/************       OLDOLDOLDOLDOLD METHODS           *********************/


function getFileRow($file_id, $table_name) {
    $hn = 'db710109142.db.1and1.com';
    $db = 'db710109142';
    $un = 'dbo710109142';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * from $table_name WHERE photo_id=$file_id;";
    $res = $conn->query($query);
    if ($res) {
        $ret = $res->fetch_assoc();
        $conn->close();
        return $ret;
    }else {
        return false;
    }

}





/*************   PHOTOS    ******************/




//general method to fetch one element from db710109142 table
function getFieldByPhotoID($columnName, $photoID)
{
    //photo_data db
    //photo_data, video_data are tables
    $hn = 'db710109142.db.1and1.com';
    $db = 'db710109142';
    $un = 'dbo710109142';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * FROM photo_data WHERE photo_id='$photoID';";
    $result = $conn->query($query);
    $conn->close();
    if ($result === '') {
        return null;
    } else {
        $ret = $result->fetch_assoc()[$columnName];
        return $ret;
    }
}










/**********   CHAT FUNCTIONS   ********************/




function getChatRow($chat_id) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * from chat WHERE chat_id=$chat_id;";
    $res = $conn->query($query);
    if ($res) {
        $ret = $res->fetch_assoc();
        $conn->close();
        return $ret;
    }else {
        return false;
    }
}

//will create a chat and insert it into the appropriate columns of message_board
//return -1 on fail
//return chat_id on success
function create_chat($sender_id, $recipient_id) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    //echo $message_id . "  " . $sender_id . "  " . $recipient_id . "  " . $status;
    if ($conn->connect_error) die($conn->connect_error);
    $query = "INSERT INTO chat(unread, id_one, id_two) values(1, $sender_id, $recipient_id);";
    //echo $query;
    if ($conn->query($query) === True) {
        return $conn->insert_id;
    }else {
        echo "problem creating chat";
        return -1;
    }

}


//if there is an existing chat, return that chat id
//if not, return -1
function get_chat_id($user_id, $target_id)
{
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * FROM message_board WHERE user_id=$user_id AND friend_id=$target_id;";
    $res = $conn->query($query);
    if ($res->num_rows > 0) {
        $conn->close();
        return $res->fetch_assoc()['chat_id'];
    } else {
        $conn->close();
        return -1;
    }
}


function deleteChat($chat_id) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "DELETE FROM chat WHERE chat_id=$chat_id;";
    $res = $conn->query($query);
    $query = "DELETE FROM message_board WHERE chat_id=$chat_id;";
    $res = $conn->query($query);
    return $res;
}



/**********   MESSAGE BOARD FUNCTIONS   ********************/

function createMessageboardPost($user_id, $chat_id, $friend_id, $friend_l_name) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "INSERT INTO message_board(user_id, friend_id, friend_l_name, chat_id, chat_date) values($user_id, $friend_id, '$friend_l_name', $chat_id, now());";
    $conn->query($query);
    $conn->close();
    return $conn;
}

function updateMessageboardColumn($user_id, $column, $value) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "UPDATE message_board
                  SET $column = $value
                  WHERE user_id = $user_id;";
    $result = $conn->query($query);
    $conn->close();
    return $result;
}



/**********   MESSAGE FUNCTIONS   ********************/



//returns multiple rows depending on limit. WILL NEED TO CALL ->fetch_assoc() on the return
//returns the table in ascending order (i.e. oldest first)


//return most recent message between two people
//NEED TO CALL ->fetch_assoc()
//returns the messages in descending order (newest first)


function getMessageRow($message_id) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * from messages WHERE message_id=$message_id;";
    $res = $conn->query($query);
    if ($res) {
        $ret = $res->fetch_assoc();
        $conn->close();
        return $ret;
    }else {
        return false;
    }
}


//create message record
//if success->return True else return False
function create_message($owner_id, $message, $chat_id) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
        $query = "INSERT INTO messages(owner_id, message, message_date, chat_id) values($owner_id, '$message', now(), $chat_id);";
        if ($conn->query($query) === True) {
            return True;
        }else {
            return False;
        }

    }
}

function deleteAllMessages($chat_id) {
    $hn = 'db715263430.db.1and1.com';
    $db = 'db715263430';
    $un = 'dbo715263430';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "DELETE FROM messages WHERE chat_id=$chat_id;";
    $res = $conn->query($query);
    return $res;
}



/**********   USER FUNCTIONS   ********************/

//general methods to fetch one element from db707 table
function getFieldById($tableName, $columnName, $userID)
{
    $hn = 'db707393488.db.1and1.com';
    $db = 'db707393488';
    $un = 'dbo707393488';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * FROM $tableName WHERE id='$userID';";
    $result = $conn->query($query);
    $conn->close();
    $ret = $result->fetch_assoc()[$columnName];
    return $ret;
}






//method to insert values into user_loging
function insert_user_loging(){
    /*
     * Algorithm:
     *  get all information about user
     *      restructure query based on which fields are filled out
     *  execute insert on user_logging
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     */

}



//method to insert values into user_detail
//id is passed from id generated in user_loging
function insert_user_detail($user_id){
    //user info db
    $hn = 'db707393488.db.1and1.com';
    $db = 'db707393488';
    $un = 'dbo707393488';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    //need id to access correct row
    $id = $user_id;



    $conn->close();
    return TRUE;
}



/**********   FRIEND FUNCTIONS   ********************/







//returns all *_list rows
//will need to call fetch_assoc()
//$table=[friend_list, request_list, sent_list]


//Deletes all records from selected list with connection_id supplied
//Will delete single records from sent_list & request_list
//Will delete 2 records from friend_list
function deleteListRecord($connection_id, $table) {
    $hn = 'db715263433.db.1and1.com';
    $db = 'db715263433';
    $un = 'dbo715263433';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "DELETE FROM $table WHERE connection_id=$connection_id;";
    return $conn->query($query);
}

//deletes connection record from connections table
function deleteConnectionRecord($connection_id) {
    $hn = 'db715263433.db.1and1.com';
    $db = 'db715263433';
    $un = 'dbo715263433';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "DELETE FROM connections WHERE connection_id=$connection_id;";
    return $conn->query($query);
}

//will return the first *_list record with matching connection_id
function getListRecord($connection_id, $table) {
    $hn = 'db715263433.db.1and1.com';
    $db = 'db715263433';
    $un = 'dbo715263433';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * FROM $table WHERE connection_id=$connection_id;";
    $res = $conn->query($query);
    return $res->fetch_assoc();
}



//creates two friend_list records and inserts them
//used when accepting friend request
function createFriendListRecord($user_id, $friend_id, $connection_id) {
    //get both user rows
    $friend_user_row = getUserRow($friend_id, "user_loging");
    if ($friend_user_row) {
        $user_row = getUserRow($user_id, "user_loging");
        //create friend_list record for user
        createListRecord($user_id, $friend_id, $friend_user_row['l_name'], $connection_id, 'friend_list');
        //create friend_list for friend
        createListRecord($friend_id, $user_id, $user_row['l_name'], $connection_id, 'friend_list');
    }
}




//create single connection record and return connection_id
function createConnectionRecord($sender_id, $recipient_id) {
    $hn = 'db715263433.db.1and1.com';
    $db = 'db715263433';
    $un = 'dbo715263433';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "INSERT INTO connections(connection_date, id_one, id_two) VALUES(now(), $sender_id, $recipient_id);";
    $res = $conn->query($query);
    if ($res) {
        return $conn->insert_id;
    }else {
        return False;
    }
}
//create single *_list record
function createListRecord($user_id, $friend_id, $friend_l_name, $connection_id, $table) {
    $hn = 'db715263433.db.1and1.com';
    $db = 'db715263433';
    $un = 'dbo715263433';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "INSERT INTO $table VALUES($user_id, $friend_id, '$friend_l_name', $connection_id, now());";
    $res = $conn->query($query);
    return $res;
}











/********************** PROBLEM FUNCTIONS ************************/






















/*********************** COMMENTS ************************/
















?>