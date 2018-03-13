Magento ORM
The Magento ORM is used by the Repository implementations that are part of the Magento 2 service contracts.
This is an important change from Magento 1,
as a module should no longer rely on other modules using a specific ORM,
and instead only use the entity repositories.
The service contracts will be covered in more detail in unit 5 of this training.


Notes:
The Magento ORM elements are:
 Models: Are data and behavior, representing entities.
 Resource Models: Are data mappers for the storage structure.
 Collections: Encapsulate sets of models and related functionality, such as filtering, sorting, and paging.
 Resources: Include database connections via adapters.

The ORM gives you the capability to create, load, update, and delete data to a database.
A collection in Magento is a class that implements both the IteratorAggregate and the Countable PHP5 SPL interfaces. Collections are widely used in Magento to store a set of objects of a specific type.


Notes:
Models encapsulate storage independent business logic. The models generally don’t know about data persistence.
Resource Models encapsulate storage related logic. All storage layer related actions are the responsibility of the resource model. The resource model uses the DB adapter to access the storage. It populates the model with the data from the database (in the case of a LOAD operation), or writes the model data to the database (in the case of a SAVE operation).
The benefits this approach offers are:
 Decoupling of the business logic and the storage layer.
 Decoupling of the storage schema from the DB driver implementation (a design pattern known as “Data Mapper”).
Resource Collections represent a list of models of a specific type. This approach is used for working with multiple records.


----------------------------------------------------------------------------------------------->


Resource Models: 'Repositories'
We can consider resource models to be a service layer between models and the database storage.
They help us to work with the database; that is, to get, save, and update data. Basically, any model can be connected to a specific resource model that implements access to the database storage layer.