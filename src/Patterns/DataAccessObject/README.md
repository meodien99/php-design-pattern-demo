Name: Data Access Object <br/>
The Data Access Object Design Pattern describes the creation of an object that provides transparent access to any data source
=============
In this example, a user entity is the focus. The user has a row in a MySQL that contains information specific and unique to each user.
The functionality must allow us to return a user by their primary key or by a search on their first name. Additionally, you must be
able to perform updates to any field in the user entity's row.