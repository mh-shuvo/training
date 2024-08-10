Traits provide a way to share functionality between classes without the need to use inheritance or global functions.

They can be useful to:

Reuse code: You can define a trait and then use it in multiple classes, which means you don’t have to duplicate code in multiple places.
Organize code: Traits allow you to group related functionality together in a single place, making it easier to understand and maintain your code.
Avoid conflicts: When multiple classes use the same method names, it can cause conflicts. Traits allow you to avoid these conflicts by providing a way to define methods that can be used in multiple classes without causing any conflicts.
Overall, traits are a useful tool for organizing and reusing code in PHP.

Here is an example of a PHP Trait that will add a id property to the class that uses it.

    trait HasUniqueIdentifierTrait
    {
        #[ORM\Id]
        #[ORM\Column(type: 'ulid', unique: true)]
        #[ORM\GeneratedValue(strategy: 'CUSTOM')]
        #[ORM\CustomIdGenerator(class: UlidGenerator::class)]
        protected Ulid $id;

        public function getId(): Ulid
        {
            return $this->id;
        }
    }
This example can be used with the Doctrine ORM.

Here is how to use it:

    <?php

    namespace App\Entity;

    use App\Entity\Utils\HasUniqueIdentifierTrait;
    use Doctrine\ORM\Mapping as ORM;

    #[ORM\Entity]
    class User
    {
        use HasTimestampTrait;

        #[ORM\Column(type: 'string', length: 180, unique: true)]
        private string $username;

        #[ORM\Column(type: 'string', length: 180, unique: true)]
        private string $emailAddress;
    }
This User entity will contain its declared fields and an id field declared in the trait.

How does it differ from inheritance?
Well, the behaviour we described earlier could easily be reached by using some kind of AbstractEntityBase class that would contain the same field.

You would then have to extend this class to benefit from the same functionality.

Using Trait allows you to control more specifically which class will benefit from its contents.

If your Entity already extends another class, for example, it’s easier to implement shared logic using Traits.

Also, Traits can be used by any class, when classes cannot be used all the time, making it easier to share logic between different types of classes/objects.

Overall, the decision between using a trait or an abstract class will depend on your specific needs. If you need to support multiple inheritances and don’t care about specific method signatures, a trait might be a good choice. If you want to define a base class with specific method signatures and only allow single inheritance, an abstract class might be a better fit.

In PHP 8.2, Traits can contain constants that can be accessed from the class that uses it, not from the Trait as a static member.
Real-life example:

    trait MyTrait
    {
        public const MY_CONSTANT = 'hello';
    }
    class MyClass
    {
        use MyTrait;
    }

    echo MyClass::MY_CONSTANT; // hello

    echo MyTrait::MY_CONSTANT; // ERROR
I hope this Story helped you understand Traits in PHP. If you liked this content, check out my other ports, you might find something interesting!

If you want to support me, follow my account. I mostly write about programming and tech subjects in general.

Have a good day 🎉