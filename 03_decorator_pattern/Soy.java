public class Soy extends CondimentDecorator {
    public Soy(Bevarage bevarage) {
        this.bevarage = bevarage;
    }

    public String getDescription() {
        return this.bevarage.description + "Soy";
    }

    public double cost() {
        return this.bevarage.cost + .99;
    }
}