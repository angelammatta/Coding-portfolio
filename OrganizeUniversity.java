import java.lang.reflect.Array;

//beginning of class
public class OrganizeUniversity{

private University [] uni;

//beginning of constructor
public OrganizeUniversity(University a, University b, University c,University d, University e, University f){
uni = new University[6];
uni[0] = a;
uni[1] = b;
uni[2] = c;
uni[3] = d;
uni[4] = e;
uni[5] = f;


//end of constructor
}




public void doubleSize(){//beginning of doubleSize

University [] doubleUni = new University[uni.length * 2];


for(int i = 0; i< uni.length;i++){//beginning of 1st loop
    doubleUni[i]= uni[i];

}// end of 1st loop 



uni = new University[uni.length*2];

for(int i = 0; i< uni.length;i++){//beginning of 1st loop
    uni[i]= doubleUni[i];
}// end of 1st loop 







}//end of doubleSize


public void insertUni(University a, int insertUni){
    uni[insertUni] = a;

}








public String toString(){//Beginning of toString
String uniStr = " ";

    for(University university:uni){//beginning of for each to print
        uniStr+= university;
        uniStr+= "\n ";
        
       
        
    
    }//end of for each to print 
    
    
    return uniStr;


}//end of toString


}//end of classs