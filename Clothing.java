public class Clothing extends Product{

private String brand;
private String size;


public Clothing(double p,String c,String n,int q,String b,String s){

super(p,c,n,q);
brand = b;
size = s; 

    
}



public String getBrand(){

return brand;

}

public String getSize(){

    return size;
}




public void setBrand(String b){

brand = b;

}

public void setSize(String s){

size = s;

}



public String toString(){

return super.toString() + " \n Brand: "+ brand+ " \n Size: "+ size;

}
























}