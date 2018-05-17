package SnailRace;

public class Snail implements Runnable {
    
    private int id;
    private int dorsal;
    private String name;
    private String color;
    
    public int getId() {
        return id;
    }
    
    public void setId() {
        this.id = id;
    }
    
    public int getDorsal() {
        return dorsal;
    }
    
    public void setDorsal() {
        this.dorsal = dorsal;
    } 
    
    public String getName() {
        return name;
    }
    
    public void setName() {
        this.name = name;
    }
    
    public String getColor() {
        return color;
    }
    
    public void setColor() {
        this.color = color;
    }

    @Override
    public void run() {
        throw new UnsupportedOperationException("Not supported yet.");
    }
    
    
    
}
