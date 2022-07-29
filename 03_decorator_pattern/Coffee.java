public class Coffee {
    public static void main(String[] args) {
        Bevarage bevarage = new Espresso();

        System.out.println(bevarage.getDescription() 
        + " $" + bevarage.cost());

        Bevarage bevarage2 = new HouseBlend();
        bevarage2 = new Mocha(bevarage2);
        bevarage2 = new Soy(bevarage2);

        System.out.println(bevarage2.getDescription() 
        + " $" + bevarage2.cost());
    }
}