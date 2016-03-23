<?php

namespace App\Repositories;
use stdClass;
use Exception;
use PDOException;
use Carbon\Carbon;
use App\Repositories\SampleInterface;


/**
 * Class SampleRepository
 * @package Keihi\Repositories
 */
class SampleRepository implements SampleInterface
{
   
	
    public function __construct()
    {
      
    }

    /**
     * get
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
       
    }

    /**
     * 一getList
     * @return mixed
     */
    public function getList()
    {
       
    }

    /**
     * update
     * @param $id
     * @param $data
     * @return $id
     */
    public function update($id, $data)
    {
       
    }

    /**
     * create
     * @param $data
     * @return $id
     */
    public function create($data)
    {
		    	$return = new stdClass();
		    	
		    	try {
		    	
		    		$param = [
		    				'email' => $data['email'],
		    				'msg' => $data['msg']
		    		];
		    	
		    	
		    		$return->id = \DB::connection('mysql')
		    		->table('sample')
		    		->insertGetId($param);
		    		return $return;
		    	}
		    	catch(Exception $e)
		    	{
		    		throw $e;
		    	}
    }

    /**
     * delete
     * @param $id
     * @return $id
     */
    public function delete($id)
    {
       
    }
    /**
     * createEntity
     * @return mixed
     */
    public function createEntity()
    {
    		
    }

}