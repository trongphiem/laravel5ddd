<?php

namespace App\Repositories;

/**
 * Interface SampleInterface
 */
interface SampleInterface
{
    /**
     * get
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * 一getList
     * @return mixed
     */
    public function getList();

    /**
     * update
     * @param $id
     * @param $data
     * @return $id
     */
    public function update($id, $data);

    /**
     * create
     * @param $data
     * @return $id
     */
    public function create($data);

    /**
     * delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
    
}
