import java.util.*;

public class WeatherData implements Subject {
    private List<Observer> observers;
    private float temperture;
    private float humidity;
    private float pressure;

    public WeatherData() {
        observers = new ArrayList<Observer>();
    }

    public void registerObserver(Observer o) {
        observers.add(o);
    }

    public void removeObserver(Observer o) {
        observers.remove(o);
    }

    public void notifyObservers() {
        for(Observer observer: observers) {
            observer.update(temperture, humidity, pressure);
        }
    }

    public void measureMentChanged() {
        notifyObservers();
    }

    public void setMeacurement(float temperture, float humidity, float pressure) {
        this.temperture = temperture;
        this.humidity = humidity;
        this.pressure = pressure;
        measureMentChanged();
    }

}