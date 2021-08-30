public class recur{

/*
public static void recur1(int n){

if(n>0){

recur1(n-2);

}

System.out.print(n+ " ");

}




public static void recur2(int n){

    if(n>0){
    
    recur2(n-1);
    for(int i = 0;i<n;i++){
      System.out.print("*");

    }
    System.out.println();

    }
    
   
    
    }
    


*/

public static int gcf(int a, int b){





if(a%b==0){

  return b;

 }


 else{
   
  if(a>b)
   return gcf(a-b,b);
return gcf(a,b-a);

 }



 }

 


















public static void main(String[] args){



//recur2(1);


System.out.print(gcf(7,3));


}








}