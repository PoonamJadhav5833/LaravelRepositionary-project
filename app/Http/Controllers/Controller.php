<?php

namespace App\Http\Controllers\Student;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Repository\Employee\EmployeeInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use function is_null;
use function redirect;

class EmployeeController extends Controller
{
    protected $Employee;
    public function __construct(StudentInterface $student)
    {
        $this->Employee= $Employee;
    }

    public function index(){
        if(View::exists('Employee.index')){
            return \view('Employee.index',[
                'Employee' => $this->Employee->getAllData(),
                'trashed' => $this->Employee->getAllTrashedData()
            ]);
        }
    }

    public function storeOrUpdate(Request $request,$id = null){
        $data = $request->only(['name','roll']);
        if(!is_null($id)){ //update
            $this->Employee->storeOrUpdate($id,$data);
            return redirect()->route('Employee.index')->with('message','Data Updated!');
        }else{//insert
            $this->Employee->storeOrUpdate($id = null,$data);
            return redirect()->route('Employee.index')->with('message','Data Inserted!');
        }
    }

    public function view($id){
        if(View::exists('Employee.edit')){
            return view('Employee.edit',['Employee' => $this->Employee->view($id)]);
        }
    }

    public function delete($id){
        $this->Employee->delete($id);
        return redirect()->route('Employee.index')->with('message','Data Deleted!');
    }
}
