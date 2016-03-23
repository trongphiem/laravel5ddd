<?php

namespace App\Services;


/**
 * Interface SampleServiceInterface
 * @package App\Services
 */
interface SampleServiceInterface
{
    /**
     * get
     * @return mixed
     */
    public function get($id);

    /**
     * 一getList
     * @return mixed
     */
    public function getList();

    /**
     * save
     * @param $input
     * @param $id | null
     * @return $id | null
     */
    public function save($input, $id=null);

    /**
     * delete
     * @param $id
     * @return $id
     */
    public function delete($id);

    /**
     * createEntity
     * @return $entity
     */
    public function createEntity();
}