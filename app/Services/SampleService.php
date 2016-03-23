<?php

namespace App\Services;

use App\Services\SampleServiceInterface;
use App\Repositories\SampleInterface;
use Illuminate\Validation\Factory as ValidateFactory;

/**
 * Class SampleService
 * @package App\Services
 */
class SampleService implements SampleServiceInterface
{
    /**
     * @var SampleInterface
     */
    protected $sampleInterface;

    /**
     * @var ValidateFactory
     */
    protected $validateFactory;

    /**
     * @var array
     */
    protected $rules = ["email" => "required|email"];

    /**
     * @param Samplenterface $samplenterface
     * @param ValidateFactory $validateFactory
     */
    public function __construct(SampleInterface $samplenterface, ValidateFactory $validateFactory)
    {
        $this->sampleInterface = $samplenterface;
        $this->validateFactory = $validateFactory;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        
    }

    /**
     * @return mixed
     */
    public function getList()
    {
       
    }

    /**
     * @param $request
     * @param $id
     * @return $id
     */
    public function save($request, $id=null)
    {
		    	$input = $request->only(['email','msg']);
		    	$v = $this->validateFactory->make($input, $this->rules);
		  
		    	//validate input
		    	
		    	if ($v->fails()) {
		    		
		    		//return object error
		    		return  $v;
		    	}
		  
		    	//insert database 
		    	$this->sampleInterface->create(	$input );
		  	
       
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
       
    }

    /**
     * @return mixed
     */
    public function createEntity()
    {
       
    }
}