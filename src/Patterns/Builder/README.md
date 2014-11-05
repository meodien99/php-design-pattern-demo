Name: Builder <br/>
The Builder Design Pattern defines the design of an object that handles the complex building of another object.
=============
The project contains a class that creates the complex Product object. This class contains three methods to completely form it.
If each of these methods is not called when creating new Product object, attributes of the class will be missing and the program will halt.
The methods are setType(), setColor() and setSize()