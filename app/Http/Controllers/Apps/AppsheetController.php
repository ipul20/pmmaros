<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AppSheetService;

class AppsheetController extends Controller
{
   protected $appSheetService;

    public function __construct(AppSheetService $appSheetService)
    {
        $this->appSheetService = $appSheetService;
    }

    public function getData()
    {
        $data = $this->appSheetService->getData('Role');
        dd($data->getBody());
        return $data;
    }
}
