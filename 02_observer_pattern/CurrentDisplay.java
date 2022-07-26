public class CurrentDisplay implements Observer {
    private float temperture;
    private float humidity;
    private WeatherData weatherData;
    
    public CurrentDisplay(WeatherData weatherData) {
        this.weatherData = weatherData;
        weatherData.registerObserver(this);
    }

    public void update() {
        this.temperture = weatherData.temperture;
        this.humidity = weatherData.humidity;
        display();
    }

    public void display() {
        System.out.println("current condition:" + temperture + "F degrees and" + humidity + "% humidity");
    }
}