<?php

namespace Footballexperience\Team\Api;

interface TeamRepositoryInterface
{
    
    /**
     * Save entity
     *
     * @param \Footballexperience\Team\Api\Data\TeamInterface $stadium
     * @return \Footballexperience\Team\Api\Data\TeamInterface
     */
    public function save(\Footballexperience\Team\Api\Data\TeamInterface $entity);
    
    /**
     * Retrieve entity by id
     *
     * @param int $entityId
     * @return \Footballexperience\Team\Api\Data\TeamInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($entityId);
    
    /**
     * Retrieve entity by attribute
     *
     * @param $attributeCode
     * @param $value
     * @return \Footballexperience\Team\Api\Data\TeamInterface|boolean
     */
    public function get($attributeCode, $value);
    
    /**
     * Delete $entity.
     *
     * @param \Footballexperience\Team\Api\Data\TeamInterface $entity
     * @return boolean
     * @throws \Magento\Framework\Exception\CouldNotSaveException|\Magento\Framework\Exception\StateException
     */
    public function delete(\Footballexperience\Team\Api\Data\TeamInterface $entity);
    
    /**
     * Delete entity by ID.
     *
     * @param int $entityId
     * @return boolean
     */
    public function deleteById($entityId);
    
    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Footballexperience\Team\Api\Data\TeamInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}