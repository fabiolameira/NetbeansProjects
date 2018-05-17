package horserace;

class Horse extends Thread {

    private static boolean raceOver = false;
    private static final int raceLength = 3;  //You can choose this.
    private static String winner = "";
    private int distance;
    private String name = "";

    public Horse(int id) {
        name = "Horse #" + id;
        distance = 0;
    }

    public static void resetRace() {
        raceOver = false;
    }

    public static boolean done() {
        return raceOver;
    }

    public static String getWinner() {
        return winner;
    }

    public int getDistance() {
        return distance;
    }

    public void run() {
        while (!raceOver) {
            try {
                //Get a little rest and then move
                Thread.sleep((int) (Math.random() * 500));
                if (++distance >= raceLength) {
                    raceOver = true;
                }
            } catch (InterruptedException e) {
                System.err.println(e);
            }
        }
        if (distance == raceLength) {
            winner = name;
        }
    }
}
