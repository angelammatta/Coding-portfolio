public class Media extends Product{


private String type;


public Media(double p,String c,String n,int q, String t){

super(p,c,n,q);
type = t;

}

public String getType(){

return type;

}




public void setType(String t){

type = t;

}




public String toString(){

return super.toString()+ " \n Type: "+ type;


}
































}