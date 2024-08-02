Object-Oriented Programming (OOP) is a programming paradigm based on the concept of "objects," which are instances of classes. OOP is designed to organize and structure code in a way that makes it more modular, reusable, and scalable.

Principles of OOP
Encapsulation: Encapsulation is the bundling of data (attributes) and methods (functions) that operate on the data into a single unit or class. It restricts direct access to some of an object's components, which can prevent the accidental modification of data. In PHP, this is done using access modifiers (public, private, and protected).

Abstraction: Abstraction means hiding the complex implementation details and showing only the necessary features of an object. It simplifies the interaction with objects by exposing only relevant functionalities.

Inheritance: Inheritance allows a class to inherit properties and methods from another class. The class that inherits is called a "child class" or "subclass," and the class being inherited from is the "parent class" or "superclass." This promotes code reuse and can simplify the maintenance of code.

Polymorphism: Polymorphism allows objects of different classes to be treated as objects of a common superclass. It also allows one interface to be used for a general class of actions, with the specific action determined by the exact nature of the situation. Polymorphism is usually implemented through method overriding and interfaces.

4 Pillars of OOP
The four pillars of OOP are the fundamental concepts that enable OOP principles to be implemented effectively:

Encapsulation: As mentioned, this involves bundling data and methods that operate on the data into a single unit or class and restricting access to some components.

Abstraction: Simplifying complex reality by modeling classes appropriate to the problem.

Inheritance: Creating a new class from an existing class to share behavior and attributes.

Polymorphism: The ability to use a unified interface to interact with different classes that share a common parent.

Class Properties
Class properties in PHP are variables that are defined within a class and represent the state or data that the class holds. They are defined using the var, public, protected, or private keywords.

Access Modifiers
Access modifiers in PHP control the visibility of properties and methods within a class. They determine how accessible the members of the class are:

Public: The property or method can be accessed from anywhere, both inside and outside the class.
Protected: The property or method can only be accessed within the class itself and by inheriting classes.
Private: The property or method can only be accessed within the class itself, not even by inheriting classes.
Inheritance
Inheritance allows a class to inherit properties and methods from another class, promoting code reuse and hierarchical class structure.

Polymorphism
Polymorphism in PHP can be implemented through method overriding or interfaces. It allows for a common interface or method to behave differently based on the object it is interacting with.
Constants & Enums
Constants
Constants are like variables but, once defined, they cannot be changed. In PHP, constants are defined using the const keyword or the define() function.

Enums (PHP 8.1+)
Enums (Enumerations) are a special kind of class that represents a group of constants. Enums provide a way to define a set of named values, which are strongly typed, making your code more readable and less prone to errors.


    enum Status: string {
        case PENDING = 'pending';
        case APPROVED = 'approved';
        case REJECTED = 'rejected';
    }

    function checkStatus(Status $status) {
        if ($status === Status::APPROVED) {
            echo "Status is approved!";
        }
    }

    checkStatus(Status::APPROVED); // Outputs: Status is approved!


Procedural Oriented Programming (POP) and Object-Oriented Programming (OOP) are two different programming paradigms. Here's a comparison between the two in the context of PHP:

1. Basic Concept
Procedural Oriented Programming (POP):

In POP, the program is organized as a sequence of procedures or functions that operate on data.
It focuses on the step-by-step execution of functions, where data is passed from one function to another.
Object-Oriented Programming (OOP):

In OOP, the program is organized around objects, which are instances of classes.
It focuses on modeling real-world entities as objects, which combine data and behavior in a single unit.
2. Data Management
POP:

Data is usually stored in global variables, and functions operate on this data.
There is a higher chance of data being accidentally modified, leading to potential issues with data integrity.
OOP:

Data is encapsulated within objects, and access is controlled through methods (functions within classes).
This encapsulation improves data security and integrity, as the internal state of an object can only be modified by the object’s methods.
3. Modularity and Code Reusability
POP:

Code reusability is achieved through functions and procedures. However, reusing code often requires passing many parameters, making it less modular and harder to manage.
Functions are often tightly coupled with the data they operate on.
OOP:

OOP promotes code reuse through inheritance and polymorphism, where child classes can inherit and extend the functionality of parent classes.
Objects are more modular, making it easier to manage and reuse code.
4. Scalability
POP:

POP can become difficult to manage and scale as the codebase grows, especially for large projects.
Adding new features may require modifying existing functions, which can introduce bugs.
OOP:

OOP is more suitable for large, complex applications. The use of classes and objects makes it easier to manage and extend code without affecting existing functionality.
OOP allows for better organization and separation of concerns, making the codebase more maintainable.
5. Complexity
POP:

POP is generally simpler and more straightforward for small projects.
It is easy to learn and understand, especially for beginners, but can become complex when dealing with large projects.
OOP:

OOP introduces more concepts like classes, objects, inheritance, and polymorphism, which can be more complex for beginners.
However, once understood, these concepts help manage complexity in large projects.