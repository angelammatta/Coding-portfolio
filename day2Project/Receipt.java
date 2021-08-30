/* Mr. Emch - AP CS
	Calculate total owed, assuming 8% tax / 15% tip
	Example of a program with redundant expressions.   Use 
	variables to fix.  Fix the calculations mistake(s) too.
	There were three people at this table, and they all want
	to split the final bill evenly.
*/
public class Receipt {
	public static void main(String[] args) {
	    System.out.print("\f");
	    double eat1 = 38;
	    double eat2 = 40;
	    double eat3 = 30;
	    //these vars use previous var values to get their values 
	    double subtotal = eat1 + eat2 + eat3;
	    double tax = subtotal * .08;
	    double tip = subtotal * .15;
	    double total = subtotal +(tax) +(tip);
	    
		System.out.println("Subtotal:");
		System.out.println("$"+ subtotal);

		System.out.println("Tax:");
		System.out.println("$"+ tax);
		
		System.out.println("Tip:");
		System.out.println("$"+ tip);
		
	
		System.out.println("Total:");
		System.out.println("$"+ (subtotal + tax + tip));
		
		
		System.out.println("Each person's share would be:");
		System.out.println("$"+ total/3);
		//insert your code here to split the bill in thirds.
		//and output the result.
		
	}
}