<?php 

/**
 * Данный код выведет строку 1234
 * Дело в статической переменной внутри класса А. Вне зависимости от того,
 * какой экземпляр класса к ней обращается она будет сохранять свое
 * состояние глобально.
 * 
 * Тут работает позднее статическое связывание. И поскольку используется 
 * static, а не self, то и указывать он всегда 
 * будет на класс, где хранится описание.
 */

 class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
 }

 class B extends A {

 }

 $a1 = new A();
 $b1 = new B();
 $a1->foo();
 $b1->foo();
 $a1->foo();
 $b1->foo();