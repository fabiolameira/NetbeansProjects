package horserace;

public class HorseRace {

    public static void main(String args[]) {
        Horse[] horseArray = new Horse[4];  //Initializing 4 Horses
        for (int i = 0; i < horseArray.length; i++) {
            horseArray[i] = new Horse(i + 1);
        }
        System.err.println("!!!!!!!!!Starting race!!!!!!!!");
        Horse.resetRace();
        for (int i = 0; i < horseArray.length; i++) {
            horseArray[i].start();
        }

        Reporter rpt = new Reporter(horseArray);
        rpt.start();
    }

}
