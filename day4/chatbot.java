import java.util.*;

/**
 * Write a description of class chatbot here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class chatbot
{
    public static void main(String args[]){
     Scanner keyboard = new Scanner(System.in);   
    System.out.println("Give me a word");
    String word = keyboard.nextLine();
    
    for(int start = word.length()-1; start >= 0; start--){
    System.out.print(word.charAt(start));
    
    
    }

    
    
    
    
    }
}
