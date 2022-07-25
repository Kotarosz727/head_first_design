public class MallerdDuck extends Duck {
    public MallerdDuck() {
        flyBehavior = new FlyWithWings();
        quakBehavior = new Quack();
    }

    public void display() {
        System.out.println("I am Mallerd Duck.");
    }
}