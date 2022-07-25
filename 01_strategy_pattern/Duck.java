public abstract class Duck {
    FlyBehavior flyBehavior;
    QuakBehavior quakBehavior;

    public Duck() {}

    public abstract void display();

    public void Swim() {
        System.out.println("every kind of Duck swim even decoy");
    }

    public void performFly() {
        flyBehavior.fly();
    }

    public void performQuak() {
        quakBehavior.quak();
    }

    public void setFlyBehavior(FlyBehavior $b) {
        flyBehavior = $b;
    }

    public void setQuakBehavior(QuakBehavior $b) {
        quakBehavior = $b;
    }
}