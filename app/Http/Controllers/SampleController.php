<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\SampleServiceInterface;


/**
 * Class SampleController
 * @package App\Http\Controllers
 */
class SampleController extends Controller
{
    /**
     * @var SampleServiceInterface
     */
    private $sampleService;

    /**
     * @param SampleServiceInterface $sampleServiceInterface
     */
    public function __construct(SampleServiceInterface $sampleServiceInterface)
    {
        $this->sampleService = $sampleServiceInterface;
    }

    /**
     * getIndex
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
       
        return view('sample.form');
    }

    /**
     * create
     * @return \Illuminate\Http\Response
     */
    public function getCreate(Request $request)
    {
    		
    		$return = $this->sampleService->save($request);
    		if(is_object($return)) {
    			return redirect('sample')->withErrors($return);
    		}
    		return redirect('sample');
    }

}
