<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;
use App\Chemical;
use App\Management;


class ChemicalController extends Controller
{
    public function index()
    {
        $clinicalData1 = Symptom::select('name')->where('id',89)->get();
        $clinicalData2 = Symptom::select('name')->where('id',144)->get();
        $clinicalData3 = Symptom::select('name')->where('id',216)->get();
        $clinicalData4 = Symptom::select('name')->where('id',34)->get();
        $clinicalData5 = Symptom::select('name')->where('id',218)->get();
        $clinicalData6 = Symptom::select('name')->where('id',130)->get();
        $clinicalData7 = Symptom::select('name')->where('id',124)->get();
        $clinicalData8 = Symptom::select('name')->where('id',219)->get();
        $clinicalData9 = Symptom::select('name')->where('id',220)->get();
        $clinicalData10 = Symptom::select('name')->where('id',221)->get();
        $clinicalData11 = Symptom::select('name')->where('id',204)->get();
        $clinicalData12 = Symptom::select('name')->where('id',222)->get();
        $clinicalData13 = Symptom::select('name')->where('id',217)->get();
        $clinicalData14 = Symptom::select('name')->where('id',113)->get();
        $clinicalData15 = Symptom::select('name')->where('id',223)->get();
        $clinicalData16 = Symptom::select('name')->where('id',29)->get();
        $clinicalData17 = Symptom::select('name')->where('id',137)->get();
        $clinicalData18 = Symptom::select('name')->where('id',224)->get();
        $clinicalData19 = Symptom::select('name')->where('id',225)->get();
        $clinicalData20 = Symptom::select('name')->where('id',13)->get();
        $clinicalData21 = Symptom::select('name')->where('id',226)->get();
        $clinicalData22 = Symptom::select('name')->where('id',430)->get();
        $clinicalData23 = Symptom::select('name')->where('id',85)->get();
        $clinicalData24 = Symptom::select('name')->where('id',228)->get();
        $clinicalData25 = Symptom::select('name')->where('id',146)->get(); 
        $clinicalData26 = Symptom::select('name')->where('id',229)->get();
        $clinicalData27 = Symptom::select('name')->where('id',380)->get();
        $clinicalData28 = Symptom::select('name')->where('id',173)->get();
        $clinicalData29 = Symptom::select('name')->where('id',231)->get();
        $clinicalData30 = Symptom::select('name')->where('id',232)->get();
        $clinicalData31 = Symptom::select('name')->where('id',23)->get();
        $clinicalData32 = Symptom::select('name')->where('id',38)->get();
        $clinicalData33 = Symptom::select('name')->where('id',197)->get();
        $clinicalData34 = Symptom::select('name')->where('id',21)->get();
        $clinicalData35 = Symptom::select('name')->where('id',163)->get();
        $clinicalData36 = Symptom::select('name')->where('id',233)->get();
        $clinicalData37 = Symptom::select('name')->where('id',234)->get();
        $clinicalData38 = Symptom::select('name')->where('id',235)->get();
        $managementData1 = Symptom::select('name')->where('id',26)->get();
        $managementData2 = Symptom::select('name')->where('id',16)->get();
        $managementData3 = Symptom::select('name')->where('id',34)->get();
        $managementData4 = Symptom::select('name')->where('id',42)->get();
        $managementData5 = Symptom::select('name')->where('id',9)->get();
        $managementData6 = Symptom::select('name')->where('id',44)->get();
        $managementData7 = Symptom::select('name')->where('id',45)->get();
        $managementData8 = Symptom::select('name')->where('id',46)->get();
        $managementData9 = Symptom::select('name')->where('id',47)->get();
        $managementData10 = Symptom::select('name')->where('id',48)->get();
        $managementData11 = Symptom::select('name')->where('id',49)->get();
        $managementData12 = Symptom::select('name')->where('id',36)->get();
        $managementData13 = Symptom::select('name')->where('id',6)->get();
        $managementData14 = Symptom::select('name')->where('id',43)->get();
        $managementData15 = Symptom::select('name')->where('id',50)->get();
        $managementData16 = Symptom::select('name')->where('id',5)->get();
        $managementData17 = Symptom::select('name')->where('id',51)->get();
        $managementData18 = Symptom::select('name')->where('id',53)->get();
        $managementData19 = Symptom::select('name')->where('id',52)->get();
        $managementData20 = Symptom::select('name')->where('id',55)->get();
        $managementData21 = Symptom::select('name')->where('id',54)->get();
        return view('Chemicals_Details.Carbamate_Insecticides',compact('clinicalData1','clinicalData2',
                    'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                    'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                    'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                    'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                    'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                    'clinicalData28','clinicalData29','clinicalData30','clinicalData31','clinicalData31',
                    'clinicalData32','clinicalData33','clinicalData34','clinicalData35','clinicalData36',
                    'clinicalData37','clinicalData38','managementData1','managementData2','managementData3',
                    'managementData4','managementData5','managementData6','managementData7','managementData8',
                    'managementData9','managementData10','managementData11','managementData12','managementData13',
                    'managementData14','managementData15','managementData16','managementData17',
                    'managementData18','managementData19','managementData20','managementData21'));
    }
}

