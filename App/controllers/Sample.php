<?php
class Sample
{
    use Controller;

    public function __construct()
    {
        if (empty($_SESSION['USER'])) {
            redirect('Auth/login');
        }
    }

    public function index()
    {
        $data['page'] = "Dashboard";
        $data['pagegroup'] = "";
        $data['User'] = $_SESSION['USER']->email;
        $user = new Demo_model;
        $user->set_table('student');
        $row = $user->singleQuery("SELECT COUNT(`id`) as COUNT FROM `student`;");
        $row2 = $user->singleQuery("SELECT COUNT(`t_id`) as COUNT FROM `teacher`;");
        $row3 = $user->singleQuery("SELECT COUNT(`l_id`) as COUNT FROM `level`;");
        $data['Dashboard'] = array(
            "student"   => "{$row->COUNT}",
            "teacher"   => "{$row2->COUNT}",
            "level"     => "{$row3->COUNT}"
        );
        $row = $user->selectAll();
        $data['Dashboard_table'] = $row;
        $this->view('Sample/index', $data);
    }
//Student
    public function student_management()
        {
            $data['page'] = "Student List";
            $data['pagegroup'] = "UserManagement2";
            $data['User'] = $_SESSION['USER']->email;
            $user = new Demo_model;
            $user->set_table('student');
            $row = $user->selectAll();
            $data['student_management'] = $row;
            $this->view('Sample/student_management', $data);
        }
    
        public function add_student()
        {
            $data = [];
            $data['page'] = "Add student";
            $data['pagegroup'] = "UserManagement2";
            $data['User'] = $_SESSION['USER']->email;

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user = new Demo_model;
                $user->set_table('student');
                $insert_data = array(
                    "id"                => $_POST['inputID'], 
                    "name"              => $_POST['inputName'],
                    "dob"               => $_POST['inputDateOfBirth'],
                    "gender"            => $_POST['inputGender'],
                    "email"             => $_POST['inputEmail'],
                    "address"           => $_POST['inputAddress'],
                    "phone_number"      => $_POST['inputPhoneNumber'],
                    "school_present"    => $_POST['inputSchoolPresent'],
                    "grade"             => $_POST['inputGrade'],
                );
                $user->insert($insert_data);
                redirect('Sample/student_management');
            }
            $this->view('Sample/add_student', $data);
        }

        public function update_student()
        {
            $data = [];
            $data['page'] = "Update student";
            $data['pagegroup'] = "UserManagement2";
            $data['User'] = $_SESSION['USER']->email;
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user = new Demo_model;
                $user->set_table('student');
                $update_data = array(
                    "id"                => $_POST['inputID'], 
                    "name"              => $_POST['inputName'],
                    "dob"               => $_POST['inputDateOfBirth'],
                    "gender"            => $_POST['inputGender'],
                    "email"             => $_POST['inputEmail'],
                    "address"           => $_POST['inputAddress'],
                    "phone_number"      => $_POST['inputPhoneNumber'],
                    "school_present"    => $_POST['inputSchoolPresent'],
                    "grade"             => $_POST['inputGrade'],
                );
                $user->update($_POST['inputId'], $update_data, "id");
                redirect('Sample/update_student');
            }
            if (!empty($_GET['id'])) {
                $user = new Demo_model;
                $user->set_table('student');
                $arr['id'] = $_GET['id'];
                $data['update_student'] = $user->selectFirst($arr);
                $this->view('Sample/update_student', $data);
            } else {
                redirect('Sample/student_management');
            }
        }


        public function delete_student()
        {
            $data = [];
            $data['page'] = "Delete Student";
            $data['pagegroup'] = "UserManagement2";
            $data['User'] = $_SESSION['USER']->email;
            $user = new Demo_model;
            $user->set_table('student');
            $row = $user->customQuery("SELECT `id`,`name`,`dob`, `gender`,`email`,`address`,`phone_number`,`school_present`,`grade` FROM `student`;");
            $data['student_table'] = $row;
            if (!empty($_GET['Delete'])) {
                $user->delete($_GET['Delete']);
                redirect('Sample/student_management');
            }
            $this->view('Sample/delete_student', $data);
        }
    
    
        public function manage_student()
        {
            $data = [];
            $data['page'] = "Manage Student";
            $data['pagegroup'] = "";
            $data['User'] = $_SESSION['USER']->email;
            $user = new Demo_model;
            $user->set_table('student');
            $user->set_limit('100');
            $row = $user->selectAll();
            $data['student_table'] = $row;
    

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $input = filter_input_array(INPUT_POST);
                if ($input['action'] == 'edit') {
                    $update_field = '';
                    if (isset($input['name'])) {
                        $update_field .= "name='" . $input['name'] . "'";
                    } else if (isset($input['dob`'])) {
                        $update_field .= "dob`='" . $input['dob`'] . "'";
                    }
                    else if (isset($input['gender'])) {
                        $update_field .= "gender='" . $input['gender'] . "'";
                    }
                    else if (isset($input['email'])) {
                        $update_field .= "email='" . $input['email'] . "'";
                    }
                    else if (isset($input['address'])) {
                        $update_field .= "address='" . $input['address'] . "'";
                    }
                    else if (isset($input['dob'])) {
                        $update_field .= "dob='" . $input['dob'] . "'";
                    }
                    else if (isset($input['phone_number'])) {
                        $update_field .= "phone_number='" . $input['phone_number'] . "'";
                    }
                    else if (isset($input['school_present'])) {
                        $update_field .= "school_present='" . $input['school_present'] . "'";
                    }
                    else if (isset($input['grade'])) {
                        $update_field .= "grade='" . $input['grade'] . "'";
                    }
                    if ($update_field && $input['id']) {
                        $sql = "UPDATE `student` SET $update_field WHERE `id`='" . $input['id'] . "';";
                        $user->customQuery($sql);
                        var_dump($sql);
                    }
                }
            }
            $this->view('Sample/manage_student', $data);
        }
//Teacher
        public function teacher_management()
        {
            $data['page'] = "Teacher List";
            $data['pagegroup'] = "UserManagement1";
            $data['User'] = $_SESSION['USER']->email;
            $user = new Demo_model;
            $user->set_order_column('t_id');
            $user->set_table('teacher');
            $row = $user->selectAll();
            $data['teacher_management'] = $row;
            $this->view('Sample/teacher_management', $data);
        }

       public function add_teacher()
    {
        $data = [];
        $data['page'] = "Add Teacher";
        $data['pagegroup'] = "UserManagement1";
        $data['User'] = $_SESSION['USER']->email;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_order_column('t_id');
            $user->set_table('teacher');
            $insert_data = array(
                "t_id "             => $_POST['inputId'], 
                "t_name"            => $_POST['inputName'],
                "t_nic"             => $_POST['inputNic'], 
                "t_gender"          => $_POST['inputGender'],
                "t_dob"             => $_POST['inputDateOfBirth'], 
                "t_age"             => $_POST['inputAge'],
                "t_address"         => $_POST['inputAddress	'], 
                "t_phone_number"    => $_POST['inputPhoneNumber'], 
                "t_email"           => $_POST['inputEmail'],
            
            );
            $user->insert($insert_data);
            redirect('Sample/teacher_management');
        }
        $this->view('Sample/add_teacher', $data);
    }

    public function update_teacher()
    {
        $data = [];
        $data['page'] = "Update Teacher";
        $data['pagegroup'] = "UserManagement2";
        $data['User'] = $_SESSION['USER']->email;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_order_column('t_id');
            $user->set_table('teacher');
            $update_data = array(
                "t_id "             => $_POST['inputId'], 
                "t_name"            => $_POST['inputName'],
                "t_nic"             => $_POST['inputNic'], 
                "t_gender"          => $_POST['inputGender'],
                "t_dob"             => $_POST['inputDateOfBirth'], 
                "t_age"             => $_POST['inputAge'],
                "t_address"         => $_POST['inputAddress	'], 
                "t_phone_number"    => $_POST['inputPhoneNumber'], 
                "t_email"           => $_POST['inputEmail'],
            );
            $user->update($_POST['inputId'], $update_data, "t_id");
            redirect('Sample/manage_teacher');
        }
        if (!empty($_GET['t_id'])) {
            $user = new Demo_model;
            $user->set_order_column('t_id');
            $user->set_table('teacher');
            $arr['t_id'] = $_GET['t_id'];
            $data['teacher_management'] = $user->selectFirst($arr);
            $this->view('Sample/update_teacher', $data);
        } else {
            redirect('Sample/teacher_management');
        }
    }

        public function delete_teacher()
    {
        $user = new Demo_model;
        $user->set_order_column('t_id');
        $user->set_table('teacher');
        if (!empty($_GET['Delete'])) {
            $user->delete($_GET['Delete'],'t_id');
            redirect('Sample/teacher_management');
        }
    }
     
    public function manage_teacher()
    {
        $data = [];
        $data['page'] = "Manage Teacher";
        $data['pagegroup'] = "";
        $data['User'] = $_SESSION['USER']->email;
        $user = new Demo_model;
        $user->set_order_column('t_id');
        $user->set_table('teacher');
        $user->set_limit('100');
        $row = $user->selectAll();
        $data['teacher_table'] = $row;


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $input = filter_input_array(INPUT_POST);
            if ($input['action'] == 'edit') {
                $update_field = '';
                if (isset($input['t_name'])) {
                    $update_field .= "t_name='" . $input['t_name'] . "'";
                } else if (isset($input['t_nic`'])) {
                    $update_field .= "t_nic`='" . $input['t_nic`'] . "'";
                }
                else if (isset($input['t_gender'])) {
                    $update_field .= "t_gender='" . $input['t_gender'] . "'";
                }
                else if (isset($input['t_dob'])) {
                    $update_field .= "t_dob='" . $input['t_dob'] . "'";
                }
                else if (isset($input['t_age'])) {
                    $update_field .= "t_age='" . $input['t_age'] . "'";
                }
                else if (isset($input['t_address'])) {
                    $update_field .= "t_address='" . $input['t_address'] . "'";
                }
                else if (isset($input['t_phone_number'])) {
                    $update_field .= "t_phone_number='" . $input['t_phone_number'] . "'";
                }
                else if (isset($input['t_email'])) {
                    $update_field .= "t_email='" . $input['t_email'] . "'";
                }
               
                if ($update_field && $input['t_id ']) {
                    $sql = "UPDATE `teacher` SET $update_field WHERE `t_id `='" . $input['t_id '] . "';";
                    $user->customQuery($sql);
                    var_dump($sql);
                }
            }
        }
        $this->view('Sample/manage_teacher', $data);
    }

    //Level
    public function level_management()
    {
        $data['page'] = "Level List";
        $data['pagegroup'] = "UserManagement2";
        $data['User'] = $_SESSION['USER']->email;
        $user = new Demo_model;
        $user->set_order_column('l_id');
        $user->set_table('level');
        $row = $user->selectAll();
        $data['level_management'] = $row;
        $this->view('Sample/level_management', $data);
    }

    public function add_level()
    {
        $data = [];
        $data['page'] = "Add Level";
        $data['pagegroup'] = "UserManagement";
        $data['User'] = $_SESSION['USER']->email;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_order_column('l_id');
            $user->set_table('level');
            $insert_data = array(
                "l_id"                 => $_POST['inputCourseLevelId'], 
                "l_name"               => $_POST['inputLevelName'],
                "l_ad_fee"             => $_POST['inputLevelAdmission'],
                "l_pla_fee"            => $_POST['inputLevelPlacement'],
                "l_term_fee"           => $_POST['inputLevelTerm'],
                "l_mon_fee"            => $_POST['inputLevelMonthly'],
                "l_exam_fee"           => $_POST['inputLevelExam'],
                "l_cla_day"            => $_POST['inputLevelClassDay'],
                "l_cla_time"            => $_POST['inputLevelTime'],
            );
            $user->insert($insert_data);
            redirect('Sample/level_management');
        }
        $this->view('Sample/add_level', $data);
    }


    // public function List_User()
    // {
    //     $data['page'] = "User List";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     $user = new Demo_model;
    //     $user->set_table('users');
    //     $row = $user->selectAll();
    //     $data['Users_table'] = $row;
    //     $this->view('Sample/List_User', $data);
    // }

  
    // public function Update_User()
    // {
    //     $data = [];
    //     $data['page'] = "Update User";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //         $user = new Demo_model;
    //         $user->set_table('users');
    //         $update_data = array(
    //             "email" => $_POST['inputEmail'], 
    //             "password" => $_POST['inputPassword'], 
    //             "date" => $_POST['inputDate']
    //         );
    //         $user->update($_POST['inputId'], $update_data, "id");
    //         redirect('Sample/List_User');
    //     }
    //     if (!empty($_GET['id'])) {
    //         $user = new Demo_model;
    //         $user->set_table('users');
    //         $arr['id'] = $_GET['id'];
    //         $data['Manage_User'] = $user->selectFirst($arr);
    //         $this->view('Sample/Update_User', $data);
    //     } else {
    //         redirect('Sample/List_User');
    //     }
    // }

    // public function Add_User()
    // {
    //     $data = [];
    //     $data['page'] = "Add User";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //         $user = new Demo_model;
    //         $user->set_table('users');
    //         $insert_data = array(
    //             "email" => $_POST['inputEmail'], 
    //             "password" => $_POST['inputPassword']
    //         );
    //         $user->insert($insert_data);
    //         redirect('Sample/List_User');
    //     }
    //     $this->view('Sample/Add_User', $data);
    // }

    // public function Delete_User()
    // {
    //     $data = [];
    //     $data['page'] = "Delete User";
    //     $data['pagegroup'] = "UserManagement";
    //     $data['User'] = $_SESSION['USER']->email;
    //     $user = new Demo_model;
    //     $user->set_table('users');
    //     $row = $user->customQuery("SELECT `id`, `email` FROM `users`;");
    //     $data['User_table'] = $row;
    //     if (!empty($_GET['Delete'])) {
    //         $user->delete($_GET['Delete']);
    //         redirect('Sample/List_User');
    //     }
    //     $this->view('Sample/Delete_User', $data);
    // }

    // public function Manage_User()
    // {
    //     $data = [];
    //     $data['page'] = "Manage User";
    //     $data['pagegroup'] = "";
    //     $data['User'] = $_SESSION['USER']->email;
    //     $user = new Demo_model;
    //     $user->set_table('users');
    //     $user->set_limit('100');
    //     $row = $user->selectAll();
    //     $data['Users_table'] = $row;

    //     if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //         $input = filter_input_array(INPUT_POST);
    //         if ($input['action'] == 'edit') {
    //             $update_field = '';
    //             if (isset($input['email'])) {
    //                 $update_field .= "email='" . $input['email'] . "'";
    //             } else if (isset($input['password'])) {
    //                 $update_field .= "password='" . $input['password'] . "'";
    //             }
    //             if ($update_field && $input['id']) {
    //                 $sql = "UPDATE `users` SET $update_field WHERE `id`='" . $input['id'] . "';";
    //                 $user->customQuery($sql);
    //                 var_dump($sql);
    //             }
    //         }
    //     }
    //     $this->view('Sample/Manage_User', $data);
    // }
 }
