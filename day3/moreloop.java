import java.util.*;

public class moreloop{

  public static void main(String args[]){
      System.out.println("\f");
    Scanner keyboard = new Scanner(System.in);
    System.out.print("Give me one positive number");
    int number = keyboard.nextInt();
      
      
    for(int count = 1; count <= number; count++){
        
        
    if(number%count == 0){
    
    System.out.println(count + "is a factor of" + number);

  
    }
    
    
    }
    
    
    
    }








}