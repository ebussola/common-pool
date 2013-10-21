<?php
/**
 * Created by JetBrains PhpStorm.
 * User: usuario
 * Date: 21/10/13
 * Time: 13:30
 */

namespace ebussola\common\pool;


interface Pool {

    /**
     * @param $objects
     */
    public function addAll($objects);

    /**
     * @param $object
     */
    public function add($object);

    /**
     * @param int|string $object_id
     *
     * @return bool
     */
    public function has($object_id);

    /**
     * @param array $object_ids
     * Ids to check the existence on the pool
     *
     * @return array
     * return the Ids that don't has on the pool
     */
    public function getNotHasIds($object_ids);

    /**
     * @param array $object_ids
     *
     * @return array
     * return only the existents objects
     */
    public function getAllExistents($object_ids);

    /**
     * @param int|string $object_id
     *
     * @return mixed
     */
    public function get($object_id);

    /**
     * @param int|string $object_id
     */
    public function remove($object_id);

}