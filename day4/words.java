import java.util.*;
/**
 * Write a description of class words here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class words
{
   public static void main(String args[]){
    Scanner keyboard = new Scanner(System.in);
    
    System.out.println("What is your name" );
     
    String name = keyboard.nextLine();
    
    System.out.println("Hi " +name );
    
    System.out.println("How are you today");
    String feel = keyboard.nextLine();
    
   if(feel.contains("good")){

System.out.println("Awesome");
           
}   

else if (feel.contains("bad")){

    System.out.println("Hope things get better");

}

else{

System.out.println("Have a great day");

}
    
    
    }
   
}
