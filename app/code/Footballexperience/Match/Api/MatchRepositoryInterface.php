<?php

namespace Footballexperience\Match\Api;

interface MatchRepositoryInterface
{
    
    /**
     * Save entity
     *
     * @param \Footballexperience\Match\Api\Data\MatchInterface $stadium
     * @return \Footballexperience\Match\Api\Data\MatchInterface
     */
    public function save(\Footballexperience\Match\Api\Data\MatchInterface $entity);
    
    /**
     * Retrieve entity by id
     *
     * @param int $entityId
     * @return \Footballexperience\Match\Api\Data\MatchInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($entityId);
    
    /**
     * Retrieve entity by attribute
     *
     * @param $attributeCode
     * @param $value
     * @return \Footballexperience\Match\Api\Data\MatchInterface|boolean
     */
    public function get($attributeCode, $value);
    
    /**
     * Delete $entity.
     *
     * @param \Footballexperience\Match\Api\Data\MatchInterface $entity
     * @return boolean
     * @throws \Magento\Framework\Exception\CouldNotSaveException|\Magento\Framework\Exception\StateException
     */
    public function delete(\Footballexperience\Match\Api\Data\MatchInterface $entity);
    
    /**
     * Delete entity by ID.
     *
     * @param int $entityId
     * @return boolean
     */
    public function deleteById($entityId);
    
    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Footballexperience\Match\Api\Data\MatchInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}