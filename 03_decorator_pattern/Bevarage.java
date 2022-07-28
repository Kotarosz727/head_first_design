public abstract class Bevarage {
    String description = "Unknown Bevarage";

    public String getDescription() {
        return description;
    }

    public abstract double cost();
}