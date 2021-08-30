public class Electronics extends Product{

private boolean batteryIncluded;
private double screenSize;


public Electronics(double p,String c,String n,int q,boolean b,double s){

super(p,c,n,q);
batteryIncluded = b;
screenSize = s;

}



public boolean getBattInc(){

return batteryIncluded;

}

public double getScreen(){

return screenSize;

}





public void setBattInc(boolean b){

 batteryIncluded = b;

}

public void setScreen(double s){

 screenSize = s;

}



public String toString(){

return super.toString() + "\n Battery Included: "+ batteryIncluded + " \n Screen Size: "+ screenSize;

}



}