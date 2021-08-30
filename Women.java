public class Women extends Clothing{

private String length;


public Women(double p,String c,String n,int q,String b,String s,String l){

super(p,c,n,q,b,s);

length = l;


}

public String getLength(){

return length;

}



public void setLength(String l){

length = l;

}


public String toString(){

return super.toString()+ "\n Length: "+ length;

}


















}