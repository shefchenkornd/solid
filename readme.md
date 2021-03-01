## SOLID
    * S - Single responsibility principle (SRP)
    * O - Open/closed principle (OCP)
    * L - Liskov substitution principle (LSP)
    * I - Interface segregation principle (ISP)
    * D - Dependency inversion principle (DIP)


### SRP - “A class should have only one reason to change.”
Каждый модуль или класс должен нести ответственность за отдельную часть функциональности, предоставляемой программным обеспечением, и эта ответственность должна быть полностью инкапсулирована классом.


### OCP - “Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification.”
Общая идея этого принципа прекрасна. Robert C. Martin говорит вам написать свой код, чтобы вы могли добавлять новые функции, не изменяя существующий код.
Это предотвращает ситуации, в которых изменение одного из ваших классов также требует адаптации всех зависимых классов