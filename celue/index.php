<?php
/**
 * Created by czz.
 * User: czz
 * Date: 2019/9/10
 * Time: 23:05
 */

// 需求：
// 鸭子：红头、黑头、木头
// 叫声：1、2、3
// 飞行：会飞、不会飞


/****************************************************************************/

// 飞行为接口
interface flyBehavior
{
    public function fly();
}

// 飞行为族
class FlyA
{
    public function fly()
    {
        echo "FlyA".PHP_EOL;
    }
}

class FlyB
{
    public function fly()
    {
        echo "FlyB".PHP_EOL;
    }
}


interface quackBehavir
{
    public function quack();
}

class QuackA
{
    public function quack()
    {
        echo "QuackA".PHP_EOL;
    }
}

class QuackB
{
    public function quack()
    {
        echo "QuackB".PHP_EOL;
    }
}

/****************************************************************************/

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavir;

    public function performQuack()
    {
        $this->quackBehavir->quack();
    }

    public function performFlay()
    {
        $this->flyBehavior->fly();
    }

}

class DuckA extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyA();
        $this->quackBehavir = new QuackA();
    }
}

class DuckB extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyB();
        $this->quackBehavir = new QuackB();
    }
}

echo "鸭子对象A：";
$duckA = new DuckA();
$duckA->performQuack();
$duckA->performFlay();
echo PHP_EOL;

echo "鸭子对象B：";
$duckB = new DuckB();
$duckB->performQuack();
$duckB->performFlay();
echo PHP_EOL;
