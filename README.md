# OOP Api Simple Framework

Create simple api framework, use oop and decorator pattern

For example:

```
    new LogKernel(
        new Logger(),
        new Kernel(
            new Route()
            new Request($_GET, $_POST, $_REQUEST, $_COOKIE, $_FILES, $_SERVER)
        )
    )

```