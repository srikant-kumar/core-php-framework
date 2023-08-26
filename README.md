# Tiny Core PHP Framework: Simplified Web Development

Tiny Core PHP is a meticulously crafted, lightweight, and minimalistic PHP framework that redefines the way web applications are built. With a keen emphasis on simplicity, flexibility, and performance, it stands as the quintessential solution for small to medium-sized projects seeking to streamline development without compromising functionality.

## Simplicity Redefined

Tiny Core PHP's core philosophy revolves around simplification. It does away with unnecessary complexities and intricate setups that often burden developers in larger frameworks. By embracing a straightforward approach, Tiny Core PHP empowers developers to dive straight into crafting their application logic rather than grappling with an overwhelming learning curve.

## Flexibility at its Core

Embracing the "one size fits all" ideology doesn't suit every project. This is where Tiny Core PHP shines with its modular approach. It provides essential features like routing, database interaction, and middleware support, while still allowing developers to pick and choose components as needed. This flexibility ensures that your application remains tailored precisely to its requirements, avoiding unnecessary bloat.

## Performance Unleashed

When building web applications, performance is paramount. Tiny Core PHP recognizes this and is meticulously optimized for efficiency. By sidestepping the unnecessary overhead that can accompany larger frameworks, it ensures that your application runs smoothly and swiftly. This is particularly crucial for projects where speed and responsiveness are critical factors.

## Envisioning with MVC

Tiny Core PHP adheres to the Model-View-Controller (MVC) architectural pattern, a cornerstone of modern web development. The MVC pattern fosters a clear separation of concerns, enhancing code maintainability, scalability, and collaboration. With Tiny Core PHP's MVC structure, developers can effortlessly manage their data (Model), presentation (View), and application logic (Controller) independently, making teamwork more efficient and project evolution more manageable.

## Conclusion

In conclusion, Tiny Core PHP emerges as a game-changer in the world of PHP frameworks. Its dedication to simplicity, flexibility, and performance reshapes the development landscape. By embracing the MVC pattern, it not only empowers developers to create efficient and maintainable applications but also offers a promising gateway for small to medium-sized projects to thrive in the digital realm.


## Features

- **Routing:** Easily define routes and handle incoming requests with a simple routing system.
- **MVC Structure:** Organize your code using the Model-View-Controller pattern for better separation of concerns.
- **Database Interaction:** Interact with databases using a straightforward database layer.

## Getting Started

#### Just Follow 6 Simple Steps

1. Clone this repository: `git clone https://github.com/srikant-kumar/core-php-framework.git`
2. Configure Your Database Connection in `application/db/db.php` file.
3. Start defining routes in the `application/routes/route.php` file.
4. Build your controller file in the `application/controllers` directory
5. Build your models file in the `application/models` directory
6. Build your views file in the `application/views` directory

## Sample Controller
```php
<?php

class HomeController extends MainController
{
    public function index()
    {
        /**
         * Sample Call Of Model
         */

        //$home = $this->model('HomeModel');
        //$home->select();

        /**
         * Sample Call Of View
         */
        $data['text'] = 'Sample Text Data For View';
        return $this->view('home', $data);
    }
}
```

## Sample Model

```php
<?php

class HomeModel extends MainModel
{
    public function select()
    {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);

        $i = 0;
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[$i] = $row;
        }
        //user $result->fetch_object for getting object

        return $data;
    }
}
```
