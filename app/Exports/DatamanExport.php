<?php

namespace App\Exports;

use App\Models\ResultDataman;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
// use Illuminate\Http\Request;Query;

use Maatwebsite\Excel\Concerns\WithHeadings;


class DatamanExport implements FromCollection, WithHeadings
{
    protected $data;
    // public function collection()
    // {
    //     return User::all();
    // }
    public function __construct($data)
    {
        // $this->req = $req;
        $this->data = $data;
    }
    // public function query()
    // {


    //     $params = $this->req->all();
    //     $format = "Y-m-d H:i:s";
    //     $query = ResultDataman::query();
      
    //     if (isset($params["from_date"]) && $params["from_date"] !== ""){
    //         $fromDate = Carbon::parse($params["from_date"])->format($format);
    //         $query -> where("DateTime",">=", $fromDate);
    //     }
    //     if (isset($params["to_date"]) && $params["to_date"] !== ""){
    //         $toDate = Carbon::parse($params["to_date"])->format($format);
    //         $query -> where("DateTime","<=", $toDate);
    //     }
    //     if(isset($params["status"]) && $params["status"] !==""){
    //         $query -> where("Status","=", $params["status"]);

    //     }
    //     if(isset($params["line"]) && $params["line"] !==""){
    //         $query -> where("Line","=", $params["line"]);

    //     }
    //     if(isset($params["SKUID"]) && $params["SKUID"] !==""){
    //         $query -> where("SKUID","=", $params["SKUID"]);

    //     }

    //     return $query;
    // }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function collection()
    {
        return collect($this->data);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings() :array
    {
        return [
            'ID',
            'Name',
            'Email',
        ];
    }
}