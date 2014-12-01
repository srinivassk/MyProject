package Java;

import java.util.Arrays;
import java.util.Comparator;
import java.util.HashMap;

public class TrendingPredictor {
	public static void main(String[] args) {
		// will get frequency and id from php script in 2d array and now will be storing in hashmap
		//will use $result from php
		
		String fetchedFrequency[][]={{"1","3"},{"2","2"},{"3","6"},{"5","1"},{"6","8"},
				{"7","13"},{"8","18"},{"9","11"},{"10","10"},{"11","3"},{"12","32"},{"13","14"},{"14","7"},{"15","4"},{"16","16"},{"17","18"},{"18","21"}};
		//fetchedFrequency=$result;
		String topTrending[]=new String[10];
		topTrending=calculatePopular(fetchedFrequency);
		for (int i=0;i<topTrending.length;i++) {
	        System.out.println(topTrending[i]+" ");
	    }
	}
	
	public static String[] calculatePopular(String fetchedFrequency[][]){
		String popular[] = new String[10];
		int p=0;
		int temp[]=new int[fetchedFrequency.length];
	    for(int i=0;i<temp.length;i++)
	    	temp[i]=Integer.parseInt(fetchedFrequency[i][1]);
	    Arrays.sort(temp);
	    int threshold=temp[temp.length-10];
	    
		for(int i=0;i<fetchedFrequency.length;i++){
			if(p>=10)
				break;
			int x=Integer.parseInt(fetchedFrequency[i][1]);
			if(x>=threshold){
				popular[p]=fetchedFrequency[i][0];
				p++;
			}
		}
	    return popular;
	}
}
