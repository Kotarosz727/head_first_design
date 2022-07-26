public class WeatherStation {

    public static void main(String[] args) {
        WeatherData weatherData = new WeatherData();
        
        CurrentDisplay currentDisplay = new CurrentDisplay(weatherData);
        // StaticsDisplay staticsDisplay = new StaticsDisplay(weatherData);
        // ForecastDisplay ForecastDisplay = new ForecastDisplay(weatherData);

        weatherData.setMeacurement(80, 65, 100);
        weatherData.setMeacurement(50, 85, 60);
        weatherData.setMeacurement(60, 95, 70);
    }
}