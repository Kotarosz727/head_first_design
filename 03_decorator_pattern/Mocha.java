public class Mocha extends CondimentDecorator {
    public Mocha(Bevarage bevarage) {
        this.bevarage = bevarage;
    }

    public String getDescription() {
        return this.bevarage.description + "Mocha";
    }

    public double cost() {
        return this.bevarage.cost + .20;
    }
}