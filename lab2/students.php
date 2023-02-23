<?php
    session_start();

    function getAllStudents(){
        return isset($_SESSION['students']) ? $_SESSION['students'] : array();
    }

    function getStudent($student_id){
        $students = getAllStudents();

        foreach($students as $student){
            if($student['student_id'] == $student_id){
                return $student;
            }
        }

        return array();
    }

    function deleteStudent($student_id){
        $students = getAllStudents();

        foreach($students as $key => $student){
            if($student['student_id'] == $student_id){
                unset($students[$key]);
                $_SESSION['students'] = $students;
            }
        }
    }

    function addOrUpdateStudent($student_id, $student_name, $student_email){
        $students = getAllStudents();

        $new_student = array(
            'student_id' => $student_id,
            'student_name' => $student_name,
            'student_email' => $student_email
        );

        $is_update_action = false;

        foreach ($students as $key => $student){
            if($student['student_id'] == $student_id){
                $students[$key] = $new_student;
                $is_update_action = true;
            }
        }

        if(!$is_update_action){
            $students[] = $new_student;
        }

        $_SESSION['students'] = $students;

        return $students;
    }

?>