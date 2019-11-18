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
                foreach($data as $row)
                {
                    $output .= '
                            <tr onclick=patient_selected()>
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
            }
            else
            {
                $output = '
                       <tr>
                        <td align="center" colspan="5">No Data Found</td>
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
