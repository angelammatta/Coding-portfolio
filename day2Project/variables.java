
import java.util.*;

// this imports a library that adds own code, this is using an API

public class variables {

public static void main(String args[]){
Scanner keyboard = new Scanner (System.in); //sets up input, this is an object like joystick robotic   
   
System.out.print("\f");
//clears the screen of previous functions results

System.out.print("Pick a number, any number");

int x = keyboard.nextInt();

System.out.print("Pick a number, any number again ");

int y = keyboard.nextInt();
//int is used for making variables that have only integers, used instead of var

double b = 3.55; 
//used for storing decimal #s aka floating point #s

System.out.print("y%x=" + (y%x));
//can use any order of operations, strings, boolean and integers plus doubles 

}



}