public class recur{

//until it reaches zero, prints out the n-2 # 
public static void recur1(int n){
    if(n>0){
     recur1(n-2);
   }
     System.out.print(n+ " ");
}



//until it reaches zero, prints out n-2 stars, decreases by n-1 each time but then in for loop stop before n so n-2 amount of stars 
public static void recur2(int n){

    if(n>0){
    
    recur2(n-1);
    for(int i = 0;i<n;i++){
      System.out.print("*");

    }
    System.out.println();

    }
    }
    



//until a can be evenly divided by b, alter a,(a-b) or b(b-a) so at the end you get the greatest common factor 
public static int gcf(int a, int b){

if(a%b==0){

   return b;
  }

 else{
   
  if(a>b){
    return gcf(a-b,b);
  }
     
return gcf(a,b-a);

 }

 }



public static void main(String[] args){



recur2(1);


System.out.print(gcf(7,3));


}


}
