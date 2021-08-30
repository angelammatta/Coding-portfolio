import java.util.*;

public class sort{


    
/*selection sort*/


//sort highest to lowest with ArrayList

public static void selectSort(ArrayList<Integer>list, boolean a){


    for(int j = 0; j<list.size()-1;j++){

      int minIndex = j;
      for(int k = j+1;k<list.size();k++){
        
        if(list.get(k)>list.get(minIndex)){

           minIndex = k;

        }



      }


     Integer temp = list.get(j);
     list.set(j,list.get(minIndex));
     list.set(minIndex,temp);






    }


System.out.println(list);

        
       




}






//sort highest to lowest with Array

public static void selectSort(int[] list, int b){

    for(int j = 0; j < list.length-1 ;j++){
    
        
      int minIndex = j;
      for(int k = j+1;k<list.length;k++){
        
        if(list[k]>list[minIndex]){

           minIndex = k;

        }



      }


     Integer temp = list[j];
     list[j] = list[minIndex] ;
     list[minIndex] = temp;
 






    
    
    
    
    }
    
    
    for(int a: list){
    
        System.out.print(a+ " ");
    
    }
    
    System.out.println(" ");
    
    
        
    }
    






//sort A->Z 


public static void selectSort(ArrayList<String>list, int k ){


    for(int j = 0; j < list.size()-1;j++){
      
        int minIndex = j;


        for(int a = j+1;a<list.size();a++){

          if(list.get(a).compareTo(list.get(minIndex))  <= 0  ){
                   minIndex = a;




          }





        }


        
        
        
         String temp = list.get(j);
         list.set(j,list.get(minIndex));
         list.set(minIndex,temp);
        
        
        
        }
        
        
        
        System.out.println(list);
        



    
}




//sort Z->A


public static void selectSort(ArrayList<String>list, boolean b,int a){



 
    for(int j = 0; j < list.size()-1;j++){
      
        int minIndex = j;


        for(int c = j+1;c<list.size();c++){

          if(list.get(c).compareTo(list.get(minIndex))  >= 0  ){
                   minIndex = c;




          }





        }


        
        
        
         String temp = list.get(j);
         list.set(j,list.get(minIndex));
         list.set(minIndex,temp);
        
        
        
        }
        
        
        
        System.out.println(list);
        









    
}






public static void selectSort(String[]list,int a ,boolean b){



    for(int j = 0; j < list.length-1;j++){
      
        int minIndex = j;


        for(int c = j+1;c<list.length;c++){

          if(list[c].compareTo(list[minIndex])  >= 0  ){
                   minIndex = c;




          }





        }


        
        
        
         String temp = list[j];
         list[j] = list [minIndex];
         list[minIndex] = temp;
        
        
        
        }
        



        for(String str: list){
        
        System.out.print(str + " ");
        

        }


    }






















































































/*insertion sort*/


//sort highest to lowest with ArrayList

public static void insertSort(ArrayList<Integer>list, boolean a){


    for(int j = 1; j < list.size();j++){


        Integer temp = list.get(j);
        int possible = j;
        
        while(possible > 0 && temp > list.get(possible-1)){
        
        list.set(possible,list.get(possible-1));
        possible--;
        
        
        
        }
        
        
        
        list.set(possible,temp);
        
        
        
        }
        
        
        
        System.out.println(list);
        




}








//sort highest to lowest with Array

public static void insertSort(int[] list, int b){

for(int j = 1; j < list.length ;j++){


int temp = list[j];
int possible = j;

while(possible > 0 && temp > list[possible-1]){

list[possible] = list[possible -1];
possible--;



}



list[possible]= temp;



}


for(int a: list){

    System.out.print(a+ " ");

}

System.out.println(" ");


    
}








//sort A->Z 


public static void insertSort(ArrayList<String>list, int k ){


    for(int j = 1; j < list.size();j++){


        String temp = list.get(j);
        int possible = j;
        
        while(possible > 0 && temp.compareTo(list.get(possible-1)) <= 0){
        
        list.set(possible,list.get(possible-1));
        possible--;
        
        
        
        }
        
        
        
        list.set(possible,temp);
        
        
        
        }
        
        
        
        System.out.println(list);
        



    
}




//sort Z->A


public static void insertSort(ArrayList<String>list, boolean b,int a){



    for(int j = 1; j < list.size();j++){


        String temp = list.get(j);
        int possible = j;
        
        while(possible > 0 && temp.compareTo(list.get(possible-1)) >= 0){
        
        list.set(possible,list.get(possible-1));
        possible--;
        
        
        
        }
        
        
        
        list.set(possible,temp);
        
        
        
        }
        
        
        
        System.out.println(list);
        









    
}






public static void insertSort(String[]list,int a ,boolean b){




    for(int j = 1; j < list.length;j++){


        String temp = list[j];
        int possible = j;
        
        while(possible > 0 && temp.compareTo(list[possible-1]) >= 0){
        
        list[possible] = list[possible-1];
        possible--;
        
        
        
        }
        
        
        
        list[possible] = temp;
        
        
        
        }
        
        



        for(String str: list){
        
        System.out.print(str + " ");
        

        }











    
}

































}