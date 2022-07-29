public abstract class Bevarage {
    public enum Size { TALL, GRANDE, VENTI };
	Size size = Size.TALL;
    String description = "Unknown Bevarage";

    public String getDescription() {
        return description;
    }

    public Size getSize() {
        return this.size;
    }

    public abstract double cost();
}