package Java;

import java.util.ArrayList;
import java.util.regex.Pattern;
import Java.Stopwords;

public class ProductFinder {
	public static void main(String[] args) {
		String source="The Nokia Lumia 830 is an incredibly slim smartphone that boasts a 10 Mega Pixel PureView Camera with Optical Image Stabilization and Carl Zeiss Optics.";
		String descriptions[] ={"The Nokia Lumia 520 is powered by Windows Phone 8 and comes with a 1GHz dual core processor " +
								"that ensures you get the best of it. The touchscreen works just fine when you have gloves on or even with long finger nails. " +
								"Free music and navigation make for endless entertainment.",
								"Extremely slim and portable, the Samsung Galaxy Gand 2 gives a power packed performance and is loaded with amazing features for an " +
								"exceptionally smart experience.",
								"Samsung quattro is best with the budget",
								"Creating an impression with speed and performance, packed into a beautiful device, the Samsung Galaxy S Duos 2 is the ideal phone that " +
								"is not too heavy on your wallet."};
		
		String extracted[]=new String[descriptions.length];
		String filteredSource=filterWords(source);
		//System.out.println(filteredSource);
		for(int i=0;i<extracted.length;i++)
		{
			if(extract(descriptions[i],filteredSource))
				extracted[i]=descriptions[i];
		}
		for(int i=0;i<extracted.length;i++)
			if(extracted[i]!=null)
				System.out.println("Required Arrya"+extracted[i]);
		
	}

	private static boolean extract(String descriptions, String filteredSource) {
			
		int count=0;
		String filteredDescription=filterWords(descriptions);
		String fetchedSource[]=filteredSource.split(" ");
		String fetchedDescription[]=filteredDescription.split(" ");
		for(int i=0;i<fetchedSource.length;i++)
		{
			for(int j=0;j<fetchedDescription.length;j++){
				if(fetchedSource[i].equalsIgnoreCase(fetchedDescription[j]) && !(fetchedDescription[j].equalsIgnoreCase("")) && !(fetchedSource[i].equalsIgnoreCase("")))
					count++;
			}
		}
		
		if(count>=2)
			return true;
		else return false;

	}

	private static String filterWords(String string) {
		//Stopwords stop = null;
		ArrayList wordS=Stopwords.getStopwords();
		String newString[]=string.split(" ");
		for(int k=0;k<newString.length;k++){
			for(int i=0;i<wordS.size();i++){
				if(newString[k].equalsIgnoreCase((String) wordS.get(i)))
					{
						newString[k]="";
						break;
					}
			}
		}
		StringBuilder build=new StringBuilder();
		for(int i=0;i<newString.length;i++){
			if(newString[i].equalsIgnoreCase(" ")){
				newString[i]="";
				break;
			}
			build.append(newString[i]);
			build.append(" ");
		}
		return build.toString();
	}

}

