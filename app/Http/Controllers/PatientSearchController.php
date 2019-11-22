<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientSearchController extends Controller
{
    function index(){
        return view('/searches/patient_search');
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');

            $data = DB::table('patients')
                ->where('fname', 'like', '%'.$query.'%')
                ->orWhere('lname', 'like', '%'.$query.'%')
                ->orWhere('nic', 'like', '%'.$query.'%')
                ->orWhere('phn', 'like', '%'.$query.'%')
                ->orWhere('contact', 'like', '%'.$query.'%')
                ->orderBy('id', 'asc')
                ->get();

            $total_row = $data->count();

            if($total_row > 0)
            {
                $output .= '<div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>PHN</th>
                                            <th>Fist name</th>
                                            <th>Last name</th>
                                            <th>NIC</th>
                                            <th>Gender</th>
                                            <th>DoB</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                        </tr>
                                        </thead>
                                        <tbody>';
                foreach($data as $row)
                {

                    $output .= '<tr onclick=patient_selected(' . $row->id . ')>
                                    <td>'.$row->phn.'</td>
                                     <td>'.$row->fname.'</td>
                                     <td>'.$row->lname.'</td>
                                     <td>'.$row->nic.'</td>
                                     <td>'.$row->gender.'</td>
                                     <td>'.$row->bdate.'</td>
                                     <td>'.$row->contact.'</td>
                                     <td>'.$row->address.'</td>
                                 </tr>
                            ';
                }

                $output .= '        </tbody>
                                </table>
                            </div>';
            }
            else
            {
                $output = '
                       <tr>
                        <td style="text-align:center;" colspan="5">No Data Found</td>
                       </tr>
                       ';
            }

            $data = array(
                'table_data'  => $output
            );

            echo json_encode($data);
        }
    }
}
