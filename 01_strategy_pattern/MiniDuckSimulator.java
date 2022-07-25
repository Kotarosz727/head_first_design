public class MiniDuckSimulator {
    public static void main(String[] args) {
        Duck Mallerd = new MallerdDuck();

        Mallerd.performFly();
        Mallerd.performQuak();

        Duck Model = new ModelDuck();
        Model.performFly();
        Model.performQuak();

        Model.setFlyBehavior(new FlyRocket());
        Model.performFly();
    }
}