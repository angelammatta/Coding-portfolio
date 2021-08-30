public class Men extends Clothing{

private String color;




public Men(double p,String c,String n,int q,String b,String s,String col){

super(p,c,n,q,b,s);
color = col;


}




public String getColor(){

return color;

}



public void setColor(String col){

color = col;

}


public String toString(){

return super.toString()+ "\n Color: "+ color;

}














}