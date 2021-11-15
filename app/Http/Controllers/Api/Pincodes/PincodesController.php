<?php

namespace App\Http\Controllers\Api\Pincodes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pincodes\BookRequest;
use Illuminate\Http\Response;
use App\Http\Resources\PincodeResource;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Models\Book;
use App\Models\Pincode;

class PincodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
      {
        return   PincodeResource::collection(Pincode::paginate(100));

         }

    public function getData()
    {
        $pincodes = PincodeResource::collection(Pincode::paginate(100));

        return view('data', compact('pincodes'));
    }


    public function storeData()
    {
        $url = 'http://data.gov.in/sites/default/files/all_india_pin_code.csv';

        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        $content = (string) $res->getBody();
        $stringArr = explode("\n", $content);
        array_shift($stringArr);
        foreach ($stringArr as $key => $value) {
            $valueArr = explode(",", $value);
            $member = Pincode::updateOrCreate(['officename' => $valueArr[0], 
             'pincode' => $valueArr[1], 'officeType' => $valueArr[2],
             'Deliverystatus' => $valueArr[3], 'divisionname' => $valueArr[4],
             'regionname' => $valueArr[5], 'circlename' => $valueArr[6],
             'Taluk' => $valueArr[7], 'Districtname' => $valueArr[8],'statename' => $valueArr[9]
                ]);
        }

         return json_decode($content);

         
    }

}
