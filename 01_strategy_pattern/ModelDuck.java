public class ModelDuck extends Duck {
    public ModelDuck() {
        flyBehavior = new FlyNoWay();
        quakBehavior = new Quack();
    }

    public void display() {
        System.out.println("I am Model Duck.");
    }
}