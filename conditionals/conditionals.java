import java.util.*;

public class conditionals{

public static void main(String args[]){  
    
Scanner keyboard = new Scanner(System.in);



System.out.println("Welcome");

System.out.println("Please give me a number");

int num1 = keyboard.nextInt();

System.out.println("another number please");

int num2  = keyboard.nextInt();

System.out.println("another number please");

int num3 = keyboard.nextInt();


 
int product1= num2*num1;

int product2= num2*num3;

int product3= num3*num1;


if ((product1 > product2) && (product1 > product3) ){

System.out.println("This is the highest product" +" " +product1);
}
else if ((product3 > product2) && (product3 > product1)){ 
    
    System.out.println("This is the highest product" + "  "+ product3);
}
else {

 System.out.println("This is the highest product" +" " + product2);

}

}
    
    


}