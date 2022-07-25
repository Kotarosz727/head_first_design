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

    public void setFlyBehavior(FlyBehavior fb) {
        flyBehavior = fb;
    }

    public void setQuakBehavior(QuakBehavior qb) {
        quakBehavior = qb;
    }
}