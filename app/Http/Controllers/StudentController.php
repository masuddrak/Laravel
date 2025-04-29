<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // create student
    function addStudent(Request $req)
    {
        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->save();
        if ($student) {
            echo "Student added successfully";
        } else {
            echo "Student not added";
        }
        return redirect("student");
    }

    // get all student
    function getStudents()
    {
        $student = Student::paginate(2);
        return view("add-student", ["students" => $student]);
    }
    function deleteStudent($id)
    {
        $deleteStuden = Student::destroy($id);
        if ($deleteStuden) {
            return redirect("student");
        }
    }
    function updateStudent($id)
    {
        $deleteStudent = Student::find($id);

        if ($deleteStudent) {
            // return redirect("student");
            return view("update-student",["student"=>$deleteStudent]);
        }
    }
    function updateInfo(Request $req,$id)
    {
        $student = Student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        if($student->save()){
            return redirect("student");
        }else{
            echo "Student not updated";
        }
         
        // if ($deleteStudent) {
        //     // return redirect("student");
        //     return redirect("student");
        // }
    }
    function getSudentName(Request $req)
    {
        $finndStudent = Student::where("name", "like", "%$req->name%")->paginate(2)->appends(['name'=>$req->name]);

        if($finndStudent){
            return view("add-student",["students"=>$finndStudent,"search"=>$req->name]);
        }
        else{
            echo "Student not found";
        }
      
    }
}
