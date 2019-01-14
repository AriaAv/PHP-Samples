<?php
abstract class AbstractClass
{
    abstract protected function getValue();
    public function printOut() {
        print $this->getValue();
    }
}
class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }
}
class ConcreteClass2 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass2";
    }
}
$class1 = new ConcreteClass1;
$class1->printOut();

$class2 = new ConcreteClass2;
$class2->printOut();
?> 
