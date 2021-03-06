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

### LSP - принцип подстановки Барбары Лисков.
Если у нас есть класс A и отнаследованный от него класс B, то если мы заменим все использования класса A на B, ничего не должно измениться в работе программы.
Ведь класс B всего лишь расширяет функционал класса A. Если эта проверка работает, то поздравляю: ваша программа соответствует принципу подстановки Лисков!
Если нет, стоит уволить ведущего программиста задуматься: «а правильно ли спроектированы классы?».

### ISP - принцип разделения интерфейсов.
«Много специализированных интерфейсов лучше, чем один универсальный»
Соблюдение этого принципа необходимо для того,
чтобы классы-клиенты использующий/реализующий интерфейс знали только о тех методах, которые они используют,
что ведёт к уменьшению количества неиспользуемого кода.


### DIP - принцип инверсии зависимостей. dependency inversion principle.
Принцип декларирует, что модули верхних уровней не должны зависеть от модулей нижних уровней, а оба типа модулей должны зависеть от абстракций;
сами абстракции не должны зависеть от деталей, а вот детали должны зависеть от абстракций.