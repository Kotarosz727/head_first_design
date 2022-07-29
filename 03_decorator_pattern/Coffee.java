import headfirst.designpatterns.decorator.starbuzzWithSizes.Beverage.Size;

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

        Beverage beverage3 = new HouseBlend();
		beverage3.setSize(Size.VENTI);
		beverage3 = new Soy(beverage3);
		beverage3 = new Mocha(beverage3);
		System.out.println(beverage3.getDescription() 
				+ " $" + String.format("%.2f", beverage3.cost()));
    }
}